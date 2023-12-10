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
    <title>Chess</title>
<link rel="stylesheet" href="style.css">


</head>
<body>
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
        <div class="container3" >
        
        <div style="height: 100vh;">
            <div class="container2">
               <div class="left">
                <div class="name2" style="margin-left: 20%;">
                    <h1>CHESS</h1>
                    
                </div>
                <p class="para2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, odit dolorum, soluta doloremque, dolor sint voluptates sunt cum velit molestias odio fugit ducimus minima praesentium facilis at rem quos sed.</p>
                <a href="Futsal.php"><button class="button2">Futsal</button></a>
                
            </div>
            </div>
            
            
            
            
    
      </div>
      <div style="height: 15vh; background-color: goldenrod;">

      </div>
</body>
</html>

            
            
            
            
    
      
       
     
       
        
        
        
        
                
      




</div>
</body>
</html>
