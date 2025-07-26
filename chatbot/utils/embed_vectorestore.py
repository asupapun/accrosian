from langchain_google_genai import GoogleGenerativeAIEmbeddings
from dotenv import load_dotenv
from langchain_pinecone import PineconeVectorStore
from pinecone import Pinecone
import os

load_dotenv()

GOOGLE_API_KEY = os.getenv("GOOGLE_API_KEY")
PINECONE_API_KEY = os.getenv("PINECONE_API_KEY")
PINECONE_INDEX_NAME = os.getenv("PINECONE_INDEX_NAME")
PINECONE_HOST = os.getenv("PINECONE_HOST")


def add_data_to_vector_store(split_data):
    try:
        # Load embedding model
        embedding = GoogleGenerativeAIEmbeddings(
            model="models/embedding-001",
            google_api_key=GOOGLE_API_KEY
        )

        # Initialize Pinecone vector store
        pc = Pinecone(api_key=PINECONE_API_KEY)
        index = pc.Index(name=PINECONE_INDEX_NAME, host=PINECONE_HOST)
        vector_store = PineconeVectorStore(embedding=embedding, index=index)

        # Add documents
        result = vector_store.add_documents(split_data)

        return {"chunk_id" : result}
    except Exception as e:
        raise RuntimeError(f" Failed to add data to vector store: {e}")