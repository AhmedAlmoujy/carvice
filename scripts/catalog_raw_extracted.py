import os
from PIL import Image

print(f"{'Filename':40s} | {'Size':12s} | {'Mode':6s} | {'Alpha?':6s}")
print("-" * 75)
for f in sorted(os.listdir("pdf_extracted")):
    if f.endswith(('.png', '.jpeg', '.jpg')):
        p = os.path.join("pdf_extracted", f)
        im = Image.open(p)
        has_alpha = "Yes" if "A" in im.mode or "transparency" in im.info else "No"
        print(f"{f:40s} | {str(im.size):12s} | {im.mode:6s} | {has_alpha:6s}")
