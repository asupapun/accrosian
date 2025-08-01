from chatbot.utils.load_split_pdf import load_split_pdfdata
from chatbot.utils.embed_vectorestore import add_data_to_vector_store
from chatbot.database.query import query_update_status,query_insert_chunk
from chatbot.database.connection import mysql_conn
import json


async def data_ingestion_pipeline(file,doc_id):
    try:
        conn = mysql_conn()
        cursor = conn.cursor()
        split_data = load_split_pdfdata(file)
        print("length of split data :", len(split_data))

        chunk_embed = await add_data_to_vector_store(split_data)
        chunk_ids = chunk_embed["chunk_id"]
        print("Chunk IDs: ", chunk_ids)
        chunk_ids_json = json.dumps(chunk_ids)


        cursor.execute(query_insert_chunk,(doc_id, chunk_ids_json))
        cursor.execute(query_update_status,("completed",doc_id))
        conn.commit()

        return {
            "status": "success",
            "doc_id": doc_id,
            "chunk_count": len(split_data)
        }

    except Exception as e:
        try:
            cursor.execute(query_update_status, ("failed", doc_id))
            conn.commit()
        except:
            pass
        try:
            conn.rollback()
        except:
            pass
        raise Exception(f"Data ingestion failed: {str(e)}")

    finally:
        cursor.close()
        conn.close()
