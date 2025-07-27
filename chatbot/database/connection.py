import mysql.connector
from dotenv import load_dotenv
from pinecone import Pinecone
import os

load_dotenv()


def mysql_conn():
    conf = {
    "host" : os.getenv("DB_HOST"),
    "user" : os.getenv("DB_USER"),
    "password" : os.getenv("DB_PASSWORD"),
    "database" : os.getenv("DB_NAME")
}
   
    conn = mysql.connector.connect(**conf)
    return conn


def pinecone_conn():
    PINECONE_API_KEY = os.getenv("PINECONE_API_KEY")
    PINECONE_INDEX_NAME = os.getenv("PINECONE_INDEX_NAME")
    PINECONE_HOST = os.getenv("PINECONE_HOST")
    pc = Pinecone(api_key=PINECONE_API_KEY)
    index = pc.Index(name=PINECONE_INDEX_NAME, host=PINECONE_HOST)
    return index