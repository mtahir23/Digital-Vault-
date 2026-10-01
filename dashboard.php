<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Digital Vault</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    
</head>
<body>

    <!-- <header class="vault-header">
        <div class="header-left">
        <img src="logo.jpeg" alt="Logo" class="header-logo-img">
        <h1 class="logo-text">Digital <span>Vault</span></h1>
    </div>
        <div class="header-right">
            <span style="font-size: 13px; color: var(--text-muted);">Faiza | Premium</span>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </header> -->

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

    <aside class="sidebar">
        <a href="dashboard.php" class="active"><span class="icon">📊</span> <span>Dashboard</span></a>
        <a href="viewdata.php"><span class="icon">🔐</span> <span>Vault Items</span></a>
        <a href="Nominee.php"><span class="icon">👥</span> <span>Nominees</span></a>
        <a href="switch.php"><span class="icon">⏳</span> <span>Dead-Man Switch</span></a>
        <a href="alerts.php"><span class="icon">🔔</span> <span>Notifications</span></a>
        
    </aside>

    <main class="main-content">
        <div class="welcome-section">
            <h2>Welcome back, Faiza 👋</h2>
            <p>Here's what's happening with your secure assets today.</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">📁</div>
                <div class="stat-info">
                    <h3>Vault Items</h3>
                    <p>12 Files</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">👥</div>
                <div class="stat-info">
                    <h3>Nominees</h3>
                    <p>3 Active</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">⚡</div>
                <div class="stat-info">
                    <h3>Status</h3>
                    <p style="color: var(--status-green);">Protected</p>
                </div>
            </div>
        </div>

        <div class="activity-panel">
            <h3>Recent Activity</h3>
            <ul class="activity-list">
                <li class="activity-item"><span class="activity-dot">●</span> New backup document "Will_Draft.pdf" added to Vault.</li>
                <li class="activity-item"><span class="activity-dot">●</span> Nominee 'Sarah Khan' verified her contact info.</li>
                <li class="activity-item"><span class="activity-dot">●</span> Security check: Password successfully updated 2 hours ago.</li>
            </ul>
        </div>

        <div class="security-alert">
            <span>⚠️</span> 
            <div>
                <strong>Security Reminder:</strong> Your Dead-Man Switch is currently inactive. 
                <a href="deadman.html" style="color: var(--warning-gold); font-weight: 600;">Configure it now</a> to ensure data transfer.
            </div>
        </div>
    </main>

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