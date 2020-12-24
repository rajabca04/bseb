<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    
<div class="container mt-5">
    <div class="row">
        <div class="d-flex justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">

                    <h4 style="text-align: center;">Login your account.</h4>
                    <form action="" method="POST">
                        <div class="mb-4">
                        <label for="">Enter user id.</label>
                        <input type="text" name="email" placeholder="Enter email id." class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="">Enter password.</label>
                            <input type="password" name="password" placeholder="Enter your password." class="form-control">
                        </div>
                        <div class="mb-4 d-flex">
                            <input type="submit" name="send" class="form-control btn btn-success">
                        </div>

                    </form>

                    <?php


                    $connect = mysqli_connect('localhost','root','','bseb');
                    if(isset($_POST['send'])){
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        $query = mysqli_query($connect,"SELECT * FROM schools WHERE email='$email' AND password = '$password'");

                        $count = mysqli_num_rows($query);


                        // if($count>0){
                        //     $_SESSION('user') = $email;
                        // }

                        // else{
                        //     echo "<script>alert('user_name and password is incurrect')</script>";
                        // }
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
    
</body>
</html>


