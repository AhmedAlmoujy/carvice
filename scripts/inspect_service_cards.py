from PIL import Image
import os

cards = ['الخدمات الاخري.png', 'الصيانة.png', 'العناية.png']
with open("scripts/service_cards_inspect.txt", "w", encoding="utf-8") as out:
    for idx, name in enumerate(cards):
        p = os.path.join('img', name)
        im = Image.open(p)
        out.write(f"[{idx}] {name}: size={im.size}, mode={im.mode}, bbox={im.getbbox()}\n")
        # Save as jpg preview
        im.convert("RGB").save(f"scripts/card_preview_{idx}.jpg")

print("Cards inspected and previews saved")
