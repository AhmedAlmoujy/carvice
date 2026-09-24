from PIL import Image

im = Image.open("img/العناية.png")
print("Size:", im.size)
# Let's inspect the button bounding box
# Button is gold at bottom
gold_y = []
gold_x = []
for y in range(im.height):
    for x in range(im.width):
        p = im.getpixel((x, y))
        # check gold color: R > 200, G > 140, B < 60
        if p[0] > 200 and p[1] > 140 and p[2] < 60:
            gold_y.append(y)
            gold_x.append(x)

if gold_y:
    print(f"Button/gold bounds: x in [{min(gold_x)}, {max(gold_x)}], y in [{min(gold_y)}, {max(gold_y)}]")
