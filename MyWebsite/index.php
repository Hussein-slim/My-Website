<?php 
session_start();
session_unset();
session_destroy();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="mStyle.css">

</head>
<body style="background-color:black;">
    <div>
        
            <nav class="headerbuttons">
                <ul class="orderedL">
                    <li class="navlist"><a href="index.php" title="Home" class="ali">HOME</a></li>
                <li class="navlist"><a href="index.php" title="Gallery" class="ali">GALLERY</a></li>
                <li class="navlist"><a href="index.php" title="Resume" class="ali">RESUME</a></li>
                <li class="navlist"><a href="#" title="Project" class="ali">PROJECTS</a>
                    <div class="submenu">
                        <ul>
                            <li class="navlist2" ><a class="ali" href="index.php">Car Dealership</a></li>
                            <hr class="yellowline" style="height: 0.3vh;">
                            <li class="navlist2"><a class="ali" href="index.php">Computer Organization Project</a></li>
                            <hr class="yellowline" style="height: 0.4vh;">
                            <li class="navlist2" ><a class="ali" href="index.php">Meeting Room Booking System</a></li>
                        </ul>
                    </div>
                </li>
                <li class="navlist"><a href="#" title="Hobbies" class="ali">HOBBIES</a>
                    <div class="submenu2">
                        <ul>
                            <li class="navlist2" ><a class="ali" href="index.php">Futsal</a></li>
                            <hr class="yellowline" style="height: 0.4vh;">
                            <li class="navlist2"><a class="ali" href="index.php">Chess</a></li>
                            
                        </ul>
                    </div>
                </li>
                <li class="navlist"><a href="index.php" title="Contact Me" class="ali">CONTACT</a></li>

                </ul>

            </nav>

        
        <hr class="yellowline">
        <div class="container" style="color:white;width: 1263.3px;display: block;">
            
            <div style="background-color: goldenrod; margin-right: 20%; margin-left: 20%; margin-bottom: 20%;margin-top:5%; text-align: center; height: 80%; padding-top: 5%; font-size: 22px;">
            <h1  style="text-align: center;color:black;">
                Welcome to my Portfolio
            </h1>
    <form action="BE/login.php" method="POST" id="login-form">
        <br>
        <label id="user" for="user"><b style="color: black; font-size: 24px;">Username</b></label>
        <br>
        <input style="border-radius: 50px; border: solid 2px #062a3c; padding: 12px; font-size: 20px;" type="text"
            placeholder="Enter Username" name="username" required>
        <br><br>
        <label style="margin: 10px;" id="password" for="password"><b style="color: black; font-size: 24px;">Password</b></label>
        <br>
        <input style="border-radius: 50px; border: solid 2px #062a3c; padding: 12px; font-size: 20px;" id="pass"
            type="password" placeholder="Enter Password" name="password" required>
        <br><br>
        <input type="button" id="loginBtn" value="Login" onclick="login()" style="font-size: 24px;">
        <br>
        <p style="color: #062a3c; font-size: 22px;">Don't have an account? <a href="Signup.html">Sign Up</a></p>
    </form>
</div>

            </div>
                
        
        


    <script>
    function login(){
        var un=document.getElementById("user").value;
        var pass=document.getElementById("pass").value;
        if ((un=="")||(pass=="")){
            alert("You must fill in the username and the password!");
        }else{
            document.getElementById("login-form").submit();
        }

    }
    function ClearForm(){
        document.getElementById("user").value="";
        document.getElementById("pass").value="";
    }
</script>

            
    
      
       
     
       
        
        
        
        
                
      




</body>
</html>
