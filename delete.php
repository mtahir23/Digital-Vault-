<?php

include "db.php";

$id = $_GET['id'];

$conn->query("DELETE FROM vault_items WHERE id=$id");

header("Location: viewdata.php");

?>