def kontrol(mailAdresi,uzantıUzunluk) :
  if '@' in mailAdresi : 
    count = mailAdresi.count('.')
    if count == uzantıUzunluk - 1 :
      find1 = int(mailAdresi.find('@'))
      find2 = int(mailAdresi.find('.'))
      for i in range (0,find1) :
        if mailAdresi[i] >='a' and mailAdresi[i] <= 'z' :
          a = 0
        elif mailAdresi[i] >='A' and mailAdresi[i] <= 'Z' :
          a = 0
        elif mailAdresi[i] >='0' and mailAdresi[i] <= '9' :
          a = 0
        elif mailAdresi[i] =='-' or mailAdresi[i] == '_' :
          a = 0
        else :
          return False
      for i in range(find1,find2) :
        if mailAdresi[i] >='a' and mailAdresi[i] <= 'z' :
          a = 0
        elif mailAdresi[i] >='A' and mailAdresi[i] <= 'Z' :
          a = 0
        elif mailAdresi[i] >='0' and mailAdresi[i] <= '9' :
          a = 0
        else :
          return False
      return True
uzantıUzunluk = int(input("Uzantı Uzunluğu : "))
mailAdresi = input("Mail Adresi : ")
kontrol(mailAdresi,uzantıUzunluk)
if kontrol(mailAdresi,uzantıUzunluk) == True :
  print('Mail adresiniz doğrudur.')
else : 
  print('Mail adresiniz yanlıştır')

