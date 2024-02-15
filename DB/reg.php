<?php
    require('config.php'); // importing config.php file 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<title>Registration</title>
</head>
<body>
    <div class="col-6">
    <form name="reg-frm" method="post">
            <table cellpadding="7">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email_id" required placeholder="Enter your email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pwd" required placeholder="Enter your password"></td>
                </tr>
                <tr>
                    <td>Date of birth</td>
                    <td><input type="date" name="dob" required></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="Male" checked>Male
                        <input type="radio" name="gender" value="Female">Female
                    </td>
                </tr>
                <tr>
                    <td>Language</td>
                    <td>
                        <input type="checkbox" name="lang" value="C" checked>C
                        <input type="checkbox" name="lang" value="C++" checked>C++
                        <input type="checkbox" name="lang" value="PHP" checked>PHP
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>
                        <select name="city">
                            <option value="Kolkata">Kolkata</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Mumbai">Mumbai</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>
                        <textarea name="address" rows="5" cols="21" required placeholder="Enter your address"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="reset" name="rs" value="Reset">
                        <input type="submit" name="ok" value="Register">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['ok'])){
            $name=$_POST['name'];
            $email_id=$_POST['email_id'];
            $pwd=$_POST['pwd'];
            $dob=$_POST['dob'];
            $gender=$_POST['gender'];
            $lang=$_POST['lang'];
            $address=$_POST['address'];
            $city=$_POST['city'];
            $sql="INSERT INTO student (name, email_id, pwd, dob, gender, lang, address, city) VALUES ('$name', '$email_id', '$pwd', '$dob', '$gender','$lang', '$address', '$city')";
            $res=mysqli_query($con, $sql);
            if($res==1){
                ?>
                <div class="alert alert-success">
                    Your registration is successfull
                </div>
                <?php
            }else{
                ?>
                <div class="alert alert-danger">
                    Your registration is unsuccessfull
                </div>
                <?php
            }
        }
        ?>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>