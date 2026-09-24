import fitz # PyMuPDF
import os

doc = fitz.open("كارفيس.pdf")
page = doc[0]
rect = page.rect
print(f"Page size: {rect.width} x {rect.height}")

image_infos = page.get_image_info(xrefs=True)
print(f"Total image instances: {len(image_infos)}")

# Sort by y0 (top to bottom of page)
sorted_images = sorted(image_infos, key=lambda x: (x['bbox'][1], x['bbox'][0]))

for idx, info in enumerate(sorted_images):
    xref = info['xref']
    bbox = [round(b, 1) for b in info['bbox']]
    w, h = info['width'], info['height']
    print(f"[{idx:02d}] xref={xref} | bbox={bbox} | size={w}x{h}")
