

#for create table document_store
query_document_store = """ 
    CREATE TABLE IF NOT EXISTS document_store (
    id INT PRIMARY KEY  AUTO_INCREMENT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    doc_id VARCHAR(200) NOT NULL UNIQUE,
    category VARCHAR(200),
    name VARCHAR(200),
    data LONGBLOB
);
"""

#for create table document_embedding
query_document_embedding = """ 
    CREATE TABLE IF NOT EXISTS document_embedding (
    id INT PRIMARY KEY AUTO_INCREMENT,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    doc_id VARCHAR(200) NOT NULL,
    embedding_vector JSON,
    FOREIGN KEY (doc_id) REFERENCES document_store(doc_id) ON DELETE CASCADE
);
"""

#for fetching the latest document id
latestid = """SELECT doc_id FROM document_store ORDER BY id DESC LIMIT 1;"""


#for inserting pdf into document_store table
query_insert_pdf = """INSERT INTO document_store (doc_id, category, name, data)
        VALUES (%s, %s, %s, %s) """

#for insert the embedding into document_embedding table
query_insert_chunk = """ INSERT INTO document_embedding (doc_id, embedding_vector)
        VALUES (%s, %s);"""


#for view list of document in the document store table
query_document_list = """SELECT DATE_FORMAT(timestamp, "%d-%m-%Y") AS timestamp,doc_id,category,name
        FROM document_store"""


#for view a particular document with document id
query_view_document = """SELECT name,data FROM document_store WHERE doc_id = %s """

#for view the chunk embadding from document_embedding table
query_view_document_embedding  = """SELECT embedding_vector FROM document_embedding WHERE doc_id = %s"""

#delete data from both the table
query_delete_data = """DELETE FROM document_store WHERE doc_id = %s"""