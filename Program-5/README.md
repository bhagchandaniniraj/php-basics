# PHP Foreach Loop Example

## Overview

This project demonstrates the use of the `foreach` loop in PHP to iterate over arrays. It includes two examples: one that displays employee data in a table format and another that lists fruits in an unordered list. The project also showcases basic string manipulation functions and Bootstrap for styling.

## Features

- **HTML Structure**: Basic HTML document structure with embedded PHP scripts.
- **Foreach Loop**: Demonstrates the use of the `foreach` loop to iterate through arrays.
- **String Manipulation**: Uses PHP string functions such as `strpos`, `trim`, `ltrim`, and `rtrim`.
- **Bootstrap Integration**: Utilizes Bootstrap for responsive design and styling of the table.

## Code Structure

### Employee Data Table Example

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php 
    include_once 'data.php'; 
    // String manipulation examples
    $var ="hello how are you khana khake jana!!!";
    echo strpos($var,"how");
    $myvar ="           this is my data             "   ;
    echo "<br/>". trim($myvar,' ') ;
    ?>
    <div class="container">
        <h1>Foreach Loop</h1>
        <table class="table table-sm table-striped table-bordered table-hover ">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>IP Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($employeesData as $employee) {
                    $gender = ($employee['gender'] == 'Male') ? 1 : 0;
                    $employee['first_name'] = str_replace("Dennie", "Harsh", $employee['first_name']);
                    echo '<tr>';
                    echo '<td>' . $employee['id'] . '</td>';
                    echo '<td>' . $employee['first_name'] . '</td>';
                    echo '<td>' . $employee['last_name'] . '</td>';
                    echo '<td>' . $employee['email'] . '</td>';
                    echo '<td>' . $employee['gender'] . '</td>';
                    echo '<td>' . strrev($employee['ip_address']) . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <a href="index.php">Back to Index</a>
    </div>
</body>
</html>
```

### Fruits List Example

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop</title>
</head>
<body>
    <h1>Foreach Loop</h1>
    <ul>
        <?php
            $fruits = array("apple", "banana", "cherry", "date");
            foreach($fruits as $fruit){
                echo "<li>$fruit</li>";
            }
       ?>
    </ul>
    <a href="index.php">Back to Index</a>
</body>
</html>
```

## Explanation

1. **Employee Data Table**:
   - The script includes a file named `data.php` that is expected to contain an array of employee data.
   - It uses a `foreach` loop to iterate through the employee data and display it in a Bootstrap-styled table.
   - String manipulation functions are demonstrated, including finding a substring, trimming whitespace, and reversing the IP address.

2. **Fruits List**:
   - A simple `foreach` loop iterates through an array of fruits and displays each fruit in an unordered list.

## Usage

1. Save the code in a `.php` file.
2. Ensure that the `data.php` file exists and contains the necessary employee data array.
3. Run the file on a PHP server (e.g., XAMPP, WAMP, or a live server).
4. Open the file in a web browser to see the output.

## Output

- The employee data will be displayed in a styled table format.
- The fruits will be listed in an unordered list.

## Installation

Clone the repository from GitHub:

```bash
git clone https://github.com/bhagchandaniniraj/laravel-tutorials.git
``
