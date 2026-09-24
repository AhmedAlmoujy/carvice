from PIL import Image

for name in ["scripts/about_collage_test.png", "scripts/why_carvice_test.png", "scripts/faq_test.png"]:
    im = Image.open(name)
    bbox = im.getbbox()
    print(f"{name}: mode={im.mode}, size={im.size}, non-zero bbox={bbox}")
