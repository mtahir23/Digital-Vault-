<?php
include "db.php";
$result = $conn->query("SELECT * FROM vault_items ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View Vault</title>
<link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

<header class="vault-header">
<div class="header-left">
<button class="menu-toggle">☰</button>
<img src="logo.jpeg" class="header-logo-img">
<h1 class="logo-text">Digital <span>Vault</span></h1>
</div>
<a href="add.php" class="add-new-btn">+ Add New Data</a>
</header>

<aside class="sidebar">
<a href="dashboard.php">📊 Dashboard</a>
<a href="viewdata.php" class="active">🔐 Vault Items</a>
<a href="Nominee.php">👥 Nominees</a>
<a href="switch.php">⏳ Dead-Man Switch</a>
</aside>

<main class="main-content">

<div class="vault-container">

<div class="page-info">
<h2>My Secure Vault</h2>
<p>All your data is encrypted with AES-256 security.</p>
</div>

<?php while($row = $result->fetch_assoc()) { ?>

<div class="vault-item">

<div class="item-info">
<h4><?php echo $row['title']; ?></h4>
<p><?php echo $row['description']; ?></p>
<span class="badge">● Encrypted</span>
</div>

<div class="item-actions">

<a href="<?php echo $row['file_path']; ?>" class="action-btn btn-view">👁️</a>

<a href="edit.php?id=<?php echo $row['id']; ?>" class="action-btn btn-edit">✏️</a>

<a href="delete.php?id=<?php echo $row['id']; ?>" class="action-btn btn-delete">🗑️</a>

</div>

</div>

<?php } ?>

</div>

</main>

</body>
</html>