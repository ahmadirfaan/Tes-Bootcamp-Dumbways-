'''

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

'''
def check(dataKey, word):
    if(type(dataKey)==list):
        for i in range(0,len(dataKey)):
            if(dataKey[i] in word):
                print(dataKey[i]+">>true")
            else:
                print(dataKey[i]+">>false")
    else:
        print("Harus List")

dataKey = ['dumb','ways','the','best'];
word = 'dumbways'
check(dataKey,word)