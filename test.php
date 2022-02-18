<html>
    <head>
    <title>This is the title.</title>
    </head>
    <body><p>
<?php 
$v = "original items";
echo $v;

$i ="another item";
echo $i;

#this is the last item
$p = "Another item";
echo $p;

// Guess what heres some php that i did in a working branch
$are_you_sure = true;

?>
    We'll add some additional PHP code here just to see how difficult it is to manage the merge from git
        <?php
if ($are_you_sure):
    for($i = 1; $i<=20; $i++){
        echo $i;
    }
endif;
        ?>
</body>
</html>
