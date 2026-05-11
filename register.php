<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register — Saveur</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/register.css" />
</head>
<body class="page-register" id="body">

  <!-- Background image layer -->
  <div class="bg-layer">
    <div class="bg-image"></div>
    <div class="bg-overlay"></div>
  </div>

  <!-- Floating plate decoration (right side) -->
  <div class="plate-scene">
    <div class="plate-glow"></div>
    <div class="plate-ring ring-1"></div>
    <div class="plate-ring ring-2"></div>
    <div class="plate-ring ring-3"></div>
    <div class="food-dot dot-a"></div>
    <div class="food-dot dot-b"></div>
    <div class="food-dot dot-c"></div>
  </div>

  <!-- Main layout -->
  <div class="layout">
    <!-- Left: Form -->
    <div class="side-form">
      <div class="glass-card" id="glassCard">

        <!-- Toggle bar -->
        <div class="toggle-bar">
          <button class="toggle-btn" id="btnLogin" onclick="goToLogin()">Log In</button>
          <button class="toggle-btn active" id="btnSignup" onclick="stay()">Sign Up</button>
          <div class="toggle-indicator right" id="indicator"></div>
        </div>

        <!-- Form content -->
        <div class="form-body" id="formBody">
          <div class="form-heading">
            <span class="form-eyebrow">Join us today</span>
            <h2 class="form-title">Create  Your<em>  Account!</em></h2>
          </div>

          <div class="input-row">
            <div class="input-group half">
              <label class="input-label">First Name</label>
              <div class="input-wrap">
                <input type="text" class="input-field" placeholder="Your First Name" />
              </div>
            </div>
            <div class="input-group half">
              <label class="input-label">Last Name</label>
              <div class="input-wrap">
                <input type="text" class="input-field" placeholder="Your Last Name" />
              </div>
            </div>
          </div>

          <div class="input-group">
            <label class="input-label">Email Address</label>
            <div class="input-wrap">
              <input type="email" class="input-field" placeholder="your@email.com" />
              <span class="input-icon">✦</span>
            </div>
          </div>

          <div class="input-group">
            <label class="input-label">Password</label>
            <div class="input-wrap">
              <input type="password" class="input-field" placeholder="••••••••" id="pwField" />
              <span class="input-icon toggle-pw" onclick="togglePw()">◎</span>
            </div>
          </div>

          <div class="input-group">
           <label class="input-label">Confirm Password</label>
           <div class="input-wrap">
           <input type="password" id="confirmPw" class="input-field" placeholder="••••••••" />
            <span class="input-icon toggle-pw" onclick="toggleConfirmPw()">◎</span>
           </div>
          </div>

          <button class="submit-btn" id="btnRegister">
            <span class="btn-text">Create Account</span>
            <span class="btn-arrow">→</span>
          </button>

          <p class="switch-text">
            Already a member?
            <a href="#" onclick="goToLogin(); return false;" class="switch-link">Sign in</a>
          </p>
        </div>

      </div>
    </div>

    <!-- Right: Visual / Branding -->
    <div class="side-visual">
      <div class="brand-lockup">
        <div class="brand-ornament"></div>
        <h1 class="brand-name">Saveur</h1>
        <p class="brand-tagline">Begin your journey into<br/>the art of fine dining</p>
      </div>
    </div>
  </div>

  <!-- Page transition overlay -->
  <div class="transition-overlay" id="transitionOverlay"></div>
  
  <script src="js/transition.js"></script>

  <script src="js/simpan_data.js"></script>

  
</body>
</html>