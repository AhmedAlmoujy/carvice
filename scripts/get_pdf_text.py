import fitz

doc = fitz.open("كارفيس.pdf")
text = ""
for page in doc:
    text += page.get_text()

with open("scripts/pdf_all_text.txt", "w", encoding="utf-8") as f:
    f.write(text)

print("Saved all text from PDF, total length:", len(text))
