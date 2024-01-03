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

You can direct import given file of sql for databse : crud_example.sql

Now we can create interface for add data using add.php file uploded here.

For view data, Now we can create a index.php where data is dsiplay and edit link will be there.:   index.php 

NExt step is to create edit file for edit stored data. : edit.php
