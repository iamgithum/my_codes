## Basic printing strings and taking input
print("Hello World")
input = input("Name : ")
print("Welcome " + input + ", to the world of Python.") ## + concatenation of two strings

## input function concepts
num = input("Enter a number: ")
var = int(num) + 2
print("Your Number" + num + " is added by 2: " + str(var))

## String Operations
str = "Random Text"
print(str.upper())        ## Use Parenthesis
print(str.lower())        ## Use Parenthesis
print(str.find("Text"))
print(str.replace("Text", "Codes"))

## Basic mathmatical operations
var1 = 2
var2 = 3
add = var1 + var2
sub = var1 - var2
mul = var1 * var2
div = var2 / var1
divf = var2 // var1
mod = var2 % var1
pow = var1 ** var2

print(add)
print(sub)
print(mul)
print(div)
print(divf)
print(mod)
print(pow)

## Comparative Operations
num1 = 6
num2 = 9

print( num1 > num2 )
print(num1 < num2 )
print(num1 >= num2)
print(num1 <= num2)
print(num1 == num2)
print(num1 != num2)

## Logical Operators
alfa = 45
beta = 54

print(alfa < beta and alfa != beta)
print(alfa > beta and alfa != beta)

print(alfa > beta or alfa != beta)
print(alfa > beta or alfa == beta)

print(not alfa > beta)
print(not alfa < beta)

## Decision Making
theta = 90
eta = 81

if theta > eta:
  print(True)
else:
  print(False)

## Loops
i = 0
while i <= 3:
  print( i * "#" )
  i = i + 1

print("Pattern printing made easy....")

## Range and for Loops
range = range(6)
print(range)
for j in range:
  print(j)

## List
list = [9, 18, 27, 36, 45]    ## Declaring List
print(list)                   ## Printing List
x = 0
while x < 5:
    print(list[x])            ## Accessing list items
    x = x + 1

z = 0
for y in list:                ## Modifying Lists 
    z = z + 1
    if y == 18:
        list[z] = 54
        print(list)

## Appending & Insert
example = [3, 6, 9, 12, 15, 18]
example.append(21)
print(example)

example.insert(3, 24)
print(example)
## shortening list
example = [3, 6, 9, 12, 15, 18]
print(example[1:7])

print(len(example))         ## Returns Length of example
print(12 in example)        ## Searches for element in list

example.clear()           ## Clears list
print(example)

## Break and continue statements
List = ["Anil", "Gulshan", "Bibek", "Shivendra"]
print(List.count("Anil"))
print(List.index("Anil"))

for lIst in List:
    if lIst == "Bibek":
        break         ## Semicolon is optional
    print(lIst)

for liSt in List:
    if liSt == "Bibek":
        continue
    print(liSt)

## Using Tuple
tuple = ("alpha", "beta", "gama") ## Declaring Tuple
print(tuple)

## Tuples are non modifiable
Tuple = "python", "is", "case", "sensative" 
## tuple can be define without parenthesis
print(Tuple)
## Accessig tuple
itup = 0
while itup < 3:
    print(tuple[itup])
    itup = itup + 1

for Itup in Tuple:
    print(Itup)



## Dictionary
data = {"code" : "python", "note" : "vim", "OS" : "Linix"}
print(data)
print(data["OS"])
data["note"] = "Notepad++"
print(data)
## Adding data in dictionary
data["likes"] = "hike"
print(data)

## Using modules
from math import *  ## line id alpha 

import math
print(dir(math))    ## this line requires previous line
root = 25
print(sqrt(root))   ## this line require line alpha

