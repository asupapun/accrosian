from chatbot.database.connection import mysql_conn
from chatbot.database.query import query_insert_chunk


def insert_chunk_document_embedding(doc_id, chunk_id) -> str:
    
    conn = mysql_conn()
    
    cursor = conn.cursor()
    
    cursor.execute(query_insert_chunk,
         (doc_id, chunk_id))

    conn.commit()
    cursor.close()
    conn.close()

    return {"message" : f"{doc_id} embedding sucessfully inserted"}