import os
from PIL import Image

print("=== Assets in assets/images/ ===")
for f in sorted(os.listdir("assets/images")):
    p = os.path.join("assets/images", f)
    if os.path.isfile(p):
        try:
            im = Image.open(p)
            print(f"{f:30s} | Size: {im.size} | Mode: {im.mode} | Bytes: {os.path.getsize(p)}")
        except Exception as e:
            print(f"{f:30s} | {e}")
