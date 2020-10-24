def cetak_gambar(a):
    if(a%2==0): 
        print("Masukkan bilangan ganjil dan sempurna gambar ketika 9")
# Saya hanya bisa menemukan kasus  ketika panjang/lebar sama dengan 9  sehingga bisa berbentuk layangan
    else :
        row = 0
        while row < a :
            row = row + 1
            lines = ""
            col = 0
            while col < a :
                col = col + 1
                tengah = a/2+0.5
                if(row==2 or row==8) and (col==4 or col ==6):
                    lines += "*"    
                elif(row==3 or row==7) and (col==3 or col==7):
                    lines += "*"
                elif(row==4 or row==6) and (col==2 or col==8):
                    lines += "*"
                elif(row==tengah) or (col==tengah):
                    lines += "*"
                else:
                    lines+= " "
                
            print(lines)

cetak_gambar(9)