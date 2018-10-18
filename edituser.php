<?php 
   require_once("admin/User.php");

   $id = $_GET['id'];

   $user = New User;

   $row = $user -> getSpecificUser($id);
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
    <div class="container">
        <form action="UserAction.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?php echo $row['username']; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email']; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Submit" class="btn btn-primary" name="edit">
        </form>
    </div>

</body>

</html>