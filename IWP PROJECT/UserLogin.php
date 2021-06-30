<?php 
include('connection.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="UserLogin1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
     
    <div class="login-box" id="signinForm">
       <form method="POST" class="form">
        <h1>Login</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="UID">
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="Pass">
        </div>
        What do you want to build ?<br>
        <div class="Radio">
            
           <input type="radio" name="choice" value="CV">  CV <br>
            <input type="radio" name="choice" value="Portfolio"> Portfolio <br>
        </div>

        <input type="submit" class="btn" value="Sign-in" name="signin" onclick="signInValidation()">
        <p>New User ?</p>
        <input type="button" value="Sign Up" class="open-button" onclick="openForm()">
        </form>
    </div>

    <div class="form-popup" id="myForm">
        <form method="POST" class="form-container" onsubmit="return validate()">
            <h1>Sign-Up</h1>

            <label for="Fn"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="Fn" id="fname" required>

            <label for="Ln"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="Ln" id="lname" required>
            
            <label for="DOB"><b>Date of Birth</b></label>
            <input type="date" placeholder="Enter Date of Birth" name="DOB" required>
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="emaili" required>

            <label for="us"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="us" id="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="pwd" required>
            

            <button type="submit" class="btn" name="sub">Sign-Up</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
<?php
if(isset($_POST['sub']))
        {
            $FName=$_POST['Fn'];
            $LName=$_POST['Ln'];
            $DOB=$_POST['DOB'];
            $Email=$_POST['email'];
            $UserID=$_POST['us'];
            $Password=$_POST['psw'];

            $q=$db->prepare("INSERT INTO signup1 (FirstName,LastName,Email,DOB,UID,Pass)
                                VALUES(:Fn,:Ln,:email,:DOB,:us,:psw)");
            $q->bindValue('Fn',$FName);
            $q->bindValue('Ln',$LName);
            $q->bindValue('DOB',$DOB);
            $q->bindValue('email',$Email);
            $q->bindValue('us',$UserID);
            $q->bindValue('psw',$Password);
            if($q->execute())
            {
                echo"<script>alert('Info Inserted Successfully')</script>";
            }
            else
            {
                echo"<script>alert('Error')</script>";
            }
        }

    if(isset($_POST['signin']))
        {
          $un=$_POST['UID'];
          $ps=$_POST['Pass'];
          $type=$_POST['choice'];
                $q1=$db->prepare("SELECT *FROM signup1 WHERE UID='$un' && Pass='$ps'");
                 $q1->execute();
                 $res=$q1->fetchAll(PDO::FETCH_OBJ);
                 if($res)
                 {
                    
                    $q2=$db->prepare("INSERT INTO user_signin1 (UserID,Type) VALUES(:UID,:choice)");
                    $q2->bindValue('UID',$un);
                    $q2->bindValue('choice',$type);
                    if($q2->execute())
                    {
                      
                       if($type=='CV')
                          header("Location:CVCatalouge.php");
                       else
                         header("Location:portfolio_page.php");
                    }
                 }
                 else
                 {
                    echo "<script>alert('Wrong User')</script>";
                 }
            }   
           
            ?>
            <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }
            function signInValidation(){
                if(document.getElementsByName('UID').VALUES=="")
                    alert("Enter Username");
            }
            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
            function validate()
            {
                var fname=document.getElementById("fname").value;
                var reg_fname=/^[A-Z][a-zA-Z]{0,19}$/;
                if(!reg_fname.test(fname))
                {
                    alert("First name must start with Capital letter and have only english alphabets!!");
                    return false;
                }
                var lname=document.getElementById("lname").value;
                var reg_lname=/^[A-Z][a-zA-Z]{0,19}$/;
                if(!reg_lname.test(lname))
                {
                    alert("Last name must start with Capital letter and have only english alphabets!!");
                    return false;
                }
                var email=document.getElementById("emaili").value;
                var reg_email=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(!reg_email.test(email))
                {
                    alert("Invalid Email");
                    return false;
                }
                var password=document.getElementById("pwd").value;
                var reg_password=/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
                if(!reg_password.test(password))
                {
                    alert("Password must have min 8 letters, with at least a symbol, upper and lower case letters and a number");
                    return false;
                }

            }

            </script>
</body>

</html>