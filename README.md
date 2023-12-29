# CRUD-App-in-PHP

# CRUD (Create, Read, Update, Delete) application in PHP using MySQL as the database


I can provide you with a simple example of a CRUD (Create, Read, Update, Delete) application in PHP using MySQL as the database.
Please note that this example is for educational purposes and may not include all security measures required for a production environment.


# Database Configuration:
First, create a MySQL database and a table. For example:

CREATE DATABASE crud_example;
USE crud_example;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    email VARCHAR(50)
);
