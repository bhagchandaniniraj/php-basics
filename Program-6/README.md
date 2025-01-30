# PHP Session Management Example

## Overview

This project demonstrates session management in PHP, including user login functionality, session creation, and session destruction. It provides a simple login form and displays user information based on session data. The project also utilizes Bootstrap for styling.

## Features

- **User  Login**: A form for users to enter their email and password.
- **Session Management**: 
  - Create a session upon successful login.
  - Display session data.
  - Destroy the session and clear session variables.
- **Navigation Links**: Links to different pages to demonstrate session persistence.

## Code Structure

### Login Page (admin.php)

```php
<?php
session_start();
if($_REQUEST){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if($username === "abc@example.com" && $password === "123"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "Login Successful!";
        print_r($_SESSION);
        echo "<br/><a href='mypage.php'>Go to My Page</a>";
    } else {
        echo "Invalid Username or Password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Session Demo</h1>
        <form action="admin.php" method="post">
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="username" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
```

### Session Display Page (mypage.php)

```php
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
    if(isset($_SESSION['username'])){
        echo "<br/>" . $_SESSION['username'];
        echo "<br/>" . $_SESSION['password'];
    } else {
        echo "You are not logged in";
        echo "<br/><a href='index.php'>Login</a>";
    }
    ?>
    <br/><a href="mypage.php">Go to my Page</a>
    <br/><a href="ourpage.php">Go to Our Page</a>
    <br/><a href="yourpage.php">Go to your Page</a>
</body>
</html>
```

### Session Destruction Page (logout.php)

```php
<?php
session_start();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Destroyed</title>
</head>
<body>
    <br/><a href="mypage.php">Go to my Page</a>
    <br/><a href="ourpage.php">Go to Our Page</a>
    <br/><a href="yourpage.php">Go to your Page</a>
</body>
</html>
```

## Explanation

1. **Login Functionality**:
   - The user enters their email and password.
   - If the credentials match the hardcoded values, a session is created, and the user is redirected to their page.

2. **Session Display**:
   - Displays the username and password stored in the session.
   - If the user is not logged in, it prompts them to log in.

3. **Session Destruction**:
   - Clears all session variables and destroys the session.

## Usage

1. Save the code in separate `.php` files as indicated.
2. Run the files on a PHP server (e.g., XAMPP, WAMP, or a live server).
3. Open the `admin.php` file in a web browser to access the login form.

## Output

- Upon successful login
