<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vault Data - Digital Vault</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/add.css">
</head>

<body>

    <header class="vault-header">
        <div class="header-left">
            <button class="menu-toggle" id="menuToggle">☰</button>
            <img src="logo.jpeg" class="header-logo-img">
            <h1 class="logo-text">Digital <span>Vault</span></h1>
        </div>
        <a href="auth/logout.php" class="logout-btn">Logout</a>
    </header>

    <aside class="sidebar">
        <a href="dashboard.php">📊 Dashboard</a>
        <a href="viewdata.php">🔐 Vault Items</a>
        <a href="add.php" class="active">➕ Add Vault Data</a>
        <a href="Nominee.php">👥 Nominees</a>
        <a href="switch.php">⏳ Dead-Man Switch</a>
    </aside>

    <main class="main-content">

        <div class="form-container">

            <div class="page-header">
                <h2>Add Vault Data</h2>
                <p>Your data is encrypted end-to-end.</p>
            </div>

            <div class="form-card">

                <form action="save_vault.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Data Category</label>
                        <select name="category" required>
                            <option value="">Select category...</option>
                            <option>File / Document</option>
                            <option>Secure Note</option>
                            <option>Password / Credentials</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" placeholder="e.g. My Private Note" required>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Upload File</label>
                        <input type="file" name="file">
                    </div>

                    <button type="submit" class="btn-save">
                        Secure & Save 🔒
                    </button>

                </form>

            </div>
        </div>
    </main>

</body>

</html>