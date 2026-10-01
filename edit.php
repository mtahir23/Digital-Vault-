<?php
include "db.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM vault_items WHERE id=$id");

$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Vault Data</title>
<link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

<header class="vault-header">
<div class="header-left">
<button class="menu-toggle">☰</button>
<img src="logo.jpeg" class="header-logo-img">
<h1 class="logo-text">Digital <span>Vault</span></h1>
</div>
<a href="viewdata.php" class="btn-back">← Back</a>
</header>

<main class="main-content">

<div class="edit-card">

<h2>Edit Vault Record</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

<div class="form-group">
<label>Title</label>
<input type="text" name="title" value="<?php echo $data['title']; ?>">
</div>

<div class="form-group">
<label>Category</label>
<select name="category">
<option><?php echo $data['category']; ?></option>
<option>File / Document</option>
<option>Secure Note</option>
<option>Password / Credentials</option>
</select>
</div>

<div class="form-group">
<label>Description</label>
<textarea name="description"><?php echo $data['description']; ?></textarea>
</div>

<button type="submit" class="btn-update">
Update Secure Data
</button>

</form>

</div>

</main>

</body>
</html>