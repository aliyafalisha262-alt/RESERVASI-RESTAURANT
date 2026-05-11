<?php
session_start();

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $file = 'users.json';

  if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);

    $found = false;

    if ($data) {
      foreach ($data as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
          $found = true;
          $_SESSION['user'] = $email;
          break;
        }
      }
    }

    if ($found) {
      header("Location: beranda.html"); // ganti sesuai kebutuhan
      exit;
    } else {
      $error = "Email atau password salah!";
    }
  } else {
    $error = "File users.json tidak ditemukan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In — Saveur</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/login.css" />
</head>
<body class="page-login" id="body">

  <div class="bg-layer">
    <div class="bg-image"></div>
    <div class="bg-overlay"></div>
  </div>

  <div class="plate-scene">
    <div class="plate-glow"></div>
    <div class="plate-ring ring-1"></div>
    <div class="plate-ring ring-2"></div>
    <div class="plate-ring ring-3"></div>
    <div class="food-dot dot-a"></div>
    <div class="food-dot dot-b"></div>
    <div class="food-dot dot-c"></div>
  </div>

  <div class="layout">
    <div class="side-visual">
      <div class="brand-lockup">
        <div class="brand-ornament"></div>
        <h1 class="brand-name">Saveur</h1>
        <p class="brand-tagline">An exquisite dining experience<br/>crafted for the discerning palate</p>
      </div>
    </div>

    <div class="side-form">
      <div class="glass-card" id="glassCard">

        <div class="toggle-bar">
          <button class="toggle-btn active" id="btnLogin" onclick="stay()">Log In</button>
          <button class="toggle-btn" id="btnSignup" onclick="goToRegister()">Sign Up</button>
          <div class="toggle-indicator" id="indicator"></div>
        </div>

        <div class="form-body" id="formBody">
          <div class="form-heading">
            <span class="form-eyebrow">Welcome back</span>
            <h2 class="form-title">Sign in to your<br/><em>reservation</em></h2>
          </div>

          <!-- ERROR MESSAGE -->
          <?php if (isset($error)) : ?>
            <p style="color:red; margin-bottom:10px;"><?php echo $error; ?></p>
          <?php endif; ?>

          <!-- FORM START -->
          <form method="POST" action="">
            
            <div class="input-group">
              <label class="input-label">Email Address</label>
              <div class="input-wrap">
                <input type="email" name="email" class="input-field" placeholder="your@email.com" required />
                <span class="input-icon">✦</span>
              </div>
            </div>

            <div class="input-group">
              <label class="input-label">Password</label>
              <div class="input-wrap">
                <input type="password" name="password" class="input-field" placeholder="••••••••" id="pwField" required />
                <span class="input-icon toggle-pw" onclick="togglePw()">◎</span>
              </div>
              <a href="#" class="forgot-link">Forgot password?</a>
            </div>

            <button type="submit" name="login" class="submit-btn">
              <span class="btn-text">Enter</span>
              <span class="btn-arrow">→</span>
            </button>

          </form>
          <!-- FORM END -->

          <p class="switch-text">
            Don't have an account?
            <a href="register.php" onclick="goToRegister(); return false;" class="switch-link">Create one</a>
          </p>
        </div>

      </div>
    </div>
  </div>

  <div class="transition-overlay" id="transitionOverlay"></div>

  <script src="js/transition.js"></script>
</body>
</html>