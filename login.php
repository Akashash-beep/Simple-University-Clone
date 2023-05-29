<?php

session_start();
        include 'register.php';

        if (isset($_SESSION["user"]))
        {


        }
        else{

            header('location:login.html');
        }
    include 'scripts.php';

        if (isset($_POST["Login"])) 
        {
           $email = $_POST["Email"];
           $password = $_POST["Password"];
            require_once "database.php";            
            $sql = "SELECT * FROM registration WHERE Email = '$email' ";
            $result = mysqli_query($conn, $sql);
             $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user)
             {
                $_SESSION['Email'] = $email;
                
                if ($user["Password"]==$password)
                 {
                    
                        
                       
                        $_SESSION["user"] = $email;
                        // header('location:index.php');
                        ?>
                        <html>
                            <link rel="stylesheet" href="regular.css">
    
                        <body>
                            
    
    
                       
                        <script>
    
    
                        swal({
                            title: "Wohooo!",
                            text: "You have Succesfully Loggged in!",
                            icon: "success",
                            
                          });
    
    
                          
    
    
                        </script>
                        <div class="redirect">
                            <div class="redirect-2">
                            <a href="index.php">Click to redirect</a>
    
                            </div>
                            
    
                        </div>
                        
    
    
    
    
    
                        </body>
                        </html>
                        <?php

    
                        
                        die();
                }
                  
                            else
                            {

                            
                                header ('location:error.php');
                            
                            
                            }

                   
            }
                     else
                            {

                            
                                header ('location:error.php');
                                
                            
                            
                            }

        }


        
                    ?>
     