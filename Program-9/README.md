# PHP Class Inheritance Example

## Overview

This project demonstrates the concept of class inheritance in PHP. It includes a `Person` class and an `Employee` class that extends the `Person` class. The project showcases how to use constructors, properties, and methods in a class hierarchy.

## Features

- **Class Inheritance**: The `Employee` class inherits properties and methods from the `Person` class.
- **Constructors**: Demonstrates the use of constructors in both classes.
- **Display Method**: The `displayDetails` method in the `Person` class is used to show the details of the person.

## Code Structure

### Person Class (Person.class.php)

```php
<?php
class Person {
    public $pan;
    public $aadhar;
    public $bank;

    public function __construct($pan, $aadhar, $bank) {
        echo "Person class constructor called";
        $this->pan = $pan;
        $this->aadhar = $aadhar;
        $this->bank = $bank;
    }

    public function displayDetails() {
        echo "<br/>PAN: " . $this->pan . "<br>";
        echo "<br/>Aadhar: " . $this->aadhar . "<br>";
        echo "<br/>Bank: " . $this->bank . "<br>";
    }
}
?>
```

### Employee Class (Employee.class.php)

```php
<?php
require_once 'Person.class.php';

class Employee extends Person {
    public function __construct($pan, $aadhar, $bank) {
        parent::__construct($pan, $aadhar, $bank);
        echo "I am called from Employee Class";
    }
}
?>
```

### HTML Document (index.php)

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calling Class Content</h1>
    <?php
    include_once 'Employee.class.php';
    $emp = new Employee("abc", "aad123", "bank_123");
    $emp->displayDetails();

    $emp1 = new Employee("xyz", "aad456", "bank_456");
    $emp1->displayDetails();
    ?>
</body>
</html>
```

## Explanation

1. **Person Class**:
   - Contains properties for PAN, Aadhar, and Bank.
   - The constructor initializes these properties and outputs a message.
   - The `displayDetails` method outputs the values of the properties.

2. **Employee Class**:
   - Inherits from the `Person` class.
   - Calls the parent constructor to initialize properties and outputs a message indicating that the `Employee` constructor has been called.

3. **HTML Document**:
   - Creates instances of the `Employee` class and displays their details using the `displayDetails` method.

## Usage

1. Save the code in separate `.php` files as indicated.
2. Run the files on a PHP server (e.g., XAMPP, WAMP, or a live server).
3. Open the `index.php` file in a web browser to see the output.

## Output

When the script is executed, it will display the following:

```
Person class constructor called
I am called from Employee Class
PAN: abc
Aadhar: aad123
Bank: bank_123
Person class constructor called
I am called from Employee Class
PAN: xyz
Aadhar: aad456
Bank: bank_456
```

## Author

- **Name**: Chandan Nini Raj
- **GitHub**: [bhagchandaniniraj](https://github.com/bhagchandaniniraj/laravel-tutorials.git)

## License

This project is open-source and available under the [MIT License](LICENSE).
