import fitz

doc = fitz.open("كارفيس.pdf")
page = doc[0]

# Check all drawings/images in About section (y: 1950 to 2800)
print("=== Images in About Section ===")
for info in page.get_image_info(xrefs=True):
    b = info['bbox']
    if 1950 <= b[1] <= 2800:
        print(f"xref={info['xref']}, bbox={[round(x,1) for x in b]}, size={info['width']}x{info['height']}")
