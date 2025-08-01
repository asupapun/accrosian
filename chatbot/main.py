from fastapi import FastAPI, UploadFile, File, Form, HTTPException, Response,BackgroundTasks
from chatbot.database.connection import mysql_conn
from chatbot.services.document_upload import insert_data_to_document_store
from chatbot.services.view_document_list import view_document_list
from chatbot.services.view_document_browser import view_document_browser
from chatbot.services.document_delete import delete_pdf
from chatbot.schema.doc_id import DocId 
import json
from chatbot.utils.background_task import data_ingestion_pipeline




app = FastAPI()


@app.get("/")
async def home():
    return{
        "message" : "Welcome to Accrosian chatBot"
    }


@app.post("/upload_pdf")
async def insertdata(
    background_tasks : BackgroundTasks,
    category : str = Form(...),
    file : UploadFile = File(...),
):
    try:
        file_name = file.filename
        pdf_bytes = await file.read()
        conn = mysql_conn()
        cursor = conn.cursor()
        
        result = insert_data_to_document_store(pdf_bytes,category,file_name,conn,cursor)
        doc_id = result["doc_id"]

        cursor.close()
        conn.close()

        # file.file.seek(0) 
        background_tasks.add_task(data_ingestion_pipeline,pdf_bytes,doc_id)


        return {
            "message" : "Document uploaded sucessfully",
            "document_id" : doc_id ,
            "file_name" : file_name
            }
    
    except Exception as e:
        conn.rollback()
        raise HTTPException (status_code = 500, detail=f"document upload failed: {str(e)}")   


@app.get("/document_list")
async def document_list():
    try:
        documents = view_document_list()
        return documents
    except Exception as e:
        raise HTTPException(status_code=500,detail=f"failed to fetch document list: {str(e)}")




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
    try:
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
    except Exception as e:
        raise HTTPException(status_code=500,detail=f"error to view pdf: {str(e)}")


@app.post("/download_pdf")
async def download_pdf(doc_id : DocId):
    try:
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
    except Exception as e:
        raise HTTPException(status_code= 500,detail=f"error to download pdf: {str(e)}")

@app.post("/delete_pdf")
async def delete_data(doc_id : str):
    try:
        result = delete_pdf(doc_id)
        return result
    except Exception as e:
        raise HTTPException(status_code=500,detail=f"error to delete data: {str(e)}")