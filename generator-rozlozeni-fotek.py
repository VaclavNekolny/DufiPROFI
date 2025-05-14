
vysledek = ''

slozka = 'ucesy'
pocet = 19


for cislo in range(pocet + 1):
    text = f'<a href="./galerie/{slozka}/{slozka}{cislo:03}.jpg" data-lightbox="{slozka}"><img src="./galerie/{slozka}/small/{slozka}{cislo:03}_small.jpg"/></a>\n'

    vysledek += text

print(vysledek)