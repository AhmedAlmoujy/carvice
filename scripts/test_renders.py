import fitz
from PIL import Image

doc = fitz.open("كارفيس.pdf")
page = doc[0]

# Let's inspect the exact visual bounds of the About photo collage in the PDF:
# In the PDF, page size is 1920 x 8640.
# The about photos are around x: 1040 to 1720, y: 1990 to 2750.
# Let's render at zoom=2.0 (144 dpi) with transparent or black background:

mat = fitz.Matrix(2.0, 2.0)
rect_about = fitz.Rect(900, 1980, 1750, 2760)
pix = page.get_pixmap(matrix=mat, clip=rect_about, alpha=True)
pix.save("scripts/about_collage_test.png")
print("Saved scripts/about_collage_test.png:", pix.width, "x", pix.height)

# Check Why Carvice visual bounds:
rect_why = fitz.Rect(250, 3540, 970, 4240)
pix_why = page.get_pixmap(matrix=mat, clip=rect_why, alpha=True)
pix_why.save("scripts/why_carvice_test.png")
print("Saved scripts/why_carvice_test.png:", pix_why.width, "x", pix_why.height)

# Check FAQ 3D graphic bounds:
rect_faq = fitz.Rect(880, 5080, 1750, 5740)
pix_faq = page.get_pixmap(matrix=mat, clip=rect_faq, alpha=True)
pix_faq.save("scripts/faq_test.png")
print("Saved scripts/faq_test.png:", pix_faq.width, "x", pix_faq.height)
