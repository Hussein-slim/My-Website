<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../pages/index.php");
        header("location:../index.php");
    }
?>


  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body style="display: block;">

    <div>
        
        
            <nav class="headerbuttons">
                <div style="color:white; float:left">
                <?php
        if (isset($_SESSION["username"])) {
            echo 'Welcome ' . $_SESSION["fullname"].' !!!' ;
           
        }
        ?>
</div>
                <ul class="orderedL">
                <li class="navlist"><a href="Home.php" title="Home" class="ali">HOME</a></li>
                <li class="navlist"><a href="Gallery.php" title="Gallery" class="ali">GALLERY</a></li>
                <li class="navlist"><a href="HusseinCV.php" title="Resume" class="ali">RESUME</a></li>
                <li class="navlist"><a href="#" title="Project" class="ali">PROJECTS</a>
            
                    <div class="submenu">
                        <ul>
                            <li class="navlist2" ><a class="ali" href="CarDealership.php">Car Dealership</a></li>
                            <hr class="yellowline" style="height: 0.3vh;">
                            <li class="navlist2"><a class="ali" href="CO.php">Computer Organization Project</a></li>
                            <hr class="yellowline" style="height: 0.4vh;">
                            <li class="navlist2" ><a class="ali" href="MRBS.php">Meeting Room Booking System</a></li>
                        </ul>
                    </div>
                </li>
                <li class="navlist"><a href="#" title="Hobbies" class="ali">HOBBIES</a>
                    <div class="submenu2">
                        <ul>
                            <li class="navlist2" ><a class="ali" href="Futsal.php">Futsal</a></li>
                            <hr class="yellowline" style="height: 0.4vh;">
                            <li class="navlist2"><a class="ali" href="Chess.php">Chess</a></li>
                            
                        </ul>
                    </div>
                </li>
                <li class="navlist"><a href="ContactMe.php" title="Contact" class="ali">CONTACT</a></li>
                <li class="navlist"><a href="#" title="Project">
                    <?php
        if (isset($_SESSION["username"])) {
           
            echo '<a class="ali" href="../BE/logout.php" id = "logOut">LOGOUT</a>';
        }
        ?></a>
                </ul>
              

            </nav>

        
        <hr class="yellowline">
        <div class="container2" style="width: 100%;">
        
        <div class="left2">
            <div class="name">
                <h1>HUSSEIN</h1>
                <h1>SLIM</h1>
            </div>
            <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, odit dolorum, soluta doloremque, dolor sint voluptates sunt cum velit molestias odio fugit ducimus minima praesentium facilis at rem quos sed.</p>
            <a href="HusseinCV.php"><button class="button">Learn More</button></a>
            </div>
        
        <div class="right2">
            <img src="pic1.jpg" alt="pic" class="image2">
            <div class="grid2">
                <div class="Ilist4">
                    

                    <li class="el2" style="list-style: none;"><a class="ali2" href="tel: +96176195576"><i class="fa fa-phone" style="font-size:130%; padding-right: 3%;"></i>+961 76 195576</a></li>
                   

            </div>

            <div class="Ilist3 Ilist4">
                <li class="el2" style="list-style: none;"><i class="fa fa-linkedin" style="font-size:130%;padding-right: 3%;"></i>tbd</li>
            </div>

            <div class="Ilist4">
                <li class="el2" style="list-style: none;"><a class="ali2" href="https://instagram.com/hussein.sleem?igshid=MzRlODBiNWFlZA== " target="_blank"><i class="fa fa-instagram" style="font-size:130%;padding-right: 3%;"></i>Hussein.sleem</a></li>
                </div>

                <div class="Ilist3 Ilist4">
                    <li class="el2" style="list-style: none;"><a class="ali2" href="https://www.facebook.com/profile.php?id=100008763799088&mibextid=ZbWKwL" target="_blank"><i class="fa fa-facebook-square" style="font-size:130%;padding-right: 3%;"></i>Hussein Sleem</a></li>
                    </div>

        </div>
</body>
</html>
