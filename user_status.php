<?php 
    session_start();
    $msg='';
    function user_status(){
        $con=mysqli_connect('localhost','root','','test') or die("Can't connect to MySQL server'");
        $result=$con->query("SELECT * FROM user_login");
        if(mysqli_num_rows($result)>0){
            foreach($result as $list){
                
    
             $msg='   
                <tr><td></td></tr>
               <tr><td>'.$list['Username'].'</td></tr>
               <tr><td>'.$list['Password'].'</td></tr>
               <tr><td>'.$list['Status'].'</td></tr>';
                
            }
        }else{
            echo "No Reqord Found";
        }
    
    }

    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
        exit();
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
        <div class="row mt-5 ">
            <div class="col-lg-5 mx-auto">
                <table class="table">
                    <thead>
                        <tr>Sno.</tr>
                        <tr>User Name</tr>
                        <tr>Status</tr>
                    </thead>
                    <tbody>
                    <?php echo $msg; ?>
                    </tbody>
                </table>
          
            </div>
        </div>
    </div>
</body>
</html>
<?php }
?>