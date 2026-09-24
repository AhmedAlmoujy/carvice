from PIL import Image
import shutil
import os

os.makedirs("assets/images", exist_ok=True)

# 1. Copy original files
shutil.copyfile("img/Vice1.png", "assets/images/Vice1.png")
shutil.copyfile("img/vice2.png", "assets/images/vice2.png")

# 2. Also create tight crops with zero padding
im1 = Image.open("img/Vice1.png")
im2 = Image.open("img/vice2.png")

tight1 = im1.crop(im1.getbbox())
tight2 = im2.crop(im2.getbbox())

tight1.save("assets/images/chevron_left.png")
tight2.save("assets/images/chevron_right.png")

print("Saved assets/images/Vice1.png:", im1.size)
print("Saved assets/images/vice2.png:", im2.size)
print("Saved assets/images/chevron_left.png:", tight1.size)
print("Saved assets/images/chevron_right.png:", tight2.size)
