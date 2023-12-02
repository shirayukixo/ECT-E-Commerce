<?php

    // Connect to database
    $conn = mysqli_connect("localhost", "root", "");

    // Create database if not found
    $sql = "CREATE DATABASE IF NOT EXISTS ectdata";
   
    mysqli_query($conn, $sql);
    
    // Create customers table if not found
    $sql = "CREATE TABLE IF NOT EXISTS ectdata.customers (
        custID INT PRIMARY KEY AUTO_INCREMENT,
        fullname VARCHAR(50) NOT NULL,
        address VARCHAR(50) NOT NULL,
        city VARCHAR(50) NOT NULL,
        state VARCHAR(50) NOT NULL,
        zipcode VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE, 
        password VARCHAR(50) NOT NULL)";
    
    mysqli_query($conn, $sql);
    
    // Create purchases table if not found
    $sql = "CREATE TABLE IF NOT EXISTS ectdata.purchases (
        purchaseID INT PRIMARY KEY AUTO_INCREMENT,
        custID INT NOT NULL,
        productID INT NOT NULL,
        bankrefID VARCHAR(50) NOT NULL,
        date VARCHAR(10) NOT NULL,
        time VARCHAR(10) NOT NULL)";
    
    mysqli_query($conn, $sql);
    
    // Create product table if not found
     $sql = "CREATE TABLE IF NOT EXISTS ectdata.products (
        productID INT PRIMARY KEY,
        productName VARCHAR(50) NOT NULL,
        price DECIMAL(7,2) NOT NULL)";
    
    mysqli_query($conn, $sql);
    
    // Populate product table
    $sql = "INSERT IGNORE INTO ectdata.products VALUES (101, 'DELL INSPIRON 24 5477T', 3499.00), 
        (102, 'DELL INSPIRON 15 3581', 1899.00),
        (103, 'DELL INSPIRON 15 3565', 1599.00)";
 
    mysqli_query($conn, $sql);

    // Close connection
    mysqli_close($conn);
    
?>
