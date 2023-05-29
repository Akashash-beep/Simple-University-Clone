<?php

include 'database.php';
include 'scripts.php';


    if(isset($_POST['register']))
    {

      $fname     = $_POST['fname'];
      $lname     = $_POST['lname'];
      $dob       = $_POST['dob'];
      $email     = $_POST['email'];
      $gender    = $_POST['gender'];
      $religion  = $_POST['religion'];
      $community = $_POST['community'];
      $college   = $_POST['college'];
      $school    = $_POST['school'];
      $address   = $_POST['address'];
      $postal    = $_POST['postal'];
     
      $query = "INSERT INTO form VALUES('$fname','$lname','$dob','$email','$gender','$religion','$community','$college','$school','$address','$postal')";

      $data = mysqli_query($conn,$query);

      if($data)
      {

        ?>
                    <html>
                          
                          <script src="js/sweetalert.min.js"></script>
                      <body>
                          
                      
                      
                      
                      <script>
                      
                      
                          swal("Success",
                           "Your Details are added");
                      
                        
                      
                      
                      </script>
                      <div class="redirect">
                          <div class="redirect-2">
                          <a href="index.php">Click to redirect</a>
                      
                          </div>
                          
                      
                      </div>
                      <style>
                      
                      *{
                      
                      margin: 0;
                      padding: 0;
                      }
                      
                      .redirect{
                      
                      text-decoration: none;
                      
                      
                      position: absolute;
                      
                      left: 50%;
                      top: 50%;
                      width: 480px;
                      height: 300px;    
                      z-index: 1000000;
                      transform: translate(-50%,-50%);
                      }
                      
                      .redirect-2 {
                      
                      position: relative;
                      display: flex;
                      justify-content: flex-end;
                      top: 190px;
                      right: 15px;
                      text-align: center;
                      -webkit-animation: scale-up-center 0.09s ease-out both;
                                  animation: scale-up-center 0.09s ease-out both;
                      
                      
                      
                      }
                      
                      @-webkit-keyframes scale-up-center {
                        0% {
                          -webkit-transform: scale(0.5);
                                  transform: scale(0.5);
                        }
                        100% {
                          -webkit-transform: scale(1);
                                  transform: scale(1);
                        }
                      }
                      @keyframes scale-up-center {
                        0% {
                          -webkit-transform: scale(0.5);
                                  transform: scale(0.5);
                        }
                        100% {
                          -webkit-transform: scale(1);
                                  transform: scale(1);
                        }
                      }
                      
                      
                      .redirect-2 a{
                      
                      text-decoration: none;
                      color: white;
                      background-color: rgb(1, 69, 216);
                      padding: 10px;
                      border-radius: 5px;
                      width: 150px;
                      height: 25px;
                      }
                      </style>
                      
                      
                      
                      
                      
                      
                      
                      </body>
                      </html>
                        <?php

      }
      else{

        echo "Failed";
      }
    }


?>