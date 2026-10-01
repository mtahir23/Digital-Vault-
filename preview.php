<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Preview - Digital Vault</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
</head>
<body>

    <!-- Header -->
    <header class="vault-header">
       <div class="header-left">
        <button class="menu-toggle" id="menuToggle">☰</button>
        
        <img src="logo.jpeg" alt="Logo" class="header-logo-img">
        <h1 class="logo-text">Digital <span>Vault</span></h1>
    </div>
        <div class="header-right">
            <span style="font-size: 13px; color: var(--text-muted);">Faiza | Premium</span>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </header>

    <!-- Sidebar -->
   <aside class="sidebar">
        <a href="dashboard.php" class="active"><span class="icon">📊</span> <span>Dashboard</span></a>
        <a href="viewdata.php"><span class="icon">🔐</span> <span>Vault Items</span></a>
        <a href="Nominee.php"><span class="icon">👥</span> <span>Nominees</span></a>
        <a href="switch.php"><span class="icon">⏳</span> <span>Dead-Man Switch</span></a>
        <a href="alerts.php"><span class="icon">🔔</span> <span>Notifications</span></a>
       
    </aside>



    <!-- Main Content -->
    <main class="main-wrapper">
        <div class="content-header">
            <h1>Email Preview</h1>
            <p>Preview the system emails that are sent to users and nominees.</p>
        </div>

        <!-- Reminder Email -->
        <div class="card">
            <h3>Reminder Email (Demo)</h3>
            <p><strong>Subject:</strong> Vault Inactivity Reminder</p>
            <p>Dear User,</p>
            <p>Your vault has been inactive for 3 months. Please login to ensure your data is safe and your nominees are notified correctly.</p>
            <p>Best Regards,<br>Digital After-Death Vault Team</p>
        </div>

        <!-- Nominee Notification -->
        <div class="card">
            <h3>Nominee Notification (Demo)</h3>
            <p><strong>Subject:</strong> Vault Access Granted</p>
            <p>Dear Nominee,</p>
            <p>You have been granted access to a vault following the inactivity period of the owner. Please login to view instructions and manage data responsibly.</p>
            <p>Best Regards,<br>Digital After-Death Vault Team</p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="vault-footer">
        <p>&copy; 2026 Digital After-Death Data Vault. All Rights Reserved.</p>
    </footer>
<script>
    // Elements ko select karein
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.querySelector('.sidebar');

    // Click event listener
    menuToggle.addEventListener('click', (e) => {
        e.stopPropagation(); // Click ko document tak jane se rokay
        sidebar.classList.toggle('active');
        console.log("Menu clicked!"); // Debugging ke liye (Console mein check karein)
    });

    // Mobile par bahar click karne se sidebar band ho jaye
    document.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
            if (!sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
                sidebar.classList.remove('active');
            }
        }
    });
</script>
</body>
</html>