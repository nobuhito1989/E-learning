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
    <?php 
    session_start();
    if(!empty($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    ?>
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
           
            

            <input type="submit" value="submit" class="btn btn-primary" name="add">
        </form>
    </div>
</body>

</html>