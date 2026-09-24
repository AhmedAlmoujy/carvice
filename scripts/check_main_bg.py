from PIL import Image

im_main = Image.open("img/main.png")
im_main.resize((960, 540)).convert("RGB").save("scripts/main_thumbnail.jpg")
print("Saved scripts/main_thumbnail.jpg")
