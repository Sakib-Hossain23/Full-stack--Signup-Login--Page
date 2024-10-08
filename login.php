<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="shortcut icon" href="php\images\chatter logo.png" type="">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>


<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chatter</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <!--<input type="submit" value="Continue to Chat">-->
                    <input type="submit" value="Login">

                </div>
            </form>
            <div class="link"><a href="index.php">Signup now</a></div>
        </section>
    </div>

    <script src="scripts/pass-show-hide.js"></script>
    <script src="scripts/login.js"></script>
</body>
</html>