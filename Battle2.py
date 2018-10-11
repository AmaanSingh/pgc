import random

def game_over():
  letter = input("Would you like to play again?: y or n\n")
  if letter == "y":
    return 1
  if letter == "n":
    exit()
    
    
#variables: player's HP, player's attack, player's defense, monster's HP, monster's attack, monster's defense, monster's name, if you can run or not (1 for yes, 0 for no)  
def fight(Player, Monster):
  Php = Player["hp"]
  Patk = Player["atk"]
  Pdef = Player["def"] 
  Mhp = Monster["hp"]
  Matk = Monster["atk"]
  Mdef = Monster["def"] 
  enemy = Monster["name"]
  canrun = Monster["canrun"]
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
        print("Damage: %d" % (Patk - Mdef))
        if (Patk - Mdef) > -1:
          Mhp -= (Patk - Mdef)
        if Mhp < 0:
          Mhp = 0
        print("Enemy's HP: %d" % Mhp)
        break
      if option == "2":
        print("Attempting to run")
        if canrun == "yes":
          run = random.randint(0,3)
          if run == 3:
            print("sucess!")
            return 2, Php
          else:
            print("failure!")
            break
        else:
          print("Can't run!")
      else:
        print("Please enter 1 or 2!")
    #monster attack:
    if Mhp > 0:
        print("The %s attacks" % enemy)
        if (Matk - Pdef) > -1:
          Php -= (Matk - Pdef)
        if Php < 0:
          Php = 0
        print("HP: %d" % Php)
  if Php <= 0:
    print ("You died! Game over.")
    return game_over(), Php
  if Mhp <= 0:
    print("You win the battle!")
    return 2, Php
    
def CharacterCreate():
  Pname = input("Welcome to character creation! To get started, what would you like to be called?")

    
#example fight: fight(Php, Patk, Pdef, 20, 5, 2, Giant Spider, 1)

#Delete code below to create own fights, this is just an example

Giant_Spider = {
  "hp" : 20,
  "atk" : 5,
  "def" :  2,
  "name" : "Giant Spider",
  "canrun" : "yes",
   }

Player = {
  "hp" : 30,
  "atk" : 10,
  "def" : 4,
}

'''
standardized enemy:

replace stuff in brackets ([]) 

[Enemy_Name] = {
  "hp" : [number],
  "atk" : [number],
  "def" : [number],
  "name" : [name],
  "canrun" : ["yes" or "no"],
}

standardized fight:

replace stuff in brackets ([]) EXCEPT THE PART THAT SAYS "Player["hp"]

placeholder, Player["hp"] = fight(Player, [Enemy_Name])

'''


placeholder, Player["hp"] = fight(Player, Giant_Spider)





