<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 style="text-align:center;">Create account.</h4>
                            <form action="" method="POST">
                            <div class="mb-3">
                            <label for="">Title:</label>
                            <input type="text" name="title" placeholder="Enter yout title." class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">Email:</label>
                                <input type="text" name="email" placeholder="Enter your email Id." class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">password:</label>
                                <input type="password" name="password" placeholder="Enter strong password." class="form-control">
                            </div>

                            <div class="mb-3 d-grid">
                                <input type="submit" name="send" value="Create" class="btn btn-success" class="form-control">
                            </div>
                            </form>

                            <?php 

                                if(isset($_POST['send'])){
                                    $title = $_POST['title'];
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];

                                    $connect = mysqli_connect('localhost','root','','bseb');

                                    $puts = mysqli_query($connect,"INSERT INTO schools(title,email,password) VALUE ('$title','$email','$password')");
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