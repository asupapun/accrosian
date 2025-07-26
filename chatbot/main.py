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
    pdf_bytes = await file.read()
    print(file.filename)

    doc_id = insert_data_to_document_store(pdf_bytes,category,file.filename)

    return {"message" : "Document uploaded sucessfully" ,"document_id" : doc_id}


