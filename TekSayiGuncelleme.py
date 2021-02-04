liste = []
for i in range(0,10) : 
  sayi = int(input("Sayı giriniz : "))
  liste.append(sayi)
print(liste)
enBuyuk = max(liste)
if enBuyuk%2 == 1 :
  print(enBuyuk)
else : 
  liste.remove(enBuyuk)
  enBuyuk = max(liste)
  print(enBuyuk)
