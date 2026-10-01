/* =========================
   Digital Vault - Main JS
   Author: Human-Generated
   Description: Handles form validation, table search,
   nominee status, alerts, and Dead-Man Switch functions
=========================== */

/* ===== Form Validation ===== */
function validateEmail(email) {
    // Simple email validation regex
    const re = /^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    return re.test(String(email).toLowerCase());
}

/* ===== Show Alert Messages ===== */
function showAlert(message, type = 'success') {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert ${type}`;
    alertDiv.innerText = message;

    // Prepend to body
    document.body.prepend(alertDiv);

    // Remove after 3 seconds
    setTimeout(() => {
        alertDiv.style.opacity = '0';
        setTimeout(() => alertDiv.remove(), 500);
    }, 3000);
}

/* ===== Update Nominee Status Badge ===== */
function updateBadge(selectElement, badgeId) {
    const badge = document.getElementById(badgeId);
    if (!badge) return;

    badge.innerText = selectElement.value;

    // Change badge class based on status
    badge.className = selectElement.value === 'Verified' ? 'badge verified' : 'badge pending';
}

/* ===== Dead-Man Switch: Show Grace Period ===== */
function showGracePeriod(value) {
    const graceBox = document.getElementById('graceBox');
    if (!graceBox) return;

    graceBox.innerText = `Grace Period set: ${value} day(s)`;
}

/* ===== Table Search Function ===== */
function searchTable(inputId, tableId) {
    const input = document.getElementById(inputId);
    const table = document.getElementById(tableId);
    if (!input || !table) return;

    const filter = input.value.toLowerCase();
    const rows = table.getElementsByTagName('tr');

    for (let i = 1; i < rows.length; i++) { // skip header row
        const rowText = rows[i].innerText.toLowerCase();
        rows[i].style.display = rowText.includes(filter) ? '' : 'none';
    }
}

/* ===== Additional Utility Functions (Optional) ===== */
// Example: Reset forms, toggle visibility, etc.
// function resetForm(formId) { ... }
// function toggleSection(sectionId) { ... }