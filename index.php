<?php

    session_start();
    if (isset($_SESSION["user"])) 
    {



        ?>
        <html>

        <body>
            <div class="welcome">
                    <a>

                        <?php echo"Welcome " .$_SESSION['user'];
                        ?>


                    </a>



            </div>
      
            <style>
                .welcome{
                    position: absolute;
                    background-color:red;
                    
                    padding:20px;
                    color:white;
                    top:100px;
                   
                    animation: slide-in 1000ms ease-out;
                }

                .welcome a{

                    text-decoration:none;
                    color:white;
                    cursor: default;
                    font-weight:600;

                }

                @keyframes slide-in {
                    from {
                    transform: translateX(-100%);
                    opacity: 0.25;
                    }
                    to {
                    transform: translateX(0%);
                    opacity: 1;
                    }
                }




                
            </style>
        </body>
        </html>
        
       <?php

    }
    else{


        header('location:login.html');
    }
                

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <title>College Registration</title>
    <style> @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Poppins:wght@400;500;700&display=swap'); </style>
    <script src="https://kit.fontawesome.com/a7ee257dd1.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
<div class="loader">
        <div></div>
    </div>

<style>
            .loader{
                height:100%;
                width: 100vw;
                overflow: hidden;
                background-color: black;
                position: absolute;
                z-index: 10000;
            }
            .loader>div{
                height: 100px;
                width: 100px;
                border: 15px solid #45474b;
                border-top-color: #2a88e6;
                position: absolute;
                margin: auto;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                border-radius: 50%;
                animation: spin 1.5s infinite linear;
                z-index: 1000;
            }
            @keyframes spin{
                100%{
                    transform: rotate(360deg);
                }
            }
</style>

<script>

$(window).on('load',function(){
$(".loader").fadeOut(1000);
$(".content").fadeIn(1000);
});

</script>
    <div class="banner">
        <nav class="menu-container">
        <!-- burger menu -->
        <input type="checkbox" aria-label="Toggle menu" />
        <span></span>
        <span></span>
        <span></span>

        <!-- logo -->
        <a href="#" class="menu-logo">
            <img src="images/logo-2.png" alt="Box-Education"/>
        </a>

        <!-- menu items -->
        <div class="menu">
            <ul>
            <li>
                <a href="index.php">
                Home
                </a>
            </li>
            <li>
                <a href="about.html">
                About
                </a>
            </li>

            <li>
                <a href="register.html">
                Register
                </a>
            </li>
           
            </ul>
            <ul id="log">
            <li >
                <a href="logout.php">
                Logout
                </a>
            </li>
            </ul>
        </div>
    </nav>

        <div class="content">
            <h1>UNIVERSITY OF MADRAS</h1>
            
            <div class="quote">
                <p>“Study without desire spoils the memory, and it retains nothing that it takes in.”</p>


            </div>
            <div class="reg_btn">
                <a href="register.html">
                <button type="button" name="bt" id="bt" onclick="register.html">Register</button>
                </a>
            </div>

           
        </div>
    </div>



    <div class="loader">
        <div></div>
    </div>

<style>
            .loader{
                height:100%;
                width: 100vw;
                overflow: hidden;
                background-color: black;
                position: absolute;
                z-index: 10000;
            }
            .loader>div{
                height: 100px;
                width: 100px;
                border: 15px solid #45474b;
                border-top-color: #2a88e6;
                position: absolute;
                margin: auto;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                border-radius: 50%;
                animation: spin 1.5s infinite linear;
                z-index: 1000;
            }
            @keyframes spin{
                100%{
                    transform: rotate(360deg);
                }
            }
</style>

<script>

$(window).on('load',function(){
$(".loader").fadeOut(1000);
$(".content").fadeIn(1000);
});

</script>


    

        <!-- footer Contents -->
<footer>
        <div class="footer-info">
            <div class="footer-width about">
                <h2>About</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Sit enim obcaecati ipsam<br> perspiciatis.<br> Cumque doloremque 
                    voluptatem hic obcaecati ad rerum fugit sapiente ab eius 
                    mollitia <br>inventore dicta, tenetur ipsa aliquid!
                </p>
                      
                <div class="social-media">

                    <ul>

                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                
                    </ul>
                </div>
             </div>
             <div class="footer_width link">

                    <h2>Quick Links</h2>
                <ul>

                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Architecture</a></li>
                    <li><a href="">Register</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
             </div>
            <div class="footer_width contact">

                    <h2>Contact</h2>
                    <ul>
                        <li>
                            <span><i class="fa-solid fa-map-pin"></i></span>
                            <p>
                                address here
                            </p>
                        </li>

                        <li>
                            <span><i class="fa-regular fa-envelope"></i></span>
                            <a href="">Email Id</a>
                        
                        </li>

                        <li>
                            <span><i class="fa-solid fa-phone"></i></span>
                            <a href="">0000-000-000</a>
                        </li>
                    </ul>
            </div>
        </div>


</footer>

</body>
</html>