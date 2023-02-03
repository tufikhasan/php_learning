<?php
/*
====== Decimal,Binary Octal, & Hexadecimal Numbers System ===========
Decimal,Binary Octal, and Hexadecimal are number systems used to represent numbers in computing and mathematics.

*/

/************ 01: Decimal *************
 * Decimal number system, also known as base-10, is the most commonly used number system in our daily lives. It uses 10 digits (0-9) to represent numbers.
 * Base = 10
 * Digit = 0,1,2,3,4,5,6,7,8,9
*/

/************ 02: Binary *************
 * Binary number system, also known as base-2, uses only two digits (0 and 1) to represent numbers. Binary is the foundation of all digital technology, including computers and digital devices, and is used to store, process, and transmit data.
 * Base = 2
 * Digit = 0,1 (0 means on & 1 means off)
*/

/************ 03: Octal *************
 * Octal number system, also known as base-8, uses 8 digits (0-7) to represent numbers. Octal is commonly used in computing to represent binary data in a more compact form.
 * Base = 8
 * Digit = 0,1,2,3,4,5,6,7
*/

/************ 04: Hexadecimal *************
 * Hexadecimal number system, also known as base-16, uses 16 digits (0-9, A-F) to represent numbers. It is commonly used in computing for representation of binary data in a human-readable form.
 * Base = 16
 * Digit = 0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F   (A=11,B=12,C=13,D=14,E=15,F=16)
*/


/*  =============== Decimal to binary ==================   
* decimal(50) = binary(11011)
* The decimal number 50 can be converted to binary as follows:
* Divide the decimal number by 2 and write down the remainder:

50 ÷ 2 = 25 with a remainder of 0
25 ÷ 2 = 12 with a remainder of 1
12 ÷ 2 = 6 with a remainder of 0
6 ÷ 2 = 3 with a remainder of 0
3 ÷ 2 = 1 with a remainder of 1
1 ÷ 2 = 0 with a remainder of 1

* Read the remainders from bottom to top:
The binary equivalent of decimal number '50' is '110010'
* So, the decimal number '50' is equal to binary number '110010'.
*/


/*  =============== Decimal to octal ==================   
* decimal(50) = octal(62)
* The decimal number 50 can be converted to octal as follows:
* Divide the decimal number by 8 and write down the remainder:

50 ÷ 8 = 6 with a remainder of 2
6 ÷ 8 = 0 with a remainder of 6

* Read the remainders from bottom to top:
The octal equivalent of decimal number '50' is '62'
* So, the decimal number '50' is equal to octal number '62'.
*/


/*  =============== Decimal to Hexadecimal ==================   
* decimal(50) = Hexadecimal(32)
* The decimal number 50 can be converted to hexadecimal as follows:
* Divide the decimal number by 16 and write down the remainder:

50 ÷ 16 = 3 with a remainder of 2
3 ÷ 16 = 0 with a remainder of 3

* Replace the remainders with their hexadecimal equivalent:
    0 = 0
    1 = 1
    2 = 2
    3 = 3
    4 = 4
    5 = 5
    6 = 6
    7 = 7
    8 = 8
    9 = 9
    10 = A
    11 = B
    12 = C
    13 = D
    14 = E
    15 = F

* Read the remainders (hexadecimal equivalent) from bottom to top:
The hexadecimal equivalent of decimal number '50' is '32'
* So, the decimal number '50' is equal to hexadecimal number '32'.
*/
