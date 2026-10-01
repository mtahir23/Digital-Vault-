<?php

include "db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$category = $_POST['category'];
$description = $_POST['description'];

$sql = "UPDATE vault_items SET
title='$title',
category='$category',
description='$description'
WHERE id=$id";

$conn->query($sql);

header("Location: viewdata.php");

?>