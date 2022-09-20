<?php
$servername = 'localhost';
$username = 'root';
$password = null;
$db_name = 'ass_sub_portal';


try{
    $conn = new PDO("mysql:host=$servername; dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Database connected";

    //CREATE STUDENTS TABLE
    // $create_tb = "CREATE TABLE students(
    //     id INT (255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     first_name VARCHAR(255),
    //     second_name VARCHAR(255),
    //     username VARCHAR(255),
    //     email VARCHAR(255),
    //     password VARCHAR(255)
    // )";

    // $conn->exec($create_tb);
    // echo "Table Students created";

    //CREATE TEACHERS TABLE
    // $create_tb = "CREATE TABLE teachers(
    //     id INT (255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     username VARCHAR(255),
    //     password VARCHAR(255)
    // )";

    // $conn->exec($create_tb);
    // echo "Table Students created";

    //CREATE SUBJECTS TABLE
    // $create_tb = "CREATE TABLE subjects(
    //     subject_name VARCHAR(255)
    // )";

    // $conn->exec($create_tb);
    // echo "Table Students created";

    //CREATE ASSIGNMENTS TABLE
    // $create_tb = "CREATE TABLE assignments(
    //     subject_id INT (255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     class_id INT (255) UNSIGNED AUTO_INCREMENT PRIMARY KEY

    // )";

    // $conn->exec($create_tb);
    // echo "Table assignments created";

    //CREATE SUBMISSION TABLE
    // $create_tb = "CREATE TABLE submission(
    //     assignment_id INT (255) UNSIGNED,
    //     student_id INT (255) UNSIGNED
    // )";

    // $conn->exec($create_tb);
    // echo "Table submission created";

    //CREATE CLASSES TABLE
    // $create_tb = "CREATE TABLE classes(
    //     class_level VARCHAR(255)
    // )";

    // $conn->exec($create_tb);
    // echo "Table classes created";
}

catch(PDOException $e){
    echo $e->getMessage();
}

?>