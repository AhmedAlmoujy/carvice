from PIL import Image

# Let's inspect the dimensions and thumbnail slices of 03_about.jpg and 07_faq.jpg
im_about = Image.open("pdf_sections_render/03_about.jpg")
print("03_about size:", im_about.size)

# In 03_about, let's see which side has the text and which has the image
# Image is 4000 px wide.
# Left half is 0..2000, Right half is 2000..4000.
left_half = im_about.crop((0, 0, 2000, im_about.height))
right_half = im_about.crop((2000, 0, 4000, im_about.height))

# Save thumbnails to verify
left_half.resize((500, int(500 * im_about.height / 2000))).save("scripts/about_left.jpg")
right_half.resize((500, int(500 * im_about.height / 2000))).save("scripts/about_right.jpg")

im_faq = Image.open("pdf_sections_render/07_faq.jpg")
left_faq = im_faq.crop((0, 0, 2000, im_faq.height))
right_faq = im_faq.crop((2000, 0, 4000, im_faq.height))
left_faq.resize((500, int(500 * im_faq.height / 2000))).save("scripts/faq_left.jpg")
right_faq.resize((500, int(500 * im_faq.height / 2000))).save("scripts/faq_right.jpg")

print("Saved left/right slices for about and faq")
