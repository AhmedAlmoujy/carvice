import fitz

doc = fitz.open("كارفيس.pdf")
page = doc[0]

# Let's extract text in the Persona section (y from 6700 to 7200)
rect = fitz.Rect(0, 6700, 1920, 7200)
text = page.get_text("text", clip=rect)
print("=== Text in Personas Section ===")
print(text)
