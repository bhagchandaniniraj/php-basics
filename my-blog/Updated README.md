# Blog Website

## Overview

This project is a PHP-based blog website that utilizes a database to store and manage blog posts. It provides an interactive user interface for users to read, create, and manage blog entries. The website is designed to be user-friendly and responsive, leveraging Bootstrap for styling.

## Features

- **User  Authentication**: Secure login and registration system for users.
- **CRUD Operations**: Create, Read, Update, and Delete blog posts.
- **Database Integration**: Utilizes a MySQL database to store user and blog post data.
- **Responsive Design**: Built with Bootstrap to ensure a seamless experience on all devices.
- **Interactive UI**: Dynamic content loading and user-friendly navigation.

## Code Structure

### Database Configuration

- **Database Connection**: A separate file to handle database connections (e.g., `db.php`).

```php
<?php
$host = 'localhost';
$db = 'blog_database';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
```

### Blog Post Management

- **Create Post**: A form to submit new blog posts.

```php
<form action="create_post.php" method="POST">
    <input type="text" name="title" placeholder="Post Title" required>
    <textarea name="content" placeholder="Post Content" required></textarea>
    <button type="submit">Create Post</button>
</form>
```

- **Display Posts**: Fetch and display blog posts from the database.

```php
<?php
$stmt = $pdo->query("SELECT * FROM posts");
while ($row = $stmt->fetch()) {
    echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
    echo "<p>" . htmlspecialchars($row['content']) . "</p>";
}
?>
```

### User Authentication

- **Login and Registration**: Forms for user login and registration.

```php
<form action="login.php" method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
```

### Navigation Menu

- **Menu**: A navigation bar for easy access to different sections of the blog.

```html
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blog</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="create_post.php">Create Post</a></li>
      <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
```

## Installation

1. Clone the repository from GitHub:

```bash
git clone https://github.com/bhagchandaniniraj/laravel-tutorials.git
```

2. Navigate to the project directory:

```bash
cd laravel-tutorials
```

3. Set up the database:
   - Create a MySQL database named `blog_database`.
   - Import the SQL file (if provided) to create the necessary tables.

4. Update the database configuration in `db.php` with your database credentials.

5. Run the project on a local server (e.g., XAMPP, WAMP).

## Usage

- Access the website through your local server URL (e.g., `http://localhost/laravel-tutorials`).
- Register a new user or log in with existing credentials.
- Create, view, and manage blog posts.

## Author

- **Name**: Bhagchandani Niraj
- **GitHub**: [bhagchandaniniraj](https://github.com/bhagchandaniniraj/laravel-tutorials.git)

## License

This project is open-source and available under the [MIT License](LICENSE).
