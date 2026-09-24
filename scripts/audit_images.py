import os, re

theme_dir = r"e:\CarVice\carvice-express"

found_refs = set()
for root, dirs, files in os.walk(theme_dir):
    for f in files:
        if f.endswith(('.php', '.html', '.css', '.js')):
            filepath = os.path.join(root, f)
            with open(filepath, 'r', encoding='utf-8', errors='ignore') as fp:
                text = fp.read()
                matches = re.findall(r'(?:assets/images|img)/([a-zA-Z0-9_\-\.%]+)', text)
                for m in matches:
                    found_refs.add(m)

print("Referenced Image Filenames in Code:")
missing = []
for ref in sorted(found_refs):
    p1 = os.path.join(theme_dir, 'assets', 'images', ref)
    p2 = os.path.join(theme_dir, 'img', ref)
    exists = os.path.isfile(p1) or os.path.isfile(p2)
    status = "OK" if exists else "MISSING"
    print(f"  [{status}] {ref}")
    if not exists:
        missing.append(ref)

print("\nTotal Missing Images Count:", len(missing))
if missing:
    print("Missing files:", missing)
