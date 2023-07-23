<?php
require 'connect.php';


if (isset($_POST["action"])) {
    if ($_POST["action"] == "insert") {
        insert();
    }
    elseif ($_POST["action"] == "update") {
        update();
    }
    elseif ($_POST["action"] == "delete") {
        delete();
    }
}


function insert(){
    global $conn;
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $enc_pass = password_hash($password, PASSWORD_BCRYPT);
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $gender = $_POST["gender"];
    $course=$_POST['course'];
    $imgName = $_FILES['img'];
    $tmpImgName = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmpImgName,"images/".$imgName);
    $status = 1;
    
    $qry = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `password`, `day`, `month`, `year`, `gender`, `course`, `image`, `status`) VALUES('$first_name', '$last_name', '$email', '$enc_pass', '$day', '$month', '$year', '$gender', '$course', '$imgName', '$status')";
    echo $qry;

    $run = mysqli_query($conn, $qry);
    if ($run == true) {
        
    window.open("show.php");
    }else {
        ?><script>
        alert('data not inserted');
    </script><?php
    }
}

function update(){
    global $conn;
    $id = $post['id'];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $enc_pass = password_hash($password, PASSWORD_BCRYPT);
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $gender = $_POST["gender"];
    $course=$_POST['course'];
    $imgName = $_FILES['img'];
    $tmpImgName = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmpImgName,"images/".$imgName);
    $status = 1;
    
    $qry = "UPDATE `user` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`day`='1',`month`='$month',`year`='$year',`gender`='$gender',`course`='$course',`image`='$imgName' WHERE `id`='$id')";
    $stmt = mysqli_prepare($conn, $qry);
    mysqli_stmt_bind_param($stmt, "ssssissssisi", $first_name, $last_name, $email, $enc_pass, $day, $month, $year, $gender, $course, $imgName, $id);
    $run = mysqli_stmt_execute($stmt);
    if ($run == true) {
        
    window.open("show.php");
    }else {
        ?><script>
        alert('data not inserted');
    </script><?php
    }
}

function delete()
{
    global $conn;
    $id = $_POST['id'];

    $qry = "DELETE FROM `user` WHERE `id`=?";
    $stmt = mysqli_prepare($conn, $qry);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    header("Location: show.php");
    exit();
}

?>