<?php
    include 'connection.php';

    if(isset($_COOKIE['cookie'])) {
        echo "<script>alert('You have already voted. Cannot vote again')</script>";
    }
    else {

        if (isset($_POST['aaa'])) {
            /*cookie start*/
            $name = 'cookie';
            $value = 'true';
            setcookie($name, $value, time() + (0.5*365*24*60*60));
            /*cookie end*/

            $cat1 = mysqli_query($connection,"update cat set cat1=cat1+1");

            if ($cat1) {
                echo "<script>alert('your vote has been casted to cat1')</script>";
            }
        }

        if (isset($_POST['bbb'])) {
            /*cookie start*/
            $name = 'cookie';
            $value = 'true';
            setcookie($name, $value, time() + (0.5*365*24*60*60));
            /*cookie end*/

            $cat2 = mysqli_query($connection,"update cat set cat2=cat2+1");

            if ($cat2) {
                echo "<script>alert('your vote has been casted to cat2')</script>";
            }
        }

        if (isset($_POST['ccc'])) {
            /*cookie start*/
            $name = 'cookie';
            $value = 'true';
            setcookie($name, $value, time() + (0.5*365*24*60*60));
            /*cookie end*/

            $cat3 = mysqli_query($connection,"update cat set cat3=cat3+1");

            if ($cat3) {
                echo "<script>alert('your vote has been casted to cat3')</script>";
            }
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>

    <div class="aa">
        <h2>Vote Now</h2>
        <form action="" method="post">
            <input type="submit" name="aaa" value="Cat1"/>
            <input type="submit" name="bbb" value="Cat2"/>
            <input type="submit" name="ccc" value="Cat3"/>
        </form>
    </div>
    
<?php include 'detail.php' ?>
    
</body>
</html>