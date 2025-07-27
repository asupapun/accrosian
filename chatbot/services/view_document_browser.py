from chatbot.database.connection import mysql_conn
from chatbot.database.query import query_view_document


def view_document_browser(doc_id):
    conn = mysql_conn()

    cursor = conn.cursor(dictionary=True)

    cursor.execute(query_view_document,(doc_id,))

    result = cursor.fetchone()

    doc_name = result["name"]
    doc_data = result["data"]

    cursor.close()
    conn.close()
    
    return {"doc_name" : doc_name, "doc_data" : doc_data}