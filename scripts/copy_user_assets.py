import shutil
import os

os.makedirs("assets/images", exist_ok=True)

# 1. Hero background from main.png
shutil.copyfile("img/main.png", "assets/images/hero_main.png")
shutil.copyfile("img/main.png", "assets/images/hero_bg.jpg")
print("1. Copied main.png")

# 2. Saudi badge from عزنا.png
shutil.copyfile("img/\u0639\u0632\u0646\u0627.png", "assets/images/azna.png")
shutil.copyfile("img/\u0639\u0632\u0646\u0627.png", "assets/images/saudi_badge.png")
print("2. Copied azna.png")

# 3. The 3 new service card images
shutil.copyfile("img/\u0627\u0644\u0639\u0646\u0627\u064a\u0629.png", "assets/images/service_card_care_1.png")
shutil.copyfile("img/\u0627\u0644\u0635\u064a\u0627\u0646\u0629.png", "assets/images/service_card_maint_1.png")
shutil.copyfile("img/\u0627\u0644\u062e\u062f\u0645\u0627\u062a \u0627\u0644\u0627\u062e\u0631\u064a.png", "assets/images/service_card_other_1.png")
print("3. Copied 3 service cards from img/")
