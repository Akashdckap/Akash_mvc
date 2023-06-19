<?php

require "controller/userController.php";

$controller = new UserController();

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'create':
//            var_dump($_FILES);
            $controller->create($_POST,$_FILES['image_file']);
            break;
        case 'edit':
            $controller->edit($_POST);
            break;
        case 'delete':
            $controller->delete($_POST['delete']);
            break;
        case 'view':
            $controller->view($_POST['edit']);
            break;
        default:
            $controller->index();
            break;
    }
} else {
    $controller->index();
}







































//Hi Team,
//
//Please find the below assessment task. Please update the source code in GitHub and share the link and commit via a Google form shared below.
//
//Assessment Task Question
//1. Create Product CRUD Operation with the following Fields:
//       a. Product Name: Text input field.
//b. Product Image: File upload field (required).
//c. SKU: Text input field (required and unique).
//d. Price: Number input field (required) with validation for pricing.
//                                                            e. Brand: Dropdown selection field.
//f. Manufacture Date: Date input field, restricting past dates.
//g. Available Stock: Number input field, accepting numeric values including 0, and allowing nullable entries.
//2. List Page Details:
//       a. Display Fields: The list page should display the following details for each product: Name, Product Images (sized at 75px*75px), Price, Brand, and SKU.
//    b. Warning Color for Low Stock: If the available stock is less than 10, the corresponding product row should be displayed in a warning color.
//    3. The entire implementation will follow the MVC architectural pattern, separating the application into Model, View, and Controller components to ensure a clear and organized structure.
//    4. Evaluation Criteria for Evolution:
//        a. MVC Architecture: Adherence to the MVC pattern and proper separation of concerns between the Model, View, and Controller components.
//    b. Optimized and Standardized Code: Implementing clean, efficient, and standardized coding practices.
//    c. Validation: Implementing proper validation mechanisms for input fields, including validation for pricing, date restrictions, and required fields.
//    d. Design: Ensuring a well-designed user interface and user experience, considering aesthetics and usability.


//CREATE DATABASE product;
//
//use product;
//
//create table product_details(
//    id int not null AUTO_INCREMENT,
//product_name varchar(255),
//product_image varchar(255),
//sku_input varchar(255),
//price int,
//manufacture date,
//Available_stock int,
//
//created_at timestamp,
//updated_at timestamp,
//
//primary key(id));

//require "connection.php";
//$app= (new Database())->db;
//
//$username = $_POST["username"];
//$fileupload = $_FILES["file-upload"];
//
//
//if($username != "" && isset($fileupload)){
//
//    $userName = $_POST["username"];
//    $uploadedFile = $_FILES["file-upload"];
//
//    $filePath  = "images/".$uploadedFile["name"];
//
//    move_uploaded_file($fileupload["tmp_name"],"$filePath");
////
//    $app->query("INSERT INTO images_save(username,file_path)VALUES('$username','$filePath')");
//    header("location: /");
//
//}