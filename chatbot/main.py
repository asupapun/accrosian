from fastapi import FastAPI , UploadFile, File, Form
from chatbot.services.document_upload import insert_data_to_document_store
from chatbot.utils.load_split_pdf import load_split_pdfdata
from chatbot.utils.embed_vectorestore import add_data_to_vector_store
from chatbot.services.chunk_insert import insert_chunk_document_embedding
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


