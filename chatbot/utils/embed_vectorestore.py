from langchain_google_genai import GoogleGenerativeAIEmbeddings
from dotenv import load_dotenv
from langchain_pinecone import PineconeVectorStore
from chatbot.database.connection import pinecone_conn
import os

load_dotenv()

GOOGLE_API_KEY = os.getenv("GOOGLE_API_KEY")


async def add_data_to_vector_store(split_data):
    try:
        # Load embedding model
        embedding = GoogleGenerativeAIEmbeddings(
            model="models/embedding-001",
            google_api_key=GOOGLE_API_KEY
        )

        # Initialize Pinecone vector store
        
        vector_store = PineconeVectorStore(embedding=embedding, index=pinecone_conn())

        # Add documents
        result = vector_store.add_documents(split_data)

        return {"chunk_id" : result}
    except Exception as e:
        raise RuntimeError(f" Failed to add data to vector store: {e}")