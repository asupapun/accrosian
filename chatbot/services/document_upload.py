from chatbot.database.connection import mysql_conn
from chatbot.utils.doc_id import generate_doc_id
from chatbot.database.query import query_insert_pdf


def insert_data_to_document_store(pdf_bytes: bytes, category: str, name: str,conn,cursor) -> str:
    conn = conn
    cursor = cursor
    
    doc_id = generate_doc_id(conn,cursor)
    
    cursor.execute(query_insert_pdf,
         (doc_id, category, name, pdf_bytes))
    conn.commit()

    return {"doc_id" : doc_id}