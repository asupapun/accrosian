from fastapi import FastAPI , UploadFile, File, Form
from chatbot.services.document_upload import insert_data_to_document_store



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
    print(file.filename)

    result = insert_data_to_document_store(pdf_bytes,category,file_name)

    doc_id = result["doc_id"]

    return {"message" : "Document uploaded sucessfully" ,"document_id" : doc_id ,"file_name" : file_name}


