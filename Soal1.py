#Pengerjaan Soal 1 Dumbways Batch 19 Kloter 5

def lovebird(hari):
    jumlahBurung = 6969
    for x in range(0,hari):
        x+=1
        if(x%20==0):
            jumlahBurungMati=round(jumlahBurung*0.111) #Dimana ketika tipe data float #dirubah ke integer akan dibulatkan 
            jumlahBurung=jumlahBurung-jumlahBurungMati 
        if(x%21==0):
                jumlahBurung = jumlahBurung*2
            
    print(jumlahBurung)

lovebird(441)