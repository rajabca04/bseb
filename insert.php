<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>BSEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
       <div class="navbar-brand mx-auto"><a href="" style="text-align:center; color:white; text-decoration:none;">Bihar school examination bord.</a></div>

       <ul class="navbar-nav">
           <li class="nav-item"><a href="signIn.php" class="nav-link"  style="float: right;">Signin</a></li>
           <li class="nav-item"><a href="signup.php" class="nav-link">Signup</a></li>
       </ul>
    </nav>

    <div class="container mt-5">
    
            <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                    <form action="" method="POST">
                        <!-- <div class="mb-3">
                        <label for="">school_id:</label>
                        <input type="number" name="school_id" placeholder="Enter your school_id." class="form-control">
                        </div> -->

                        <div class="mb-3">
                        <label for="">Name:</label>
                        <input type="text" name="name" placeholder="Enter student name." class="form-control">
                        </div>

                        <div class="mb-3">
                        <label for="">contect:</label>
                        <input type="text" name="contect" placeholder="Enter contact no." class="form-control">
                        </div>

                        <div class="mb-3">
                        <label for="">Address:</label>
                        <input type="text" name="add" placeholder="Enter Address."  class="form-control">
                        </div>

                        <div class="mb-3">
                        <label for="">City:</label>
                        <input type="text" name="city" placeholder="Enter City."  class="form-control">
                        </div>

                        <div class="mb-3">
                        <label for="">state:</label>
                        <input type="text" name="state" placeholder="Enter state name."  class="form-control">
                        </div>

                        <div class="mb-3">
                        <label for="">gender:</label>
                        <input type="text" name="gender" placeholder="Enter Gender."  class="form-control">
                        </div>

                        <div class="mb-3">
                        <label for="">Nationality:</label>
                        <input type="text" name="nationality" placeholder="Enter nationality."  class="form-control">
                        </div>

                        <div class="d-grid">
                            <input type="submit" name="send" value="[ SAVE ]" class="btn btn-success w-100%" class="form-control">
                        </div>

                    </form>
                                                
                                    <?php 
                                    
                                    if(isset($_POST['send'])){
                                        $name=$_POST['name'];
                                        $contact=$_POST['contect'];
                                        $add=$_POST['add'];
                                        $city=$_POST['city'];
                                        $state=$_POST['state'];
                                        $gander=$_POST['gender'];
                                        $nationality=$_POST['nationality'];

                                        //Connect to database.
                                        $connect=mysqli_connect('localhost','root','','bseb');

                                        // Insert data into database(bseb) table(students).
                                        $put = mysqli_query($connect,"INSERT INTO students(name,contact,address,city,state,gender,nationality) VALUE ('$name','$contact','$add','$city','$state','$gander','$nationality')");
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