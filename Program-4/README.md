# PHP Array Loop Example

## Overview

This project demonstrates a simple PHP script embedded within an HTML document. It showcases the use of arrays and a `for` loop to iterate through the elements of the array.

## Features

- **HTML Structure**: Basic HTML document structure with a PHP script.
- **Array Usage**: Demonstrates the creation and usage of an array.
- **For Loop**: Implements a `for` loop to iterate through the array and display its elements.

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
        $a = array(1,2,3,4,5,6,7);
        for($i=0; $i<count($a); $i++){
            echo $a[$i]. "<br>";
        }
    ?>
</body>
</html>
```

## Explanation

- **Array Initialization**: An array `$a` is created containing numbers from 1 to 7.
- **For Loop**: The `for` loop iterates through each element of the array and prints it, followed by a line break.

## Usage

1. Save the code in a `.php` file.
2. Run the file on a PHP server (e.g., XAMPP, WAMP, or a live server).
3. Open the file in a web browser to see the output.

## Output

When the script is executed, the output will be:

```
1
2
3
4
5
6
7
```

Each number from the array is printed on a new line.

## Installation

Clone the repository from GitHub:

```bash
git clone https://github.com/bhagchandaniniraj/laravel-tutorials.git
```

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contact

For any inquiries, please reach out via the GitHub repository.
