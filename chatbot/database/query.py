

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

query_insert_chunk = """ INSERT INTO document_embedding (doc_id, embedding_vector)
        VALUES (%s, %s);"""
