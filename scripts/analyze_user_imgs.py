import os
from PIL import Image

def analyze(p):
    im = Image.open(p)
    bbox = im.getbbox()
    return f"size={im.size}, mode={im.mode}, bbox={bbox}"

with open("scripts/analyze_user_imgs.txt", "w", encoding="utf-8") as out:
    for name in ['main.png', 'الخدمات الاخري.png', 'الصيانة.png', 'العناية.png', 'عزنا.png']:
        p = os.path.join('img', name)
        out.write(f"=== {name} ===\n{analyze(p)}\n")

print("Analyzed user images")
