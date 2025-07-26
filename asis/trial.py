from langchain_community.document_loaders import WebBaseLoader
from bs4 import BeautifulSoup
from langchain_community.document_loaders import PyMuPDFLoader
import os
from langchain_text_splitters import RecursiveCharacterTextSplitter
from langchain_google_genai import GoogleGenerativeAIEmbeddings
from dotenv import load_dotenv
from langchain_pinecone import PineconeVectorStore
from pinecone import Pinecone
from langchain_google_genai import ChatGoogleGenerativeAI
load_dotenv()

GOOGLE_API_KEY = os.getenv("GOOGLE_API_KEY")
PINECONE_API_KEY = os.getenv("PINECONE_API_KEY")
PINECONE_INDEX_NAME = os.getenv("PINECONE_INDEX_NAME")
PINECONE_HOST = os.getenv("PINECONE_HOST")

# def load_urldata():
#     url_loader = WebBaseLoader("https://test.accrosian.com/")
#     url_data = url_loader.load()
#     return url_data

def load_pdfdata():
    pdf_loader = PyMuPDFLoader(r"E:\Asish\AI\end_to_end_medical_bot\Data\Medical_book.pdf")
    pdf_data = pdf_loader.load()
    return pdf_data


def create_split_data(pdf_data):
    text_splitter = RecursiveCharacterTextSplitter(chunk_size=1000, chunk_overlap=200)
    split_data = text_splitter.split_documents(pdf_data)
    return split_data

def load_embedding_model(split_data):
    embedding = GoogleGenerativeAIEmbeddings(
            model = "models/embedding-001",
            google_api_key= GOOGLE_API_KEY
)
    return embedding

def initialize_vector_store(embedding):
    pc = Pinecone(api_key = PINECONE_API_KEY)
    index = pc.Index(name = PINECONE_INDEX_NAME,host = PINECONE_HOST)
    vector_store = PineconeVectorStore(embedding=embedding, index=index)
    return vector_store


def add_data_to_vector_store(vector_store, split_data):
    vector_store.add_documents(split_data)
    print("Data added to vector store successfully.")
