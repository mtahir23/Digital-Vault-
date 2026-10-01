<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Activity Logs - Digital Vault</title>
<link rel="stylesheet" href="css/style.css">
<script src="script.js" defer></script>
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
        <h1>Activity Logs</h1>
        <p>Track all recent actions performed by users in your vault.</p>
    </div>

    <div class="card">
        <input type="text" id="logSearch" placeholder="Search logs..." onkeyup="searchTable('logSearch','logTable')">
        <table id="logTable">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Action</th>
                    <th>Date/Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ali Khan</td>
                    <td>Logged in</td>
                    <td>2026-03-04 09:30</td>
                </tr>
                <tr>
                    <td>Fatima Noor</td>
                    <td>Edited vault data</td>
                    <td>2026-03-03 16:20</td>
                </tr>
                <tr>
                    <td>Admin</td>
                    <td>Approved nominee</td>
                    <td>2026-03-02 14:45</td>
                </tr>
            </tbody>
        </table>
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