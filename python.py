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

