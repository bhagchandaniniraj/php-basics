# PHP Cookies Management Example

## Overview

This project demonstrates the use of cookies in PHP for user authentication. It includes a login form, an admin page that displays user information stored in cookies, and a navigation menu. The project utilizes Bootstrap for styling and provides a simple user interface.

## Features

- **User  Authentication**: Users can log in with predefined credentials.
- **Cookie Management**: 
  - Set cookies for username and password upon successful login.
  - Display cookie values on the admin page.
  - Clear cookies upon logout.
- **Responsive Design**: Utilizes Bootstrap for a responsive layout.
- **Navigation Menu**: A simple navigation bar for easy access to different pages.

## Code Structure

### Admin Page (admin.php)

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <?php require 'header.php'; ?>
</head>
<body>
    <div class="container">
        <?php include_once 'menu.php'; ?>
        <h1>Welcome to Admin Page....</h1>
        <h2>Here you will get a nice coffee!!!</h2>
        <h3>Starbucks Coffee!!!</h3>
        <?php
            echo "<p>Welcome,  Username: $_COOKIE[user]</p>";
            echo "<p>Your Password is : $_COOKIE[pass]</p>";
        ?>
    </div>
</body>
</html>
```

### Login Logic (logic.php)

```php
<?php
if($_REQUEST){
    if($_REQUEST['user'] === "abc@example.com" && $_REQUEST['pass'] === "123"){
        $user = 'user';
        $pass = 'pass';
        $time = time() + 86400; // 1 day
        if(!isset($_COOKIE['user'])){
            setcookie($user, $_REQUEST['user'], $time, "/");
            setcookie($pass, md5($_REQUEST['pass']), $time, "/");
        }
        header("Location:http://localhost/laravel-tutorials/Program-8/admin.php");
    } else {
        header("Location:http://localhost/laravel-tutorials/Program-8/");
    }
} else {
    header("Location:http://localhost/laravel-tutorials/Program-7/");
}
?>
```

### Login Form (login-form.php)

```php
<form method="POST" action="logic.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="user" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
```

### Logout Logic (logout.php)

```php
<?php
setcookie("user", "", time() - 86400, "/");
setcookie("pass", "", time() - 86400, "/");
header("Location:http://localhost/laravel-tutorials/Program-8/");
?>
```

### Navigation Menu (menu.php)

```php
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
```

## Explanation

1. **Login Functionality**:
   - Users enter their email and password.
   - If the credentials match the hardcoded values, cookies are set for the username and a hashed version of the password.
   - The user is redirected to the admin page.

2. **Admin Page**:
   - Displays the username and password stored in cookies.
   - Provides a welcome message and additional content.

3. **Logout Functionality**:
   - Clears the cookies and redirects the user back to the login
