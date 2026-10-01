<?php

include "db.php";

$title = $_POST['title'];
$category = $_POST['category'];
$description = $_POST['description'];

$fileName = $_FILES['file']['name'];
$tmpName = $_FILES['file']['tmp_name'];

$path = "uploads/".$fileName;

move_uploaded_file($tmpName,$path);

$sql = "INSERT INTO vault_items(title,category,description,file_path)
VALUES('$title','$category','$description','$path')";

$conn->query($sql);

header("Location: viewdata.php");

?>