import mysql.connector
from dotenv import load_dotenv
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