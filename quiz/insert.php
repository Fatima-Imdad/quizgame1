<?php
    // include_once 'database.php';
    session_start();
    // if(!(isset($_SESSION['email'])))
    // {
    //     header("location:login.php");
    // }
    // else
    // {
    //     $name = $_SESSION['name'];
    //     $email = $_SESSION['email'];
    //     include_once 'database.php';
    // }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    body {
                width: 100%;
                background: url(image/quiz.jpg) ;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                
    }
</style>
</head>
<body>

<ul class="nav navbar-nav navbar-right">
                    <li <?php echo''; ?> > <a href="logout1.php?q=dashboard.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
                </ul>

 <?php



if(isset($_POST['sub']))
{
        
        $question = $_POST["question"];
        $option1=$_POST["option1"];
        $option2 = $_POST["option2"];
        $option3 = $_POST["option3"];
        $correctanswer= $_POST["correctanswer"];
        
        

        $query=" insert into insert values(id,'$question','$option1','$option2','$option3','$correctanswer') ";
    
        mysqli_query($conn,$query);
    
        echo '<div class="alert alert-success"> Data has been successfully inserted...</div>';
     
        header("location:login.php");
    if($conn)
    {
        echo 'connected';
    }
    else
    {
        echo 'Invalid';
    }

}


?>

<form action="insert.php"  method="post">

<div class="container">

<h2 style="color:white">Quiz Question and Answer</h2>
</div>
<div class="container">



<div class="row pt-3">
    <div style="color:white" class="col-sm-2 ">Question</div>
    <div class="col-sm-3"> <input type="text" name="question" class="form-control" required/> </div>
</div>

<div class="row pt-3">
    <div style="color:white" class="col-sm-2 ">Option1</div>
    <div class="col-sm-3"> <input type="text" name="option1" class="form-control" required/> </div>
</div>
<div class="row pt-3">
    <div  style="color:white"class="col-sm-2 ">Option2</div>
    <div class="col-sm-3"> <input type="text" name="option2" class="form-control" required/> </div>
</div>
<div class="row pt-3">
    <div  style="color:white" class="col-sm-2 ">Option3</div>
    <div class="col-sm-3"> <input type="text" name="option3" class="form-control" required/> </div>
</div>
<div class="row pt-3">
    <div style="color:white" class="col-sm-2 ">Correctanswer</div>
    <div class="col-sm-3"> <input type="text" name="correctanswer" class="form-control" required/> </div>
</div>



<div class="row pt-3">
    <div class="col-sm-2 "></div>
    <div class="col-sm-3"> <input type="reset" class="btn btn-info" /> <input type="submit" name="sub" class="btn btn-success"/></div>
</div>

</div>

</form> 







</body>
</html>



