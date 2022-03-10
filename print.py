## Tips for print()

print("Hello","Python","World","etc")      
## Comma separated inline print                 1

print("Hello","Python","World","etc", sep=",")
## Handy for customized formatting              2

print("Hello", end=" ")
print("Friends")
## Handy for controlling print                  3

a = "Apple"
b = "Ball"
c = "Cat"
d = "tasty"
e = "Colorful"
f = "Smart"
print("{0} are {1}".format(c,f))
## Index like formatting                        4

print("There are %d things"%(6))
## In-String editing                            5
