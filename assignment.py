#Options
#Sizes and corresponding values
possible_sizes = ('large', 'extra-large')
size_pricing = (6, 10)
possible_toppings = (0, 1, 2, 3, 4)
topping_pricing = (0, 1, 1.75, 2.5, 3.35)
#UI
not_satisfied = True
total = 0
while not_satisfied:
    print('y or n')
    want_pizza = str(input('Do you want a pizza? '))
    if want_pizza == 'n':
        break
    elif want_pizza == 'y':
        #Finding size
        while True:
            size = str(input('What size of pizza would you like?'))
            if size in possible_sizes:
                total += size_pricing[possible_sizes.index(size)]
                break #this is the escape hatch
            else:
                print('Not a possible size!')
                print('Here are the sizes availabe: ')
                print(*possible_sizes, sep=', ')
        while True:
            try:
                num_of_toppings = int(input('How many toppings do you want? '))
                if num_of_toppings in possible_toppings:
                    total += topping_pricing[possible_toppings.index(num_of_toppings)]
                    break
                else:
                    print("You can't have negative toppings or more than 4")
            except ValueError:
                print('Must be an Integer!')
    
print("Total: $",total * 1.13)
print("Tax: $", total * 0.13,)
print("Before Tax: $", total)