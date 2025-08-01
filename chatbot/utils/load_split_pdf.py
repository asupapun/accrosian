from langchain_community.document_loaders import PDFPlumberLoader
from langchain_text_splitters import RecursiveCharacterTextSplitter
from tempfile import NamedTemporaryFile

def load_split_pdfdata(uploaded_file):
    # Write to a temporary file
    with NamedTemporaryFile(delete=False, suffix=".pdf") as tmp:
        tmp.write(uploaded_file)
        tmp.flush()  # Ensure content is saved
        print("temporary file:", tmp)

        # Use PyMuPDFLoader with the file path
        pdf_loader = PDFPlumberLoader(tmp.name)
        pdf_data = pdf_loader.load()
        print("pdf data:", pdf_data)

    # Split text into chunks
    text_splitter = RecursiveCharacterTextSplitter(chunk_size=1000, chunk_overlap=200)
    split_data = text_splitter.split_documents(pdf_data)
    return split_data
