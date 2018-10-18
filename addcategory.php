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
    
        <form method="post" action="CategoryAction.php">
            <div class="form-group">
                <label>Categoryname</label>
                <input type="text" name="c_name" id="categoryname" class="form-control">
            </div>

            <input type="submit" value="submit" class="btn btn-primary" name="add">
        </form>
    </div>
</body>

</html>