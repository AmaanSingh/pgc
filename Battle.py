import random

def game_over():
	letter = input("Would you like to play again?: y or n\n")
	if letter == "y":
		return 1
	if letter == "n":
		exit()
    
    
#variables: player's HP, player's attack, player's defense, monster's HP, monster's attack, monster's defense, monster's name, if you can run or not (1 for yes, 0 for no)    
def fight(Php, Patk, Pdef1, Mhp, Matk, Mdef1, enemy, canrun):
	print("Fight!")
	print("Your HP = %d" % Php)
	print("Enemy's HP = %d" % Mhp)
	while Php > 0 and Mhp > 0:
		#player attack
		while True:
			option = input("Options: \n1.Attack \n2.Run\n")
			print(option)
			if option == "1":
				print("You attack")
				print("Damage: %d" % (Patk - Mdef1))
				if (Patk - Mdef1) > -1:
					Mhp -= (Patk - Mdef1)
				if Mhp < 0:
					Mhp = 0
				print("Enemy's HP: %d" % Mhp)
				break
			if option == "2":
				print("Attempting to run")
				if canrun == 1:
					run = random.randint(0,3)
					if run == 3:
						print("sucess!")
						return 2
					else:
						print("failure!")
						break
            
		#monster attack:
		if Mhp > 0:
				print("The %s attacks" % enemy)
				if (Matk - Pdef1) > -1:
					Php -= (Matk - Pdef1)
				if Php < 0:
					Php = 0
				print("HP: %d" % Php)
	if Php <= 0:
		print ("You died! Game over.")
		return game_over()
	if Mhp <= 0:
		print("You win the battle!")
		return 2
    
    
    
#example fight: fight(Php, Patk, Pdef1, 20, 5, 2, Giant Spider, 1)

#Delete code below to create own fights, this is just an example
fight(30, 10, 2, 20, 5, 2, "Giant Spider", 1)

