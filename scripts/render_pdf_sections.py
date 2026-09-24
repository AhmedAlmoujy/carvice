import fitz
from PIL import Image
import os

doc = fitz.open("كارفيس.pdf")
page = doc[0]

# Render full sections from the PDF at high resolution (e.g. 150 DPI) so we can see how Figma rendered them
# Page is 1920 x 8640 pt
# 150 dpi is zoom = 150/72 = 2.0833
zoom = 150 / 72
mat = fitz.Matrix(zoom, zoom)

os.makedirs("pdf_sections_render", exist_ok=True)

sections = [
    ("01_header_hero", 0, 1150),
    ("02_services", 1150, 1950),
    ("03_about", 1950, 2900),
    ("04_engine_wash", 2900, 3500),
    ("05_why_carvice", 3500, 4350),
    ("06_offers", 4350, 5050),
    ("07_faq", 5050, 5800),
    ("08_testimonials", 5800, 6650),
    ("09_who_we_serve", 6650, 7250),
    ("10_branches", 7250, 8250),
    ("11_footer", 8250, 8640)
]

for name, y0, y1 in sections:
    clip_rect = fitz.Rect(0, y0, 1920, y1)
    pix = page.get_pixmap(matrix=mat, clip=clip_rect, alpha=False)
    out_path = f"pdf_sections_render/{name}.jpg"
    pix.save(out_path)
    print(f"Rendered {out_path} ({pix.width}x{pix.height})")
