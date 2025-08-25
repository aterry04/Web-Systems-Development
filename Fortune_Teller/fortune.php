<?php
$relationships_array[] = "You will meet your future spouse this year";
$relationships_array[] = "You will have many close friends";
$relationships_array[] = "You will have a large family, but few close friends";

$money_array[] = "You will become very wealthy";
$money_array[] = "You will never have an excess of money";
$money_array[] = "You will find a lucrative endeavor";

$fame_array[] = "You will never gain fame and notoriety";
$fame_array[] = "You will be well known by those around you";
$fame_array[] = "You will be easily forgotten by strangers";

$relationships_random = random_int(0,count($relationships_array)-1);
$money_random = random_int(0,count($money_array)-1);
$fame_random = random_int(0,count($fame_array)-1);

$lucky_number = random_int(0,100);

$relationships_fortune = $relationships_array[$relationships_random];
$money_fortune = $money_array[$money_random];
$fame_fortune = $fame_array[$fame_random];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dial a Fortune</title>
    </head>
    <body> by Alexis Terry 
        <h1><?php echo $relationships_fortune; ?></h1> 
        <h1><?php echo $money_fortune; ?></h1> 
        <h1><?php echo $fame_fortune; ?></h1> 
        
        <h1>Lucky Number</h1>
        <?php
        for($i=0; $i<= $lucky_number; $i++) {
            echo $i . ' ';
        } 
        ?>
    </body>
</html>