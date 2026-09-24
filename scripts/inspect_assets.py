import re
import glob

print("--- Assets Referenced in HTML and CSS ---")
for path in ['index.html'] + glob.glob('styles/*.css'):
    with open(path, 'r', encoding='utf-8') as f:
        txt = f.read()
    found = set(re.findall(r'assets/[^)"\'\s]+', txt))
    for item in sorted(found):
        print(f"{path}: {item}")
