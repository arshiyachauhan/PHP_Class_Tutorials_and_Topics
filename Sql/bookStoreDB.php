<?php
//create a database named bookstoreDb and table named books for given values and then answer the questions mentioned
$servername = "localhost";
$username = "root";
$password = "";
$db = "bookstoreDb";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Create database if it doesn't exist
$conn->query("CREATE DATABASE IF NOT EXISTS $db");

$conn->select_db($db);

// Create table if it doesn't exist
$conn->query("CREATE TABLE IF NOT EXISTS books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    author VARCHAR(100),
    price FLOAT,
    stock INT,
    published_year YEAR
)");

// Insert 5 values using multi-row query
$conn->query("INSERT INTO books (title, author, price, stock, published_year) VALUES
    ('The House of Strange Stories', 'Ruskin Bond', 285, 25, 2014),
    ('Pride and Prejudice', 'Jane Austen', 350, 45, 2019),
    ('The Alchemist', 'Paulo Coelho', 450, 30, 2015),
    ('City Under One Roof', 'Iris Yamashita', 449, 40, 2023),
    ('The Mystery of Nagas', 'Amish Tripathi', 300, 35, 2011)");

// Query for books published after 2016, ordered by price descending
$result = $conn->query("SELECT * FROM books WHERE published_year > 2016 ORDER BY price DESC");
echo "<h3>Books published after 2016:</h3>";
while ($row = $result->fetch_assoc()) {
    echo "Title: {$row['title']}, Published Year: {$row['published_year']}<br>";
}

// Query to Calculate total stock of books
$totalStock = $conn->query("SELECT SUM(stock) AS total_stock FROM books")->fetch_assoc();
echo "<h3>Total books in stock: {$totalStock['total_stock']}</h3>";

// Query to find the book with the maximum price
$maxPriceResult = $conn->query("SELECT title, price FROM books ORDER BY price DESC LIMIT 1");
$maxPriceBook = $maxPriceResult->fetch_assoc();
echo "<h3>Book with the maximum price:</h3>";
echo "Title: {$maxPriceBook['title']} , Price: {$maxPriceBook['price']}<br>";

$conn->close();
?>
