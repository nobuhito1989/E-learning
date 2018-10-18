<?php 
require_once("admin/User.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Form</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="AdminFormUsers.php">Users</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Courses</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
        <table class="container">
            <thead>
                <tr>
                    <th>UserID</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php 

                 $users = new User;

                 //excute the query
                 $result = $users->getUsers();

                 foreach($result as $key => $row){
                    $id = $row['user_id'];
                    echo "<tr>";
                    echo "<td>" .$row['user_id'] . "</td>";
                    echo "<td>" .$row['username'] . "</td>";
                    echo "<td>" .$row['email'] . "</td>";
                    echo "<td><a href='edituser.php?id=$id' class='btn btn-info btn-sm'>Edit</a></td>";
                    echo "<td><a href='UserAction.php?actiontype=delete&id=$id' class='btn btn-danger btn-sm'>Delete</a></td>";
                    echo "</tr>"; 
 
                     }
                ?>
            </tbody>

        </table>
        <a href="#" data-toggle="modal" data-target="#register">Add User</a>

    </div>

    <div class="modal fade" id="register" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="demoModalTitle">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container">

                        <form method="post" action="UserAction.php">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <input type="submit" value="SUBMIT" class="btn btn-primary" name="add"> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>     

                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>




    


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>

    
</body>


</html>