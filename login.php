<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel = stylesheet href = login.css>

    <script src="https://kit.fontawesome.com/a7742dae7e.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

    <div class = "wrapper">

        <header class = "header">
            <a href = "index.html"><i class="fa-solid fa-meteor fa-2xl home-icon" style = "color: #40b4e2;"></i></a>
            <h1 class = "logo"></h1>
            <nav>
                <ul class = "nav-menu">
                    <li>
                        <a href = "blogs.html"><button class = "contact-btn hover-btn">Blogs and Articles</button></a>
                    </li>
                    <li>
                        <a href = "portfolio.html"><button class = "contact-btn hover-btn">Resume and Portfolio</button></a>
                    </li>
                    <li>
                        <a href = "faq.html"><button class = "contact-btn hover-btn">FAQ</button></a>
                    </li>
                    
                </ul>
            </nav>

            <a href = "contact.html">
                <button class = "contact-btn hover-btn">Contact Me</button>
            </a>

        </header>

        <div class = "main">
        <h2> LOGIN </h2>
            <div class = "info-area">

                <form action = "login.php" method = "post">

                    <div class = "form-group">
                        <label for = "email"> Email: </label>
                        <input type = "email" name = "email" class = "form-control" required>
                    </div>

                    <div class = "form-group">
                        <label for = "password"> Password:</label>
                        <input type = "password" name = "password" class = "form-control" required>
                    </div>

                    <div class = "form-btn">
                        <input type = "submit" value = "Login" name = "login" class = "btn btn-primary">
                    </div>

                </form>

                <?php
                        if(isset ($_POST["login"])){
                            $email = $_POST["email"];
                            $password = $_POST["password"];

                            require_once "database.php";
                            $sql = "SELECT * FROM user WHERE email = '$email'";
                            $result = mysqli_query($conn, $sql);
                            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            if ($user){
                                if(password_verify($password, $user["password"])){
                                    $_SESSION["user"] = "yes";
                                    header("Location: index.html");
                                    die();
                            } else {
                                echo "<div class = 'alert alert-danger'> Password does not match </div>";
                            }
                        } else {
                            echo "<div class = 'alert alert-danger'> Email does not match </div>";
                        }
                    }
                    
                ?>
                <div><p> Not registered yet? <a href = "registration.php"> Register Here </a></div>

            </div>
        </div>

        <!-- <div class = "side side-bar-1">
            
        </div> -->

        <div class = "side side-bar-2">
        </div>

        <footer class = "footer">
        </footer>

    </div>

    
</body>
</html>