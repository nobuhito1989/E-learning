<?php 
require_once("admin/Category.php");
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
        <li><a href="AdminCategory.php">Categories</a></li>
        <li><a href="courseform.php">Courses</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
        <table class="container">
            <thead>
                <tr>
                    <th>CategoryID</th>
                    <th>CategoryName</th>
                </tr>
            </thead>

            <tbody>
                <?php 

                 $category = new Category;

                 //excute the query
                 $result = $category->getCategory();

                 foreach($result as $key => $row){
                    $id = $row['category_id'];
                    echo "<tr>";
                    echo "<td>" .$row['category_id'] . "</td>";
                    echo "<td>" .$row['c_name'] . "</td>";
                    echo "<td><a href='admin/CategoryAction.php?actiontype=delete&id=$id' class='btn btn-danger btn-sm'>Delete</a></td>";
                    echo "</tr>"; 
 
                     }
                ?>
            </tbody>


        </table>
                <a href='addcategory.php?' class='btn btn-info btn-sm'>Add Category</a>
    
        

    </div>