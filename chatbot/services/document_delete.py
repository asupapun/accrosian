from chatbot.database.connection import mysql_conn,pinecone_conn
from chatbot.schema.doc_id import DocId
from chatbot.database.query import query_view_document_embedding,query_delete_data
import json


def delete_pdf(doc_id):
    conn = mysql_conn()
    p_conn = pinecone_conn()

    cursor = conn.cursor(dictionary=True)

    cursor.execute(query_view_document_embedding,(doc_id,))

    result = cursor.fetchone()

    vector_id = json.loads(result["embedding_vector"])

    p_conn.delete(ids=vector_id)

    cursor.execute(query_delete_data,(doc_id,))

    conn.commit()
    cursor.close()
    conn.close()

    return {"message" : f"{doc_id}file deleted sucessfully"}
