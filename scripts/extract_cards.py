import fitz
from PIL import Image
import os

doc = fitz.open("كارفيس.pdf")
page = doc[0]

# Let's inspect the exact visual regions from the PDF:
# At 2x scale (144 dpi), 1 pt = 2 px.
zoom = 2.0
mat = fitz.Matrix(zoom, zoom)

os.makedirs("extracted_cards", exist_ok=True)

# Define exact regions of cards in the PDF (x0, y0, x1, y1 in points):
crops = {
    # 1. Services cards:
    "service_card_1_care": (1254, 1277, 1754, 1877),
    "service_card_2_maintenance": (710, 1277, 1210, 1877),
    "service_card_3_other": (166, 1277, 666, 1877),
    
    # 2. About section visual (the photo arrangement on the left):
    "about_visual": (900, 1997, 1720, 2750),
    
    # 3. Engine wash comparison box:
    "engine_wash_visual": (755, 2978, 1355, 3378),
    
    # 4. Why CarVice technician visual:
    "why_carvice_visual": (257, 3631, 960, 4160),
    
    # 5. Offers banner:
    "offers_banner": (238, 4486, 1681, 4986),
    
    # 6. FAQ 3D graphic:
    "faq_graphic": (885, 5086, 1747, 5736),
    
    # 7. Who We Serve 4 cards:
    # Notice the 4 cards in bbox y: 6851 to 7126
    "persona_1": (1386, 6851, 1774, 7126),
    "persona_2": (973, 6851, 1360, 7126),
    "persona_3": (560, 6851, 947, 7126),
    "persona_4": (146, 6851, 534, 7126),
    
    # 8. Branches map:
    "branches_map": (0, 7451, 1920, 8152),
    
    # 9. Saudi pattern ribbon:
    # Let's check where the pattern ribbons are
}

for name, (x0, y0, x1, y1) in crops.items():
    rect = fitz.Rect(x0, y0, x1, y1)
    pix = page.get_pixmap(matrix=mat, clip=rect, alpha=False)
    out_file = f"extracted_cards/{name}.png"
    pix.save(out_file)
    print(f"Saved {out_file}: {pix.width}x{pix.height}")
