<?php
   session_start();
   if(!isset($_SESSION['unique_id'])){
       header("location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="shortcut icon" href="php\images\chatter logo.png" type="">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>

<body>
    <div class="wrapper">
        <section class="users">
            <header style="margin-top: 6px;">
            <?php
                include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>    
                <div class="content">
                  <img style="display: none;" src="php/images/<?php echo $row['img'] ?>" alt="">
                  <div class="details">
                    <span style="text-align: center;"><h1 style="text-align: center;margin-left: 51px;">Welcome to your page!</h1><br><br><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                    <p style="display: none;"><?php echo $row['status']  ?></p>
                  </div>
                </div>
                <br><br><br><a style="margin-top: 135px;background: #40407c;" href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
            </header>
            
            <div class="users-list">
                
            </div>
        </section>
    </div>

    <script src="scripts/users.js"></script>
</body>
</html>