import os
from PIL import Image

def analyze_img(path):
    if not os.path.exists(path):
        return "Not found"
    im = Image.open(path)
    return f"{im.size}, mode={im.mode}"

print("about_visual.png:", analyze_img("extracted_cards/about_visual.png"))
print("raw_img_28:", analyze_img("pdf_extracted/raw_img_28_xref341_1188x1188.png"))
print("raw_img_23:", analyze_img("pdf_extracted/raw_img_23_xref235_1254x1254.png"))
print("raw_img_26:", analyze_img("pdf_extracted/raw_img_26_xref253_1254x1254.png"))
print("raw_img_18:", analyze_img("pdf_extracted/raw_img_18_xref201_1044x1044.png"))
print("raw_img_25:", analyze_img("pdf_extracted/raw_img_25_xref247_2048x768.png"))

print("engine_wash_visual:", analyze_img("extracted_cards/engine_wash_visual.png"))
print("raw_img_31 (engine):", analyze_img("pdf_extracted/raw_img_31_xref127_1536x1024.png"))
print("raw_img_32 (engine):", analyze_img("pdf_extracted/raw_img_32_xref137_1536x1024.png"))

print("why_carvice_visual:", analyze_img("extracted_cards/why_carvice_visual.png"))
print("raw_img_11:", analyze_img("pdf_extracted/raw_img_11_xref113_1406x1052.png"))

print("faq_graphic:", analyze_img("extracted_cards/faq_graphic.png"))
print("raw_img_10:", analyze_img("pdf_extracted/raw_img_10_xref85_1453x1083.png"))

print("persona_1:", analyze_img("extracted_cards/persona_1.png"))
print("persona_2:", analyze_img("extracted_cards/persona_2.png"))
print("persona_3:", analyze_img("extracted_cards/persona_3.png"))
print("persona_4:", analyze_img("extracted_cards/persona_4.png"))
print("raw_img_01:", analyze_img("pdf_extracted/raw_img_01_xref69_1254x1254.png"))
print("raw_img_03:", analyze_img("pdf_extracted/raw_img_03_xref73_1254x1254.png"))
print("raw_img_08:", analyze_img("pdf_extracted/raw_img_08_xref77_1254x1254.png"))
print("raw_img_14:", analyze_img("pdf_extracted/raw_img_14_xref97_1254x1254.png"))
