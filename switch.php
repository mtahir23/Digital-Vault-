<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dead-Man Switch - Digital Vault</title>
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
            <h1>Dead-Man Switch Settings</h1>
            <p>Manage inactivity timer and nominee access automatically.</p>
        </div>

        <!-- Settings Form -->
        <div class="card">
            <form onsubmit="return false;">
                <label>Inactivity Timer (Months)</label>
                <select onchange="showGracePeriod(this.value)">
                    <option value="3">3 Months</option>
                    <option value="6">6 Months</option>
                    <option value="12">12 Months</option>
                </select>

                <label>Reminder Frequency</label>
                <select>
                    <option>Weekly</option>
                    <option>Monthly</option>
                </select>

                <label>Grace Period (Days)</label>
                <input type="number" id="gracePeriodInput" placeholder="Enter grace period" oninput="showGracePeriod(this.value)">

                <label>Emergency Contact Email</label>
                <input type="email" placeholder="Enter emergency email">

                <button type="submit">Save Settings</button>
            </form>
        </div>

        <!-- Grace Period Info -->
        <div class="card" id="graceBox">
            Info: Grace period not set yet.
        </div>

        <!-- Notes / Info -->
        <div class="card">
            <p>Once the user is inactive beyond the set period, reminders will be sent. Nominees will gain access automatically if no response is received.</p>
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