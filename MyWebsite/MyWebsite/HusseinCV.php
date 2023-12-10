<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../pages/index.php");
        header("location:../index.php");
    }
?>
   
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
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
        ?></a></li>
                </ul>
              

            </nav>


        
        <hr class="yellowline">
        <div class="container">
        
        <div class="left">
            
            
            </h2>   
             <img src="pic3.png" alt="pic" class="image">
             <h3 class="header">Education:</h3>
            <hr class="line">

        <p class="title">Lebanese baccalaureate - LS</p>
        <p class="year">Lebanon Evangelical School for Boys and Girls</p>
        <p class="year" style="padding-bottom: 30px;">2006-2021</p>
        <p class="title">Bachelor in Computer Science</p>
        <p class="year">Lebanese American University</p>
        <p class="year">2021-2024</p>
        <h3 class="header">Contact Information:</h3>
        <hr class="line">
        <div class="yellowbox"></div>
        <div class="gray">
        <span class="header1">Phone Number: </span>
        <br>
        <span class="header1">+961 76 195576 </span>
    </div>
       
        <br>
        <br>

        <div class="yellowbox"></div>
        <div class="gray">

            <span class="header1">Email:</span>
            <br>
            <span class="header1"> Hussein.sleem013@gmail.com</span>
        </div>
        
        <br>
        <br>

        <div class="yellowbox"></div>
        <div class="gray">

            <span class="header1">Address:</span>
            <br>
            <span class="header1">Haret Hreik, Dr. Haidar Street, Slim & Nahle Building</span>
        </div>
        
        
        
        <h3 class="header">Software Skills:</h3>
        <hr class="line">
        <div class="skill">
            <h6>HTML</h6>
            <div class="cont">
                <div class="bar html"><br></div>
            
                <h6>SQL</h6>
                    <div class="cont">
                    <div class="bar sql"><br></div>
            </div>

            <h6>C#</h6>
            <div class="cont">
            <div class="bar csharp"><br></div>
    </div>

    <h6>Python</h6>
    <div class="cont">
    <div class="bar python"><br></div>
</div>

            <h6>CSS</h6>
            <div class="cont">
                <div class="bar css"><br></div>

            </div>

            <h6>Java</h6>
            <div class="cont">
                <div class="bar java"><br></div>

            </div>

            <h6>C language</h6>
            <div class="cont">
                <div class="bar c"><br></div>


                
                
            </div>
        </div>
            <h3 class="header">Languages:</h3>
            <hr class="line">
            <div class="yellowbox"></div>
            <div class="gray">
            <span class="header1">Arabic: </span>
            <br>
            <span class="header1">Native Language </span>
            </div>
            <br>
            <br>
    
            <div class="yellowbox"></div>
                    <div class="gray">
            <span class="header1">English:</span>
            <br>
            <span class="header1"> bilingual proficiency (C1)</span>
        <div>
            
        </div>



  </div>

    </div>
   
    
</div>




<div class="right">
    <div class="yellowbox2">
        <h1 class="text3">HUSSEIN SLIM<h1>
        <h1 class="text4">COMPUTER SCIENTINST</h1>
    </div>
        <div class="cont2">
            <h2 class="text5">About Me:</h2>
            <hr class="line2">
            <p style="justify-content: first baseline;"> As an undergraduate computer science student at the Lebanese American University (LAU), I am passionate about exploring software development and database management. I am eager to apply my knowledge, skills, and enthusiasm for creating innovative software solutions.</p>
    
            <h2 class="text5">Work Experience:</h2>
            <hr class="line2">
            <p>Integrated Digital System (IDS)</p>
            <p >Development and Research Department Training Program </p>
            <p>May 2023 - July 2023</p>
            <div class="Ilist">
            <li class="el">Completed a comprehensive 3-month training program at IDS in the Development and Research Department.</li>
           <li class="el">Accumulated 240 hours of hands-on experience and learning.</li>
           <li class="el">Build frontend webpages using HTML/HTML5 and CSS. </li>
           <li class="el">Build up Database using SQL Server 2012/2014.</li>
           <li class="el">Develop a full website using Visual Studio 2019/2022, ASP.NET/MVC, CH.NET, and Entity Framework Core.</li>
           <li class="el">Develop WebAPIs (.NET Core 5.0/6.0/7.0) to be used along their website.</li>
                </div>
                <h2 class="text5">Projects:</h2>
            <hr class="line2">
            <div class="Ilist">
                <li class="el" style="padding-bottom:  2%;">Car Dealership: The database project for a car dealership involved designing and implementing a comprehensive database management system to track and manage car sales, financing terms, and salesperson performance, enabling a wide range of queries from basic car availability searches to complex analyses such as identifying top-selling car models and calculating individual salesperson revenue.</li>
               <li class="el" style="padding-bottom: 2%;">
                Computer Organization Project: The project aimed to create a straightforward RISC processor with 8 registers and a program counter (PC) for essential arithmetic, logical, and data manipulation operations. The collaborative team successfully designed and implemented this functional processor, enabling it to execute instructions from program memory while interacting with data memory.</li>
               <li class="el">
                Meeting Room Booking System: I Developed a Meeting Room Booking System, enhancing workplace efficiency and resource management. Implemented user authentication, role-based access control, and company profile management. Utilized Visual Studio, C#, Entity Framework Core, and modern web technologies for a user-friendly interface.</li>

               <h2 class="text5">Soft Skills:</h2>
            <hr class="line2">
            
                            <div class="grid2">
                                <div class="Ilist1">
                                    <li class="el">Quick Learner</li>
                                   <li class="el">Imagining Alternatives</li>

                            </div>


                            <div class="Ilist2">
                                <li class="el">Accepting Responsibility</li>
                               <li class="el">Critical Thinker</li>

                        </div>



                        
               
                    </div>
                    <h2 class="text5">Hobbies:</h2>
            <hr class="line2">
            
                            <div class="grid2">
                                <div class="Ilist1">
                                    <li class="el">Futsal</li>
                                   

                            </div>

 
                            <div class="Ilist2">
                                <li class="el">Chess</li>
                               

                        </div>
    
    
        </div>
</div>
</body>
</html>
