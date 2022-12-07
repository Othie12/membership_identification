<?php
session_start();
include "db.php";

function testInput($data){//function to remove backslashes, whitespaces and the like so that we get data that won't intoxicate our db
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = str_replace(' ', '_', $data);
    return $data;
    }


if(isset($_POST['regsub'])){
    $fname = testInput($_POST['fname']);
    $mname = testInput($_POST['mname']);
    $lname = testinput($_POST['lname']);
    $sex = testInput($_POST['gender']);
    $dob = $_POST['dob'];
    $church = testInput($_POST['chrch']);
    $country = testInput($_POST['country']);
    $post = testInput($_POST['post']);
    $tel = testInput($_POST['tel']);
    $pwd = testInput($_POST['pwd']);
    $pwdr = testInput($_POST['pwdr']);
    $email = testInput($_POST['email']);

    if($pwd == $pwdr || empty($pwd)){
    $stmt = $conn->prepare('INSERT INTO member(fname, mname, lname, dob, reg_date, sex, church, tel, email, nationality, post, pwd) VALUES(:fname, :mname, :lname, :dob, NOW(), :sex, :church, :tel, :email, :nationality, :post, :pwd)');
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':mname', $mname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':sex', $sex);
    $stmt->bindParam(':church', $church);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':nationality', $country);
    $stmt->bindParam(':post', $post);
    $stmt->bindParam(':pwd', $pwd);
    $stmt->execute();
    $l = $conn->lastInsertId();
    header("Location: register.php?error=inserted successfully ".$l.".");
    
    }elseif ($pwd != $pwdr && !empty($pwd)) {
        header("Location: register.php?error=The two passwords don't match");
    }else{
        header("Location: register.php?error=Look at your data and register again");
    }

    $conn = null;
}

if (isset($_POST['login'])) {
    $id = $_POST['id_no'];
    $pwd = $_POST['pwd'];

    $stmt = $conn->prepare('SELECT id, fname, mname, lname, sex, post FROM member WHERE id = :id AND pwd = :pwd');
    $stmt->execute([':id' => $id, ':pwd' => $pwd]);

    $row = $stmt->fetch();
    $count = $stmt->rowcount();
    if($count > 0){
        if($row['post'] == 'football'){
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['sex'] = $row['sex'];
            header("Location: register.php");
        }else{
            header("Location: login.php?error=You are not allowed this side");
        }
        
    }else{
        header("Location: login.php?error=Wrong Id number or password");
    }
}