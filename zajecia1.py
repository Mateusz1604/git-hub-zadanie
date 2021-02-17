#Rodzaje zmiennych w Pythonie:
#int liczba całkowita (intiger)#  liczba = 2
#liczba zmiennoprzecinkowa (float)  liczba 2 = 4.6
# a = 'antek' #łańcuch znaków (string)
#b = Flase # zmienna logiczna (bolean)
#e = [1, 2, 3, 4, 5, 6, 7, 'tekst'] # lista (list)
#f = {1, 2, 3, 4, 5, 6, 7} # krotka (truple)
#g = {1, 2, 3, 4, 5, 6, 7} # zbiór (set)
#h = {"pies":"dog", "kot":"cat", "żaba":"frog"} # słownik (sictionary)
    
    
  
# pokazuje Id danej zmiennej
    
# =============================================================================
# a = 8
# b = 4
# print(id(a))
# 
#     
# print(a+b)
# print(a-b)
# print(a/b)
# print(a%b)
# print(a//b) # Reszta z dzielenia, zokrąglenie do liczby całkowitej
# print(a*b)
# print(a**b)
# print(a**(1/2)) # pierwiastek
# print(abs(a))
#     
# # Komentarz 
# 
# nazwa = 'Jan' + 'Kowalski'
# znaczek = 30*'='
# print(znaczek)
# 
# 
# do_wstawienia = '15'
# komunikat1 = 'Mam xxx lat'
# =============================================================================


tekst = 'To jest przykładowe zdanie do nauki Pythona'
print(tekst.casefold())
print(tekst.count('a'))
print(tekst.endswith('Pythona'))
print(tekst.find('jest'))
print(tekst.title())
print(tekst[4])
print(h["kot"])


# lista = [1, 2, 3, 4, 5, 6, 7, 8, 9]
# print(lista[3])
# lista.append(10)
# print(lista.count(1))
# print(lista.index(6))
# lista.pop(5)
# print(lista)


A = {1, 2, 3, 4, 5, 6, 7, 8}
B = {2, 4, 6, 8}
# A.add(9)
# print(A)
# print(A.difference(B))
# print(B.difference(A))
print(B.intersection(A))
print(B.union(A)




