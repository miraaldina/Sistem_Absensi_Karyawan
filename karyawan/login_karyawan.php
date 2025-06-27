<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Karyawan</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../karyawan/css/login_karyawan.css">
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
    </div>

    <!-- Main Login Container -->
    <div class="login-container">
        <!-- Header Section -->
        <div class="login-header">
            <div class="logo">
                <div class="logo-icon"></div>
                <div class="logo-text">WinniCode</div>
            </div>
            <h1 class="login-title">Login Karyawan</h1>
            <p class="login-subtitle">Sistem Absensi - Garuda Teknologi</p>
        </div>

        <!-- Login Form -->
        <form class="login-form" action="pro_login_karyawan.php" method="post">
            <div class="form-group">
                <input 
                    type="text" 
                    name="username" 
                    class="form-input" 
                    placeholder="Username" 
                    required
                >
            </div>
            
            <div class="form-group">
                <input 
                    type="password" 
                    name="password" 
                    class="form-input" 
                    placeholder="Password" 
                    required
                >
            </div>

            <button type="submit" class="login-btn">
                Masuk ke Dashboard
            </button>
        </form>

        <!-- Footer Section -->
        <div class="login-footer">
            <p class="footer-text">
2025 WinniCode - Garuda Teknologi <a href="https://colorlib.com/" target="_blank" class="footer-link">Colorlib</a>
            </p>
        </div>
    </div>
</body>
</html>