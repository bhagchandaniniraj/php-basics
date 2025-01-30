# Simple PHP Array and Control Structures

## Overview

This project demonstrates a simple PHP script embedded within an HTML document. It showcases the use of arrays, conditional statements, and loops in PHP.

## Features

- **HTML Structure**: Basic HTML document structure with a PHP script.
- **Array Usage**: Demonstrates the creation and usage of an array.
- **Conditional Statement**: Uses an `if-else` statement to control output.
- **Do-While Loop**: Implements a `do-while` loop to iterate through the array.

## Code Structure

### HTML and PHP Code

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = array(1,2,3,4,5,6,7,8,9,10);
        $i = 0;
        if(0){
            echo "Hello";
        } else {
            echo "World";
        }

        do {
            echo $a[$i++];
        } while(0);
    ?>
</body>
</html>
```

## Explanation

- **Array Initialization**: An array `$a` is created containing numbers from 1 to 10.
- **Conditional Statement**: The `if(0)` condition evaluates to false, so "World" is printed.
- **Do-While Loop**: The loop executes once but does not iterate through the array due to the condition `while(0)` being false after the first execution.

## Usage

1. Save the code in a `.php` file.
2. Run the file on a PHP server (e.g., XAMPP, WAMP, or a live server).
3. Open the file in a web browser to see the output.

## Output

When the script is executed, the output will be:

```
World1
```

- "World" is printed from the `else` block.
- The first element of the array (1) is printed from the `do-while` loop.

## Installation

Clone the repository from GitHub:

```bash
git clone https://github.com/bhagchandaniniraj/laravel-tutorials.git
```

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contact

For any inquiries, please reach out via the GitHub repository.
