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
        <form method="post" action="CourseAction.php">
            <div class="form-group">
                <label>Course Title</label>
                <input type="text" name="course_title" id="coursetitle" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Course Detail</label>
                <input type="text" name="course_detail" id="coursedetail" class="form-control">
            </div>
           
            <div class="form-group">
                <label>Video Link</label>
                <input type="text" name="course_data" id="course_data" class="form-control">
            </div>
           

            <input type="submit" value="submit" class="btn btn-primary" name="addcourse">
        </form>
    </div>
</body>

</html>