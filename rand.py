import random as rand
random = rand.randint(1, 100)
user_choice = int(input("Guess a number between 1 and 100: "))

while user_choice != random:
    if user_choice < random:
        print("Too low! Try again.")
    elif user_choice > random:
        print("Too high! Try again.")
    user_choice = int(input("Guess a number between 1 and 100: "))

print(f"Congratulations! You've guessed the correct number: {random}")