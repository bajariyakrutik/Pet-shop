#Substitution Cipher
def encrypt(text,k):
    result = ""
    for i in range(len(text)):
        char = text[i]
        if (char.isupper()):
            result += chr((ord(char) + k-65) % 26 + 65)
        else:
            result += chr((ord(char) + k-97) % 26 + 97)
    return result
def decrypt(dec,k):
    result1 = ""
    for i in range(len(dec)):
        char = dec[i]
        if (char.isupper()):
            result1 += chr((ord(char) - k-65) % 26 + 65)
        else:
            result1 += chr((ord(char) - k-97) % 26 + 97)
    return result1


#Transposition Cipher
def encryptRailFence(text, key): 
	rail = [['\n' for i in range(len(text))] 
				for j in range(key)] 
	dir_down = False
	row, col = 0, 0
	
	for i in range(len(text)): 
		if (row == 0) or (row == key - 1): 
			dir_down = not dir_down 
		rail[row][col] = text[i] 
		col += 1 
		if dir_down: 
			row += 1
		else: 
			row -= 1
	result = [] 
	for i in range(key): 
		for j in range(len(text)): 
			if rail[i][j] != '\n': 
				result.append(rail[i][j]) 
	return("" . join(result)) 

def decryptRailFence(cipher, key): 
	rail = [['\n' for i in range(len(cipher))] 
				for j in range(key)] 
	dir_down = None
	row, col = 0, 0
	for i in range(len(cipher)): 
		if row == 0: 
			dir_down = True
		if row == key - 1: 
			dir_down = False 
		rail[row][col] = '*'
		col += 1
		if dir_down: 
			row += 1
		else: 
			row -= 1 
	index = 0
	for i in range(key): 
		for j in range(len(cipher)): 
			if ((rail[i][j] == '*') and
			(index < len(cipher))): 
				rail[i][j] = cipher[index] 
				index += 1
	result = [] 
	row, col = 0, 0
	for i in range(len(cipher)): 
		if row == 0: 
			dir_down = True
		if row == key-1: 
			dir_down = False
		if (rail[row][col] != '*'): 
			result.append(rail[row][col]) 
			col += 1 
		if dir_down: 
			row += 1
		else: 
			row -= 1
	return("".join(result))


#Main Menu/Code
while(1):
    print("1.Substitution Cipher\n2.Transposition Cipher\n")
    ch=int(input("Enter your choice:"))
    if(ch==1):
        print("---Substitution Cipher---")
        text = str(input("Enter the string:"))
        k = int(input("Enter the Key:"))
        print("Plain Text : " + text)
        print("Cipher: " + encrypt(text,k))
        dec=encrypt(text,k)
        print("Plain Text: " + decrypt(dec,k))

    elif(ch==2):
        print("---Transposition Cipher---")
        pt=input("Enter a Plain Text:")
        key=int(input("Enter a key:")) 
        print("...Encrypting...")
        ct=encryptRailFence(pt , key)
        print(ct)

        print("...Decrypting...")
        print(decryptRailFence(ct , key))

    else:
        print("Enter correct choice(1 or 2)!!")