<?php
    $fonts ="arial";
    $fontcolor = "#FC8C41";
    $errname=$erremail=$errwebsite=$errcomment=$errgender="";
    $name=$email=$website=$comment=$gender="";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        if (empty($_POST["name"])) {

            $errname="<span style='color:red'>Name is required</span>";
        }else {
            $name=validate($_POST["name"]);
            
        }
///////////////////////////////////////////////////
        if (empty($_POST["email"])) {

            $erremail="<span style='color:red'>Email is required</span>";
        }
        elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            # code...
            $erremail="<span style='color:red'>Email is invalied</span>";
        }
        else {
            $email=validate($_POST["email"]);
            
        }
////////////////////////////////////////////////
        if (empty($_POST["website"])) {

            $errwebsite="<span style='color:red'>Website is required</span>";        
        }
        elseif (!filter_var($_POST["website"], FILTER_VALIDATE_URL)) {
            # code...
            $errwebsite="<span style='color:red'>URL is invalied</span>";
        }
        else {
            $website=validate($_POST["website"]);
            
        }
////////////////////////////////////////////        
        if (empty($_POST["gender"])) {

            $errgender="<span style='color:red'>Gender is required</span>";
        }else {
            $gender=validate($_POST["gender"]);
            
        }

        $comment=validate($_REQUEST["comment"]);

        // echo $name."<br>";
        // echo $email."<br>";
        // echo $website."<br>";
        // echo $comment."<br>";
        // echo $gender."<br>";

    }
        function validate($data)
        {
            # code...
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Syntex</title>
    <style>
        .phpcoding{width: 900px; margin: 0 auto; background: #ddd;}
        .headeroption,.footeroption{background: #444; color: <?php echo "$fontcolor"?>; text-align: center;padding: 20px;}
        .headeroption h2, .footeroption h2{margin: 0;}
        .maincontent{min-height:400px;padding: 20px;}
    </style>
</head>
<body>
    <div class="phpcoding">

    <section class="headeroption">
        <h2>PHP Fundamental Training</h2>
    </section>

    <section class="maincontent">
        <hr>
         Form Validation
        <hr>
    <form action="" method="post">
        <table>
            <p style="color: red;">* required field</p>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" >*<?php echo $errname ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email">*<?php echo $erremail ?></td>
            </tr>
            <tr>
                <td>Website:</td>
                <td><input type="text" name="website">*<?php echo $errwebsite ?></td>
            </tr>
            <tr>
                <td>Comment:</td>
                <td><textarea name="comment" rows="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    *<?php echo $errgender ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit" name="button">    
                </td>
            </tr>
        </table>
    </form>

    </section>

    <section class="footeroption">
        <h2>www.google.com</h2>
    </section>

</div>
</body>
</html>
