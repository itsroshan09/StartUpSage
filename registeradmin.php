<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
    // The user is using a mobile device
    header("Location: no-access.php");
} else {
   
}
?>
<?php
session_start();
// Check if the user is logged in, redirect to the login page if not
if (!isset($_SESSION['admin_email'])) {
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        /* Variables CSS */
        :root {
            --white-color: hsl(0, 0%, 100%);
            --black-color: hsl(0, 0%, 0%);
            --body-font: "Poppins", sans-serif;
            --h1-font-size: 2.25rem;
            --normal-font-size: 1rem;
            --small-font-size: .813rem;
            --font-medium: 500;
        }

        /* Base */
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body,
        input {
            font-size: var(--normal-font-size);
            font-family: var(--body-font);
            background-size: cover;
        }

        body {
            color: var(--black-color);
            background-image: url('/StartUpSage/img/register-admin.jpg');
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        input,
        button {
            border: none;
            outline: none;
            color: black;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Signup Form */
        .signup__form {
            background-color: hsla(0, 0%, 10%, 0.1);
            border: 2px solid var(--white-color);
            padding: 2.5rem 1.5rem;
            border-radius: 1rem;
            backdrop-filter: blur(8px);
            width: 500px;
            /* Set the width */
        }

        .signup__title {
            text-align: center;
            font-size: var(--h1-font-size);
            font-weight: var(--font-medium);
            margin-bottom: 2rem;
            color: yellow;
        }

        .signup__content,
        .signup__box {
            display: grid;
        }

        .signup__content {
            row-gap: 1.75rem;
            margin-bottom: 1.5rem;
        }

        .signup__box {
            grid-template-columns: max-content 1fr;
            align-items: center;
            column-gap: 0.75rem;
            border-bottom: 2px solid var(--white-color);
        }

        .signup__icon {
            font-size: 1.25rem;
        }

        .signup__input {
            width: 100%;
            padding-block: 0.8rem;
            background: none;
            color: var(--white-color);
            position: relative;
            z-index: 1;
        }

        .signup__box-input {
            position: relative;
        }

        .signup__label {
            position: absolute;
            left: 0;
            top: 13px;
            font-weight: var(--font-medium);
            transition: top 0.3s, font-size 0.3s;
        }

        .signup__input:focus+.signup__label,
        .signup__input:not(:placeholder-shown)+.signup__label {
            top: -12px;
            font-size: var(--small-font-size);
        }

        .signup__button {
            width: 100%;
            padding: 1rem;
            border-radius: 0.5rem;
            background-color: var(--white-color);
            font-weight: var(--font-medium);
            cursor: pointer;
            margin-bottom: 2rem;
            font-family: sans-serif;
            font-size: 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        .signup__button:hover {
            background-color: rgba(255, 255, 255, 0.7);
            color: black;
        }


        .signup__login {
            text-align: center;
        }

        .signup__login a {
            color: var(--white-color);
            font-weight: var(--font-medium);
        }

        .signup__login a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Admin Signup - Bedimcode</title>
</head>

<body>
    <div class="signup">
        <form action="process_adminsignup.php" method="POST" class="signup__form">
            <h1 class="signup__title">Admin Signup</h1>

            <div class="signup__content">
                <div class="signup__box">
                    <i class="ri-user-3-line signup__icon"></i>
                    <div class="signup__box-input">
                        <input type="email" required class="signup__input" id="signup-email" name="signup-email" placeholder=" ">
                        <label for="signup-email" class="signup__label">Email</label>
                    </div>
                </div>

                <div class="signup__box">
                    <i class="ri-lock-2-line signup__icon"></i>
                    <div class="signup__box-input">
                        <input type="password" required class="signup__input" id="signup-pass" name="signup-pass" placeholder=" ">
                        <label for="signup-pass" class="signup__label">Password</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="signup__button">Signup</button>

            <p class="signup__login">
                Already have an account? <a href="admin_login.php">Login</a>
            </p>
        </form>
    </div>

    <!-- MAIN JS -->
    <script src="js/main.js"></script>
</body>

</html>