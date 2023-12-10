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
    <title>Gallery</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="mStyle.css">

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
            <li class="navlist"><a href="ContactMe.html" title="Contact" class="ali">CONTACT</a></li>
            <li class="navlist"><a href="#" title="Project">
                <?php
    if (isset($_SESSION["username"])) {
       
        echo '<a class="ali" href="../BE/logout.php" id = "logOut">LOGOUT</a>';
    }
    ?></a>
            </ul>
          

        </nav>


        
        <hr class="yellowline">
        <div class="container" style="width: 1263.3px;display: block;">
        
        <div class="left" style="height: 1000px;">
        <?php
                $jsonfile = 'js/gallery.json';
                $jsonimg = file_get_contents($jsonfile);
                $images = json_decode($jsonimg, true)['images'];
            ?>
            
            <div class="img-frame" style="width: 80%;">
    <?php for ($i = 0; $i < count($images); $i++): ?>
        <div class="simg">
            <a href="image<?= $i + 1 ?>.html"> 
                <img src="<?= $images[$i]['url'] ?>" alt="<?= $images[$i]['alt'] ?>" class="my-img">
            </a>
        </div>
    <?php endfor; ?>
</div>

            
    
      
       
     
       
        
        
        
        
                
      




</div>
</body>
</html>
