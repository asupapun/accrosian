from chatbot.database.connection import mysql_conn
from chatbot.database.query import query_document_list


def view_document_list():
    conn = mysql_conn()

    cursor = conn.cursor(dictionary=True)

    cursor.execute(query_document_list)

    result = cursor.fetchall()

    cursor.close()
    conn.close()
    
    return result
