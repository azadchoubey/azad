<?php

    if(isset($_POST['login'])){
        $user=$_POST['userid'];
        $password=$_POST['password'];
        $con=mysqli_connect('localhost','root','','test') or die("Can't connect to MySQL server'");
        $query=$con->query("SELECT * FROM user_login WHERE Username='$user'  and Password='$password'");
        if($query){
            session_start();
            $_SESSION['username']= $user;
            header("Location:user_status.php");
        }else{
                echo mysqli_error($con);
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color:aquamarine;
        }
.col-lg-5{
   margin-top: 10%;
   background-color :WHITE;
   border: 1px solid black;
}
.form-control{
    border: 1px solid black;
}

    </style>
</head> 
<body>
    <div class="container mt-5">
        <div class="row mt-5 ">
            <div class="col-lg-5 mx-auto">
                <form method="post" action="user_status.php" class="mt-5 mx-4">
                    <input type="text" class="form-control mt-3" required name="userid" placeholder="Enter User Id ">
                    <input type="password" class="form-control mt-3" required name="password" placeholder="Enter Password">
                    <input type="submit" class="btn btn-success mt-3 mb-4" value="Login"name="login" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>