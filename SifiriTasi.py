liste = []
yeniliste = []
for i in range(0,7):
  sayi = int(input("Sayı giriniz : "))
  liste.append(sayi)

for i in range(0,len(liste)):
  if liste[i] == 0 : 
    yeniliste.append(liste[i])
for i in range (0,len(liste)) :
  if liste[i] != 0 :
    yeniliste.append(liste[i])
print(yeniliste)
