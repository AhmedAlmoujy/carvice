from PIL import Image

for name in ['العناية.png', 'الصيانة.png', 'الخدمات الاخري.png']:
    im_user = Image.open('img/' + name)
    print(f"User image '{name}': size={im_user.size}, mode={im_user.mode}")
