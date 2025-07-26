from chatbot.database.connection import mysql_conn
from chatbot.database.query import latestid

def generate_doc_id():
    conn = mysql_conn()
    cursor = conn.cursor()

    cursor.execute(latestid)
    result = cursor.fetchone()

    if result is None:
        new_id_num = 1
    else:
        last_id = result[0] 
        last_num = int(last_id.split('-')[-1])
        new_id_num = last_num + 1

    new_doc_id = f"DOC-{new_id_num:05d}"

    cursor.close()
    conn.close()
    return new_doc_id


