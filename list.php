<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nominee List - Digital Vault</title>
 <style>

        /* =================== ROOT VARIABLES =================== */
:root {
    --bg-dark: #1a2233;
    --bg-deep: #111827;
    --bg-card: #1c2536;
    --primary-blue: #3b82f6;
    --text-white: #ffffff;
    --text-muted: #94a3b8;
    --status-green: #22c55e;
    --danger-red: #ef4444;
    --glass-border: rgba(255, 255, 255, 0.05);
}

/* =================== GLOBAL RESET =================== */
* { margin: 0; padding: 0; box-sizing: border-box; }

body {
    background-color: var(--bg-dark);
    font-family: 'Poppins', sans-serif;
    color: var(--text-white);
    overflow-x: hidden;
}

/* =================== HEADER =================== */
.vault-header {
    height: 70px;
    background-color: var(--bg-deep);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 30px;
    border-bottom: 1px solid var(--glass-border);
    position: fixed;
    top: 0; width: 100%; z-index: 1000;
}

.header-left { display: flex; align-items: center; gap: 12px; }
.header-logo-img { width: 35px; height: 35px; border-radius: 6px; object-fit: cover; }
.logo-text { font-size: 20px; font-weight: 600; }
.logo-text span { color: var(--primary-blue); font-weight: 300; }

.header-right { display: flex; align-items: center; gap: 20px; }
.status-badge { background: var(--status-green); color: white; font-size: 10px; padding: 4px 10px; border-radius: 4px; font-weight: bold; }
.username { font-size: 14px; color: var(--text-muted); }

.logout-btn {
    background-color: var(--danger-red);
    color: white;
    padding: 8px 18px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 600;
    transition: 0.3s;
}

/* =================== SIDEBAR =================== */
.sidebar {
    width: 260px;
    background-color: var(--bg-deep);
    height: calc(100vh - 70px);
    position: fixed;
    top: 70px; left: 0;
    border-right: 1px solid var(--glass-border);
    padding-top: 20px;
    z-index: 999;
}

.sidebar a {
    display: flex;
    align-items: center;
    padding: 14px 25px;
    color: var(--text-muted);
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
    border-left: 4px solid transparent;
}

.sidebar a:hover, .sidebar a.active {
    background-color: rgba(59, 130, 246, 0.05);
    color: var(--text-white);
    border-left: 4px solid var(--primary-blue);
}

.sidebar .icon { margin-right: 12px; }

/* =================== MAIN CONTENT =================== */
.main-wrapper {
    margin-left: 260px;
    margin-top: 70px;
    padding: 40px;
    min-height: calc(100vh - 140px);
}

.content-header h1 { font-size: 24px; font-weight: 600; margin-bottom: 8px; }
.content-header p { color: var(--text-muted); font-size: 14px; margin-bottom: 30px; }

/* =================== TABLE CARD =================== */
.table-card {
    background-color: var(--bg-card);
    padding: 25px;
    border-radius: 16px;
    border: 1px solid var(--glass-border);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

#searchInput {
    width: 100%;
    padding: 12px 20px;
    margin-bottom: 25px;
    background-color: var(--bg-deep);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 8px;
    color: white;
    font-family: inherit;
    outline: none;
}

#searchInput:focus { border-color: var(--primary-blue); }

.table-responsive { overflow-x: auto; }

table { width: 100%; border-collapse: collapse; }
th { text-align: left; padding: 15px; color: var(--text-muted); font-size: 12px; text-transform: uppercase; border-bottom: 1px solid var(--glass-border); }
td { padding: 15px; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.02); }
tr:hover td { background-color: rgba(255, 255, 255, 0.02); }

/* Badges */
.badge { padding: 5px 12px; border-radius: 20px; font-size: 11px; font-weight: 600; }
.badge.pending { background: rgba(245, 158, 11, 0.1); color: #f59e0b; }
.badge.verified { background: rgba(16, 185, 129, 0.1); color: #10b981; }

/* =================== FOOTER =================== */
.vault-footer {
    margin-left: 260px;
    background-color: var(--bg-deep);
    padding: 20px;
    text-align: center;
    font-size: 12px;
    color: var(--text-muted);
    border-top: 1px solid var(--glass-border);
}

/* =================== RESPONSIVE =================== */
@media (max-width: 992px) {
    .sidebar { width: 80px; }
    .sidebar span:not(.icon) { display: none; }
    .main-wrapper, .vault-footer { margin-left: 80px; }
    .sidebar a { justify-content: center; padding: 20px; }
    .sidebar .icon { margin-right: 0; }
}

@media (max-width: 768px) {
    .sidebar { display: none; }
    .main-wrapper, .vault-footer { margin-left: 0; padding: 20px; }
}

/* ... baki variables wahi raheinge ... */

/* =================== Layout Structure Fix =================== */
body {
    background-color: var(--bg-dark);
    font-family: 'Poppins', sans-serif;
    color: var(--text-white);
    overflow-x: hidden;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Header Fix */
.vault-header {
    height: 70px;
    background-color: var(--bg-deep);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px; /* Padding kam ki mobile ke liye */
    border-bottom: 1px solid var(--glass-border);
    position: fixed;
    top: 0; width: 100%; z-index: 1100; /* Sidebar se upar */
}

/* Sidebar Fix */
.sidebar {
    width: 260px;
    background-color: var(--bg-deep);
    height: calc(100vh - 70px);
    position: fixed;
    top: 70px;
    left: 0;
    z-index: 1050;
    border-right: 1px solid var(--glass-border);
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Main Content Fix */
.main-content {
    margin-left: 260px; /* Desktop margin */
    margin-top: 70px;
    padding: 30px;
    flex: 1;
    transition: margin-left 0.3s ease;
}

.vault-footer {
    margin-left: 260px;
    padding: 20px;
    background-color: var(--bg-deep);
    text-align: center;
    border-top: 1px solid var(--glass-border);
}

/* =================== RESPONSIVE BREAKPOINTS =================== */

/* 1. Tablets (iPads) */
@media (max-width: 1024px) {
    .sidebar { width: 80px; }
    .sidebar span:not(.icon) { display: none; }
    .main-content, .vault-footer { margin-left: 80px; }
}

/* 2. Mobile (Jo aapki image mein masla hai) */
@media (max-width: 768px) {
    .menu-toggle {
        display: block !important; /* Button lazmi dikhao */
    }

    .sidebar {
        transform: translateX(-100%); /* Screen se bahar fenk do */
        width: 260px; /* Khule to full size ho */
    }

    /* Jab sidebar active ho (JS ke zariye) */
    .sidebar.active {
        transform: translateX(0);
        box-shadow: 10px 0 30px rgba(0,0,0,0.5);
    }

    /* SABSE BADA FIX: Mobile par content ko margin nahi chahiye */
    .main-content, .vault-footer {
        margin-left: 0 !important; 
        padding: 20px;
        width: 100%;
    }

    /* Header adjustments */
    .logo-text { font-size: 16px; }
    .header-right span { display: none; } /* Mobile par Faiza|Premium chhupa do */
    
    /* Stats grid fix */
    .stats-grid {
        grid-template-columns: 1fr;
    }
}


/* Menu button ko hamesha clickable rakhne ke liye */
.menu-toggle {
    display: none; /* Desktop par hide */
    background: transparent;
    border: none;
    color: white;
    font-size: 28px;
    cursor: pointer;
    z-index: 1101; /* Header se bhi upar */
    position: relative;
}

@media (max-width: 768px) {
    .menu-toggle {
        display: block !important; /* Mobile par lazmi dikhao */
    }

    .sidebar {
        position: fixed;
        left: 0;
        transform: translateX(-100%); /* Screen se bahar */
        transition: transform 0.3s ease-in-out;
        z-index: 1050; 
        display: block !important; /* Display none kabhi mat use karein transition ke sath */
    }

    /* Jab active class add ho */
    .sidebar.active {
        transform: translateX(0);
    }
}
    </style>
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
            <span class="status-badge">ACTIVE</span>
            <span class="username">Hi, Faiza</span>
            <button class="logout-btn">Logout</button>
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
            <h1>Nominee List</h1>
            <p>View and manage all nominees linked to your vault.</p>
        </div>

        <!-- Search & Table -->
        <div class="card">
            <input type="text" placeholder="Search Nominee..." id="searchInput" onkeyup="searchTable('searchInput','nomineeTable')">

            <table id="nomineeTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Relation</th>
                        <th>Access Level</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ali Khan</td>
                        <td>ali@email.com</td>
                        <td>Brother</td>
                        <td>Full</td>
                        <td><span class="badge pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>Fatima Noor</td>
                        <td>fatima@email.com</td>
                        <td>Sister</td>
                        <td>Limited</td>
                        <td><span class="badge verified">Verified</span></td>
                    </tr>
                    <tr>
                        <td>Ahmed Raza</td>
                        <td>ahmed@email.com</td>
                        <td>Cousin</td>
                        <td>Full</td>
                        <td><span class="badge pending">Pending</span></td>
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