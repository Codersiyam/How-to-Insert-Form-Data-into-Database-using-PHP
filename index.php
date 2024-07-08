<?php
$dbcon=mysqli_connect("localhost","root","","ashraful");
if($dbcon==false){
    die("connetion Error .mysqil_connect_error()");
}
if(isset($_POST['reigster'])){
    $sname=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $compony_name=$_POST['compony_name'];
    $password=$_POST['password'];
}
$quruy=mysqli_query($dbcon, "INSERT INTO `register`(`sname`, `username`, `email`, `mobile`, `compony_name`, `password`) VALUES ('$sname','$username','$email','$mobile','$compony_name','$password')");
if($quruy){
    echo "<script>alert('Data Inserted Successfully....')</script>";
}else{
    echo "<script>alert('Some Error....?')</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="image/Coder Siyam (1).png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="logo-section">
                    <h1 class="logo">Register Form</h1>
                </div>
                <form method="post">
                   
                  <div class="form-items">
                     <!-- -----form-items-number-01-start----- -->
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input class="form-text" type="text" name="name" placeholder="Name..." required></div>
                     <!-- -----form-items-number-01-end----- -->

                       <!-- -----form-items-number-02-start----- -->
                  <div class="form-items">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input class="form-text" type="text" name="username" placeholder="Username..." required>
                  </div>
                   <!-- -----form-items-number-02-end----- -->

                     <!-- -----form-items-number-03-start----- -->
                  <div class="form-items">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input class="form-text" type="email" name="email" placeholder="Email..." required>
                  </div>
                   <!-- -----form-items-number-03-end----- -->

                    <!-- -----form-items-number-04-start----- -->
                  <div class="form-items">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <input class="form-text" type="tel" name="mobile" placeholder="Mobile Number..." required>
                  </div>
                    <!-- -----form-items-number-04-end----- -->

                    <!-- -----form-items-number-05-start----- -->
                  <div class="form-items">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <input class="form-text" type="text" name="compony_name" placeholder="Compony Name..." required>
                  </div>
                    <!-- -----form-items-number-05-end----- -->

                    <!-- -----form-items-number-06-start----- -->
                  <div class="form-items">
                    <i class="fa fa-key" aria-hidden="true"></i>
                    <input class="form-text" type="password" name="password" placeholder="password..." required>
                  </div>
                    <!-- -----form-items-number-06-end----- -->

                    <!-- -----form-items-number-07-start----- -->

                    <!-- -----form-button-start----- -->
                 <div class="re-btn">
                    <input type="submit" name="reigster" value="Submit" class="button">
                 </div>
                    <!-- -----form-button-end----- -->
                     
                    <!-- -----form-loin-page-start----- -->
                  <div class="login-page">
                    Already Have an acount?<a class="login-link" href="login.html">Login</a>
                  </div>
                    <!-- -----form-loin-page-end----- -->

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>