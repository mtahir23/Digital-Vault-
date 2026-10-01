<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerts & Notifications - Digital Vault</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/add.css">
</head>
<body>

    <header class="vault-header">
       <div class="header-left">
        <button class="menu-toggle" id="menuToggle">☰</button>
        
        <img src="logo.jpeg" alt="Logo" class="header-logo-img">
        <h1 class="logo-text">Digital <span>Vault</span></h1>
    </div>
        <div class="header-right">
            <span style="font-size: 13px; color: var(--text-muted);">Security Status: <b style="color: var(--success);">Protected</b></span>
        </div>
    </header>

    <aside class="sidebar">
        <a href="dashboard.php"><span class="icon">📊</span> Dashboard</a>
        <a href="viewdata.php"><span class="icon">🔐</span> Vault Items</a>
        <a href="add.php"><span class="icon">➕</span> Add Vault Data</a>
        <a href="alerts.php" class="active"><span class="icon">⏳</span> Alerts & Logs</a>
        <a href="Nominee.php"><span class="icon">👥</span> Nominees</a>
      
    </aside>

    <main class="main-content">
        <div class="alerts-container">
            <div class="page-header">
                <h2>Notifications & Alerts</h2>
                <p>Click on an alert to preview the automated email response.</p>
            </div>

            <div class="alert-list">
                <div class="alert-item" data-message="Security Warning: We detected a login attempt from an unrecognized IP address. If this wasn't you, please secure your vault immediately.">
                    <div class="alert-content">
                        <span class="alert-icon">⚠️</span>
                        <div class="alert-text">
                            <strong>Security Alert</strong>
                            <span>Suspicious login attempt detected</span>
                        </div>
                    </div>
                    <button class="dismiss-btn">Dismiss</button>
                </div>

                <div class="alert-item" data-message="Confirmation: Your new encrypted file 'Legal_Docs.pdf' has been successfully uploaded to the secure vault.">
                    <div class="alert-content">
                        <span class="alert-icon">✅</span>
                        <div class="alert-text">
                            <strong>Vault Update</strong>
                            <span>New data added successfully</span>
                        </div>
                    </div>
                    <button class="dismiss-btn">Dismiss</button>
                </div>

                <div class="alert-item" data-message="Nominee Notification: Your appointed nominee 'John Doe' has completed the verification process and is now authorized for emergency access.">
                    <div class="alert-content">
                        <span class="alert-icon">ℹ️</span>
                        <div class="alert-text">
                            <strong>Nominee Status</strong>
                            <span>Verification complete & access granted</span>
                        </div>
                    </div>
                    <button class="dismiss-btn">Dismiss</button>
                </div>
            </div>

            <div class="email-preview" id="emailPreview">
                <h3>📧 Email Dispatch Preview</h3>
                <div class="email-body" id="emailContent"></div>
                <button class="btn-send" onclick="sendEmail()">Send Test Email to My Account</button>
            </div>
        </div>
    </main>

    <script>
        const alerts = document.querySelectorAll('.alert-item');
        const emailPreview = document.getElementById('emailPreview');
        const emailContent = document.getElementById('emailContent');

        alerts.forEach(alert => {
            alert.addEventListener('click', function(e) {
                if(e.target.classList.contains('dismiss-btn')) return;
                
                emailPreview.style.display = 'block';
                emailContent.textContent = this.dataset.message;
                
                // Smooth scroll to preview
                emailPreview.scrollIntoView({ behavior: 'smooth' });
            });

            const dismissBtn = alert.querySelector('.dismiss-btn');
            dismissBtn.addEventListener('click', function(e){
                e.stopPropagation();
                alert.style.opacity = '0';
                setTimeout(() => {
                    alert.remove();
                    if(document.querySelectorAll('.alert-item').length === 0) {
                        emailPreview.style.display = 'none';
                    }
                }, 300);
            });
        });

        function sendEmail() {
            alert("Verification email has been triggered! Check your inbox. 🚀");
        }



       
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