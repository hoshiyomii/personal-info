<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: login.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel = stylesheet href = contact.css>

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
            <div class = "info-area">
                <h1 class = "info-title">CONTACT US</h1>
                <h2 class = "info-subtitle">Feel free to leave a feedback</h2>
                <h3 class = "info-text">Do you have any ideas, recommendations, and/or feedback? Enter it here:</h3>

                <form action="contact.php" method="post" class = "form">
                    <p>This will use the account details you've logged into</p>
                    <label>Subject</label>
                    <input type = "text" class = "form-control" name = "subject" placeholder="Feedback / Suggestion / Recommendation / ..." required><br>

                    
                    <label>Content:</label><br>
                    <textarea id="content" name="content" required></textarea><br><br>

                    <div class = "form-group">
                        <input type = "submit" class = "btn btn-primary" name = "submit" placeholder="submit">
                    </div>

                    <?php
                    if(isset($_POST["submit"])){
                        echo "<div class = 'alert alert-success'> Your message has been delightfully received in our glorious mailbox </div>";

                    }
                    ?>

                </form>
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