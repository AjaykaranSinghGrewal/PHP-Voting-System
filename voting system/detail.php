<?php
    include 'connection.php';
    
    $detail = mysqli_query($connection, "select * from cat");
    while ($row = mysqli_fetch_array($detail)) {
        $store1 = $row['cat1'];
        $store2 = $row['cat2'];
        $store3 = $row['cat3'];
        
        $add_all = $store1 + $store2 + $store3;
        
        $percentage_cat1 = round($store1*100/$add_all) . '%';
        $percentage_cat2 = round($store2*100/$add_all) . '%';
        $percentage_cat3 = round($store3*100/$add_all) . '%';
        
        echo "<div class='records'>
            <img src='img/cat1.jpg'>&nbsp;&nbsp;&nbsp; $store1 ($percentage_cat1)<br/>
            <img src='img/cat2.jpg'>&nbsp;&nbsp;&nbsp; $store2 ($percentage_cat2)<br/>
            <img src='img/cat3.jpg'>&nbsp;&nbsp;&nbsp; $store3 ($percentage_cat3)<br/>
        </div>";
    }
?>