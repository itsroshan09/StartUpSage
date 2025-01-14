<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="css/styles.css">

   <title>Animated login form - Bedimcode</title>
   <style>
      p,
      a {
         font-family: sans-serif;
      }

      .footer-area section_gap {
         font-family: sans-serif;
      }
   </style>
</head>

<body>
   <div class="login">

      <form action="process_login.php" method="POST" class="login__form">
         <h1 class="login__title">Login</h1>

         <div class="login__content">
            <div class="login__box">
               <i class="ri-user-3-line login__icon"></i>

               <div class="login__box-input">
                  <input type="email" required class="login__input" id="login-email" name="login-email" placeholder=" ">
                  <label for="login-email" class="login__label">Email</label>
               </div>
            </div>

            <div class="login__box">
               <i class="ri-lock-2-line login__icon"></i>

               <div class="login__box-input">
                  <input type="password" required class="login__input" id="login-pass" name="login-pass" placeholder=" ">
                  <label for="login-pass" class="login__label">Password</label>
                  <i class="ri-eye-off-line login__eye" id="togglePassword"></i>
               </div>
            </div>
         </div>

         <div class="login__check">
            <div class="login__check-group">
               <input type="checkbox" class="login__check-input" id="login-check" name="remember">
               <label for="login-check" class="login__check-label">Remember me</label>
            </div>


         </div>

         <button type="submit" class="login__button">Login</button>

         <p class="login__register">
            Don't have an account? <a href="register.php">Register</a>
         </p>
      </form>
   </div>

   <!--=============== MAIN JS ===============-->
   <script>
      const togglePassword = document.getElementById('togglePassword');
      const passwordInput = document.getElementById('login-pass');

      togglePassword.addEventListener('click', function() {
         const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
         passwordInput.setAttribute('type', type);
         this.classList.toggle('ri-eye-off-line');
         this.classList.toggle('ri-eye-line');
      });
   </script>
</body>

</html>