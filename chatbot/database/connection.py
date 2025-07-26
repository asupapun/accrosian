import mysql.connector


def mysql_conn():
    conf = {
    "host" : "127.0.0.1",
    "user" : "root",
    "password" : "Asutosh@1997",
    "database" : "accrosian_db"
}
   
    conn = mysql.connector.connect(**conf)
    return conn