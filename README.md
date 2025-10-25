# PHP Learning Sandbox

This repository is me messing around with PHP. My goal is to learn the fundamentals and inner-workings of the language

## What I've Learned

This project covers the basic syntax and concepts of PHP

## 1. Variables and echo

* Variables start with a `$`.
* Variable names are **case-sensitive** (`$name` and `$Name` are **different**)
* Function names (like `echo`) are **case-insensitive** (`echo`, `ECHO`, and `ecHO` all work as intended).
* You use the `.` to concatenate strings.
* Use `echo "<br>";` to print line breaks

## 2. Data Types

I've practiced with all the main PHP data types:
* Integers
* Floats
* Strings
* Booleans
* Arrays
  * Indexed: `$a = array(1, 2, "Three");`
  * Associative: `$b = array("Name" => "Stuart", "Age" => "7");` (They are like Python **dictionaries**)
* Objects
* Resource
* NULL

## 3. Control Structures
* Switch to handle multiple `if` conditions in a clean manner.
* While loop
* Do-while loop
  * This one **requires a semicolon** at the end.
* For
* For each
  * This is similar to Python's for loop
 
## 4. Functions
* You can define a function using `function func_name($arg) { ... }`.

## Discovery: PHP File Didn't Work on GitHub Pages

One of the important things I learned was about hosting.
I tried hosting my `.php` on GitHub Pages, but it didn't work.

* GitHub Pages is a **static site host**. It's designed to serve plain files such as HTML, CSS, and JavaScript. It just sends the file to the browser as-is.
* **PHP**, on the other hand, is a **server-side language**. It needs a special server (Apache, which is what XAMPP/MAMP use) to:
  1. Read the `.php` file.
  2. Execute the code
  3. Generate a final HTML doc
  4. Send that final HTML to the browser.
 
**Conclusion:** To host a PHP website, I need a hosting service that specifically supports PHP.
