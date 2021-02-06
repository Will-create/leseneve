from PIL import Image
image = Image.open('logo1.png')
new = image.resize((170,30))
#print('new',new.size)
new.save('logo2.png')
new.show()
