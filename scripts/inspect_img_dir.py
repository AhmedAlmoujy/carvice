import os
from PIL import Image

with open("scripts/img_inspection_utf8.txt", "w", encoding="utf-8") as out:
    for f in sorted(os.listdir("img")):
        p = os.path.join("img", f)
        try:
            im = Image.open(p)
            out.write(f"{f}: size={im.size}, mode={im.mode}, bytes={os.path.getsize(p)}\n")
        except Exception as e:
            out.write(f"{f}: {e}\n")

print("Done")
