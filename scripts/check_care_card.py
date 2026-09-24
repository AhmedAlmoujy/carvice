import fitz
from PIL import Image

im = Image.open("img/العناية.png")
print("Size:", im.size)
# Let's save a viewable PNG to scripts/inspect_care_card.png
im.save("scripts/inspect_care_card.png")
print("Saved scripts/inspect_care_card.png")
