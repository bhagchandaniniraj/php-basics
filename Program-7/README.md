# PHP Session Management and Login System

## Overview

This project demonstrates a simple session management and login system using PHP. It includes a login page, an admin page that requires authentication, and a logout functionality. The project utilizes Bootstrap for styling and provides a basic navigation menu.

## Features

- **User  Authentication**: Users can log in with predefined credentials.
- **Session Management**: 
  - Create a session upon successful login.
  - Display user information on the admin page.
  - Logout functionality to destroy the session.
- **Responsive Design**: Utilizes Bootstrap for a responsive layout.
- **Navigation Menu**: A simple navigation bar for easy access to different pages.

## Code Structure

### Login Page (login.php)

```php
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php include_once 'menu.php'; ?>
        <h1>Login Page</h1>
        <form action="logic.php">
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
    </div>
</body>
</html>
```

### Logic for Authentication (logic.php)

```php
<?php
session_start();
if($_REQUEST){
    if($_REQUEST['user'] === "abc@example.com" && $_REQUEST['pass'] === "123"){
        $_SESSION['user'] = $_GET['user'];
        $_SESSION['pass'] = $_GET['pass'];
        header("Location: http://localhost/laravel-tutorials/Program-6/admin.php");
    } else {
        header("Location: http://localhost/laravel-tutorials/Program-6/");
    }
} else {
    header("Location: http://localhost/laravel-tutorials/Program-6/");
}
?>
```

### Admin Page (admin.php)

```php
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php include_once 'menu.php'; ?>
        <h1>Admin Page</h1>
        <?php
        if(!isset($_SESSION['user'])){
            header("Location: http://localhost/laravel-tutorials/Program-6/");
        }
        ?>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit...</p>
    </div>
</body>
</html>
```

### Logout Functionality (logout.php)

```php
<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/laravel-tutorials/Program-6/");
?>
```

### Navigation Menu (menu.php)

```php
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
   - If the credentials match the hardcoded values, a session is created
