import os
import shutil
from PIL import Image
import fitz

os.makedirs("assets/images", exist_ok=True)
os.makedirs("assets/images/why_icons", exist_ok=True)
os.makedirs("assets/images/engine_icons", exist_ok=True)

print("=== Starting PDF Asset Replacement ===")

# 1. Header Logo (raw_img_09: 2054x766 transparent PNG)
logo_src = "pdf_extracted/raw_img_09_xref195_2054x766.png"
shutil.copyfile(logo_src, "assets/images/logo.png")
print(f"Updated assets/images/logo.png from {logo_src}")

# 2. Footer Logo (raw_img_00: 835x299 transparent PNG)
footer_logo_src = "pdf_extracted/raw_img_00_xref65_835x299.png"
shutil.copyfile(footer_logo_src, "assets/images/footer_logo.png")
print(f"Updated assets/images/footer_logo.png from {footer_logo_src}")

# 3. Saudi National Day 94 Badge (raw_img_20: 290x133 transparent PNG)
badge_src = "pdf_extracted/raw_img_20_xref211_290x133.png"
shutil.copyfile(badge_src, "assets/images/saudi_badge.png")
print(f"Updated assets/images/saudi_badge.png from {badge_src}")

# 4. Hero Background (raw_img_24: 1738x977 workshop photo)
im_hero = Image.open("pdf_extracted/raw_img_24_xref239_1738x977.png").convert("RGB")
im_hero.save("assets/images/hero_bg.jpg", "JPEG", quality=95)
print(f"Updated assets/images/hero_bg.jpg ({im_hero.size})")

# 5. Service Photos (pure photographs without text)
shutil.copyfile("pdf_extracted/raw_img_35_xref273_1145x1374.png", "assets/images/service_photo_care.png")
shutil.copyfile("pdf_extracted/raw_img_36_xref297_1145x1374.png", "assets/images/service_photo_maintenance.png")
shutil.copyfile("pdf_extracted/raw_img_37_xref319_1145x1374.png", "assets/images/service_photo_other.png")
print("Updated service photos (care, maintenance, other) at 1145x1374 pure native resolution")

# 6. About Us Visual Collage:
# Render directly from PDF page at 2.5x scale (180 DPI) for ultra-sharp Retina clarity
doc = fitz.open("كارفيس.pdf")
page = doc[0]
mat_about = fitz.Matrix(2.0, 2.0)
rect_about = fitz.Rect(900, 1980, 1750, 2760)
pix_about = page.get_pixmap(matrix=mat_about, clip=rect_about, alpha=True)
pix_about.save("assets/images/about_collage.png")
print(f"Updated assets/images/about_collage.png ({pix_about.width}x{pix_about.height})")

# 7. Engine Wash Comparison:
# Save the rendered comparison card
shutil.copyfile("extracted_cards/engine_wash_visual.png", "assets/images/engine_wash.png")
# Also save the raw clean and dirty engine photos
shutil.copyfile("pdf_extracted/raw_img_31_xref127_1536x1024.png", "assets/images/engine_dirty.png")
shutil.copyfile("pdf_extracted/raw_img_32_xref137_1536x1024.png", "assets/images/engine_clean.png")
print("Updated assets/images/engine_wash.png and dirty/clean engine photos (1536x1024)")

# 8. Engine Wash 3 Pillar Icons:
shutil.copyfile("pdf_extracted/raw_img_17_xref191_1254x1254.png", "assets/images/engine_icons/icon_check.png")
shutil.copyfile("pdf_extracted/raw_img_21_xref219_1254x1254.png", "assets/images/engine_icons/icon_team.png")
shutil.copyfile("pdf_extracted/raw_img_19_xref207_1254x1254.png", "assets/images/engine_icons/icon_services.png")
print("Updated 3 Engine feature icons (1254x1254 transparent PNGs)")

# 9. Why CarVice Technician Visual:
shutil.copyfile("extracted_cards/why_carvice_visual.png", "assets/images/why_carvice_tech.png")
print("Updated assets/images/why_carvice_tech.png (1406x1058)")

# 10. Why CarVice 6 Perk Icons:
shutil.copyfile("pdf_extracted/raw_img_02_xref109_1254x1254.png", "assets/images/why_icons/perk_price.png")
shutil.copyfile("pdf_extracted/raw_img_06_xref105_1254x1254.png", "assets/images/why_icons/perk_tech.png")
shutil.copyfile("pdf_extracted/raw_img_13_xref143_1254x1254.png", "assets/images/why_icons/perk_speed.png")
shutil.copyfile("pdf_extracted/raw_img_15_xref101_1254x1254.png", "assets/images/why_icons/perk_quality.png")
shutil.copyfile("pdf_extracted/raw_img_04_xref93_1254x1254.png", "assets/images/why_icons/perk_team.png")
shutil.copyfile("pdf_extracted/raw_img_16_xref155_1254x1254.png", "assets/images/why_icons/perk_punctual.png")
print("Updated 6 Why CarVice perk icons (1254x1254 transparent PNGs)")

# 11. Offers Banner (raw_img_38: 2129x738 native banner)
shutil.copyfile("pdf_extracted/raw_img_38_xref325_2129x738.png", "assets/images/offers_banner.png")
print("Updated assets/images/offers_banner.png (2129x738)")

# 12. FAQ 3D Illustration / Visual Card:
rect_faq = fitz.Rect(960, 5080, 1680, 5740)
pix_faq = page.get_pixmap(matrix=mat_about, clip=rect_faq, alpha=True)
pix_faq.save("assets/images/faq_illustration.png")
print(f"Updated assets/images/faq_illustration.png ({pix_faq.width}x{pix_faq.height})")

# 13. Testimonials Background:
im_test = Image.open("pdf_extracted/raw_img_07_xref81_2129x738.png").convert("RGB")
im_test.save("assets/images/testimonials_bg.jpg", "JPEG", quality=95)
print(f"Updated assets/images/testimonials_bg.jpg ({im_test.size})")

# 14. Who We Serve 4 Persona Cards:
shutil.copyfile("extracted_cards/persona_1.png", "assets/images/persona_saver.png")
shutil.copyfile("extracted_cards/persona_2.png", "assets/images/persona_women.png")
shutil.copyfile("extracted_cards/persona_3.png", "assets/images/persona_newcar.png")
shutil.copyfile("extracted_cards/persona_4.png", "assets/images/persona_luxury.png")
print("Updated 4 Persona cards (saver, women, newcar, luxury) from 2x PDF renders")

# 15. Branches 3D Map:
im_map = Image.open("pdf_extracted/raw_img_27_xref337_2078x757.png").convert("RGB")
im_map.save("assets/images/branches_map.jpg", "JPEG", quality=95)
print(f"Updated assets/images/branches_map.jpg ({im_map.size})")

# 16. Traditional Saudi Pattern Ribbon:
# raw_img_25 cropped
im_patt = Image.open("pdf_extracted/raw_img_25_xref247_2048x768.png")
bbox_patt = im_patt.getbbox()
if bbox_patt:
    im_patt_cropped = im_patt.crop(bbox_patt)
    im_patt_cropped.save("assets/images/pattern_band.png")
    print(f"Updated assets/images/pattern_band.png ({im_patt_cropped.size})")

print("=== All PDF Assets Updated Successfully! ===")
