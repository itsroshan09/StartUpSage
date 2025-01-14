<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartUp Sage</title>

    <!--- My CSS Link-->
    <link rel="stylesheet" href="/StartUpSage/css/register.css">
</head>

<body style="background: url('img/portrait.jpg');">

    <main>
        <section class="learn">
            <h1>StartUp<br></h1>
            <p>See how experienced developers solve problems in real-time. <br> Watching scripted tutorials is great, but understanding how <br> developers think is invaluable.</p>
        </section>

        <section>
            <div class="sign-up">
                <form action="process_register.php" method="POST" class="signup-form" data-netlify="true">
                    <div class="form-btn">
                        <input type="text" placeholder="First Name" name="first_name" required>
                        <img class="icon" src="/icon-error.svg" alt="Error">
                        <p class="msg">First Name cannot be empty</p>
                    </div>

                    <div class="form-btn">
                        <input type="text" placeholder="Last Name" name="last_name" required>
                        <img class="icon" src="/img/icon-error.svg" alt="Error">
                        <p class="msg">Last Name cannot be empty</p>
                    </div>

                    <div class="form-btn">
                        <input type="email" placeholder="Email Address" name="email" required>
                        <img class="icon" src="./Images/icon-error.svg" alt="Error">
                        <p class="msg">Looks like this is not an email</p>
                    </div>

                    <div class="form-btn">
                        <input type="password" placeholder="Password" name="password" required>
                        <img class="icon" src="./Images/icon-error.svg" alt="Error">
                        <p class="msg">Password cannot be empty</p>
                    </div>

                    <input id="submit-btn" type="submit" value="claim your free trial" id="btn">

                    <p class="terms">By clicking the button, you are agreeing to our <span><a href="#">Terms and Services</a></span></p>
                </form>
            </div>
        </section>
    </main>

</body>

</html>