<?php
    $fonts ="arial";
    $fontcolor = "#FC8C41";

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
        1.String
        2.Boolean
        3.Float
        4.Array
        5.Integer
        6.Object
        7.NULL
        8.Resource
        <hr>
        <form method="post" action="index.php">
        Name: <input type="text" name="username"><br><br/>
        <br/>
        <input type="submit" value="submit" >
        </form>

        <a href="text.php?msg=ahsan&text=ahmed"></a>
    <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            # code...
            $name=$_POST["username"];
            if (empty($name)) {
                echo "Enter Name";
                # code...
            }else {
                echo $name;
                
            }
        }
    
    
        

    ?>
    </section>

    <section class="footeroption">
        <h2>www.google.com</h2>
    </section>

</div>
</body>
</html>
