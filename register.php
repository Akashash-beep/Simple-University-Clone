<?php
    include('scripts.php');
        if (isset($_POST["Submit"])) {
           $name= $_POST["Name"];
           $number =$_POST["Number"];
           $email = $_POST["Email"];
           $password = $_POST["Password"];
           $userprofile = $_SESSION['Email'];

           $errors = array();
           
           if (empty($name) OR empty($email) OR empty($password) OR empty($number)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           require_once "database.php";
           $sql = "SELECT * FROM registration WHERE Email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO registration (Name, Number, Email, Password) VALUES ( ?, ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"siss",$name, $number, $email, $password);
                mysqli_stmt_execute($stmt);
                echo "You are registered successfully please go to login page";
                
                ?>
                <html>
                            <link rel="stylesheet" href="regular.css">
    
                        <body>
                            
    
    
                       
                        <script>
    
    
                        swal({
                            title: "Wohooo!",
                            text: "Your details added to the database please login",
                            icon: "success",
                            
                          });


    
    
                          
    
    
                        </script>
                        <div  class="swal-button-container">
                        <a href="login.html">

                        <button class="swal-button swal-button--confirm"> OK</button>


                        </a>
                        

                        </div>
                      
                        
                        <!-- <div class="redirect">
                            <div class="redirect-2">
                            <a href="login.html">Click to redirect</a>
    
                            </div>
                            
    
                        </div>
                         -->
    
    
    
    
    
                        </body>
                        </html>
                
                
              <?php
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>