# Employee Management System

## Overview

This project demonstrates the implementation of an Employee Management System using PHP. It showcases the use of abstract classes and interfaces to define the structure and behavior of employee-related classes.

## Features

- **Abstract Class**: The `Employee` abstract class defines the basic structure for employee classes.
- **Interface**: The `Employee` interface provides a contract for implementing classes.
- **Home and Office Classes**: Two concrete classes, `Home` and `Office`, implement the functionality to display employee information.

## Code Structure

### Abstract Class Implementation

```php
abstract class Employee {
    protected $uid;
    protected $cc;
    abstract public function display($u, $c);
    public function info() {
        echo "<br/>I am called from Employee abstract class";
    }
}

class Home extends Employee {
    public function display($u, $c) {
        $this->uid = $u;
        $this->cc = $c;
        echo "Employee ID: $this->uid <br>";
        echo "Credit Card Number: $this->cc <br>";
    }
}

class Office extends Employee {
    public function display($u, $c) {
        $this->uid = $u;
        $this->cc = $c;
        echo "EID: $this->uid <br>";
        echo "CC: $this->cc <br>";
    }
}
```

### Interface Implementation

```php
interface Employee {
    public function display($u, $c);
    public function info();
}

class Home implements Employee {
    protected $uid;
    protected $cc;
    public function display($u, $c) {
        $this->uid = $u;
        $this->cc = $c;
        echo "Employee ID: $this->uid <br>";
        echo "Credit Card Number: $this->cc <br>";
    }

    public function info() {
        echo "Inside info() - Home";
    }
}

class Office implements Employee {
    protected $uid;
    protected $cc;

    public function display($u, $c) {
        $this->uid = $u;
        $this->cc = $c;
        echo "EID: $this->uid <br>";
        echo "CC: $this->cc <br>";
    }

    public function info() {
        echo "I am called info() from Office";
    }
}
```

## Usage

1. Create instances of `Home` and `Office` classes.
2. Call the `display` method with employee ID and credit card number.
3. Call the `info` method to display additional information.

### Example

```php
$home = new Home();
$office = new Office();
$home->display("aaaa-bbbb-cccc", "1111-2222-3333-4444");
$office->display("aaaa-bbbb-cccccc", "4444-5555-6666-7777");
$home->info();
$office->info();
```

## Installation

Clone the repository from GitHub:

```bash
git clone https://github.com/bhagchandaniniraj/laravel-tutorials.git
```

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contact

For any inquiries, please reach out via the GitHub repository.
