from fastapi import FastAPI, UploadFile, File, Form, HTTPException, Response
from chatbot.services.document_upload import insert_data_to_document_store
from chatbot.utils.load_split_pdf import load_split_pdfdata
from chatbot.utils.embed_vectorestore import add_data_to_vector_store
from chatbot.services.chunk_insert import insert_chunk_document_embedding
from chatbot.services.view_document_list import view_document_list
from chatbot.services.view_document_browser import view_document_browser
from chatbot.schema.doc_id import DocId
from chatbot.services.document_delete import delete_pdf
import json




app = FastAPI()


@app.get("/")
async def home():
    return{
        "message" : "Welcome to Accrosian chatBot"
    }


@app.post("/upload_pdf")
async def insertdata(
    category : str = Form(...),
    file : UploadFile = File(...)
):
    file_name = file.filename
    pdf_bytes = await file.read()
    
    result = insert_data_to_document_store(pdf_bytes,category,file_name)
    doc_id = result["doc_id"]

    file.file.seek(0) 
    split_data = load_split_pdfdata(file)

    chunk_embed = add_data_to_vector_store(split_data)
    chunk_ids = chunk_embed["chunk_id"]
    chunk_ids = json.dumps(chunk_ids)

    insert_chunk_document_embedding(doc_id, chunk_ids)


    return {"message" : "Document and embedded chunk uploaded sucessfully" ,"document_id" : doc_id ,"file_name" : file_name}


@app.get("/document_list")
async def document_list():
    documents = view_document_list()
    return documents




# @app.post("/view_pdf")
# async def view_pdf_post(doc_id):
#     pdf_data = view_document_browser(doc_id)
#     if not pdf_data:
#         raise HTTPException(status_code=404, detail="PDF not found")
    
#     return Response(
#         content=pdf_data,
#         media_type="application/pdf",
#         headers={"Content-Disposition": "inline; filename=document.pdf"}
#     )



@app.get("/view_pdf/{doc_id}")
async def view_pdf(doc_id: str):
    data = view_document_browser(doc_id) 
    pdf_name = data["doc_name"]
    pdf_data = data["doc_data"]
    if not pdf_data:
        raise HTTPException(status_code=404, detail="PDF not found")
    
    return Response(
        content=pdf_data,
        media_type="application/pdf",
        headers={"Content-Disposition": f"inline; filename={pdf_name}"}
    )


@app.post("/download_pdf")
async def download_pdf(doc_id : DocId):
    data = view_document_browser(doc_id.doc_id) 
    pdf_name = data["doc_name"]
    pdf_data = data["doc_data"]
    if not pdf_data:
        raise HTTPException(status_code=404, detail="PDF not found")
    
    return Response(
        content=pdf_data,
        media_type="application/pdf",
        headers={"Content-Disposition": f"attachment; filename={pdf_name}"}
    )

@app.post("/delete_pdf")
async def delete_data(doc_id : str):
    result = delete_pdf(doc_id)
    return result