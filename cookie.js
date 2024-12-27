function acceptCookies() {
    // Display a popup box when the user accepts cookies
    alert("Thank you for accepting cookies!");
    // Set a cookie indicating that the user accepted cookies
    document.cookie = "cookies_accepted=true; expires=Thu, 01 Jan 2026 00:00:00 UTC; path=/";
    // Hide the cookie banner
    document.getElementById('cookieBanner').style.display = 'none';
}

