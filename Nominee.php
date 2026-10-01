<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nominee Management - Digital Vault</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Absolute path -->
    <script src="script.js" defer></script> <!-- Absolute path -->
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
    <ul>
        <a href="dashboard.php" class="active"><span class="icon">📊</span> <span>Dashboard</span></a>
        <a href="viewdata.php"><span class="icon">🔐</span> <span>Vault Items</span></a>
        <a href="Nominee.php"><span class="icon">👥</span> <span>Nominees</span></a>
        <a href="switch.php"><span class="icon">⏳</span> <span>Dead-Man Switch</span></a>
        <a href="alerts.php"><span class="icon">🔔</span> <span>Notifications</span></a>
        
        </ul>
    </aside>
   


    <!-- Main Content -->
    <main class="main-wrapper">
        <div class="content-header">
            <h1>Nominee Management</h1>
            <p>Add, update, and manage nominees for your vault.</p>
        </div>
 <br>
        <!-- Add Nominee Form -->
        <div class="card">
            <h3>Add New Nominee</h3>
            <form onsubmit="return false;">
                <input type="text" placeholder="Full Name" required>
                <input type="email" placeholder="Email Address" required>
                <input type="text" placeholder="Relation" required>
                <select onchange="updateBadge(this,'statusBadge')">
                    <option>Pending</option>
                    <option>Verified</option>
                </select>
                <button type="submit">Add Nominee</button>
            </form>
        </div>

        <!-- Nominee List -->
        <div class="card">
            <h3>Nominee List</h3>
            <table id="nomineeTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Relation</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ali Khan</td>
                        <td>ali@email.com</td>
                        <td>Brother</td>
                        <td><span id="statusBadge" class="badge pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>Fatima Noor</td>
                        <td>fatima@email.com</td>
                        <td>Sister</td>
                        <td><span class="badge verified">Verified</span></td>
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
