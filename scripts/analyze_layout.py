import fitz

doc = fitz.open("كارفيس.pdf")
page = doc[0]

sections = [
    ("Hero", 0, 1100),
    ("Services", 1150, 1950),
    ("About", 1950, 2900),
    ("Engine Wash", 2900, 3500),
    ("Why CarVice", 3500, 4350),
    ("Offers", 4350, 5050),
    ("FAQ", 5050, 5800),
    ("Testimonials", 5800, 6650),
    ("Who We Serve", 6650, 7250),
    ("Branches", 7250, 8250),
    ("Footer", 8250, 8640)
]

with open("scripts/layout_analysis.txt", "w", encoding="utf-8") as out:
    for name, y0, y1 in sections:
        out.write(f"\n==================== {name} ({y0} - {y1}) ====================\n")
        rect = fitz.Rect(0, y0, 1920, y1)
        
        # Images in this section
        imgs = [info for info in page.get_image_info(xrefs=True) if y0 <= info['bbox'][1] <= y1 or y0 <= info['bbox'][3] <= y1]
        out.write(f"--- Images ({len(imgs)}) ---\n")
        for im in sorted(imgs, key=lambda x: x['bbox'][0]):
            b = [round(v, 1) for v in im['bbox']]
            out.write(f"  xref={im['xref']} | x0={b[0]}, y0={b[1]}, x1={b[2]}, y1={b[3]} | size={im['width']}x{im['height']}\n")
            
        # Text blocks in this section
        blocks = page.get_text("blocks", clip=rect)
        out.write(f"--- Text Blocks ({len(blocks)}) ---\n")
        for blk in sorted(blocks, key=lambda x: (round(x[1], -1), x[0])):
            text_snippet = blk[4].strip().replace('\n', ' ')[:60]
            out.write(f"  x0={round(blk[0],1)}, y0={round(blk[1],1)}, x1={round(blk[2],1)}, y1={round(blk[3],1)}: {text_snippet}\n")

print("Analysis saved to scripts/layout_analysis.txt")
