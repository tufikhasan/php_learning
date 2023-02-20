<?php
/* Commonly used array functions --- 
https://www.w3schools.com/php/php_ref_array.asp
https://www.php.net/manual/en/ref.array.php
https://www.geeksforgeeks.org/php-array-functions-complete-reference/

 -> array_push() - Adds one or more elements to the end of an array

 -> array_pop() - Removes the last element from an array

 -> array_shift() - Removes the first element from an array

 -> array_unshift() - Adds one or more elements to the beginning of an array

 -> array_slice() - Returns selected parts of an array

 -> array_splice() - Removes and replaces specified elements of an array

 -> array_merge() - Merges one or more arrays into one array

 -> array_combine()	Creates an array by using the elements from one "keys" array and one "values" array
 
 -> array_reverse()	- Returns an array in the reverse order

 -> array_replace() - Replaces the values of the first array with the values from following arrays

 -> array_sum()	- Returns the sum of the values in an array

 -> count() - Returns the number of elements in an array

 -> sizeof() - Alias of count()

 -> array_count_values() - Counts all the values of an array

 -> array_values() - Returns all the values of an array

 -> array_search() - Searches an array for a given value and returns the key

 -> in_array() - Checks if a specified value exists in an array

 -> key() - Fetches a key from an array

 -> array_keys() - Returns all the keys of an array

 -> array_key_exists() - Checks if the specified key exists in the array

 -> array_unique() - Removes duplicate values from an array

 -> array_rand() - Returns one or more random keys from an array

 -> array_intersect() - Compare arrays, and returns the matches (compare values only)

 -> array_intersect_assoc()	- Compare arrays and returns the matches (compare keys and values)

 -> array_intersect_key() - Compare arrays, and returns the matches (compare keys only)

 -> array_diff() - Compare arrays, and returns the differences (compare values only)

 -> array_diff_assoc() - Compare arrays, and returns the differences (compare keys and values)

 -> array_walk() - Applies a user function to every member of an array

 -> array_filter() - Filters the values of an array using a callback function

 -> array_map() - Sends each value of an array to a user-made function, which returns new values

 -> array_reduce() - Returns an array as a string, using a user-defined function

 -> list() - Assigns variables as if they were an array

 -> range() - Creates an array containing a range of elements

 -> shuffle() - Shuffles an array

 -> array_change_key_case()	Changes all keys in an array to lowercase or uppercase

 -> array_chunk()	Splits an array into chunks of arrays


 */

//array_combine()
$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");
print_r(array_combine($fname, $age));

//array_merge()
$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");
print_r(array_merge($fname, $age));

//array_chunk()
print_r(array_chunk(array("Peter", "Ben", "Joe"), 2, true));
