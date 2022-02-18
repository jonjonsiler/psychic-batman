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

// New code here:
function makeAnArrayOfObjects () {
  $objectsArray = array();
  $addObject = new stdClass();
  $addObject->name = "Same Name";
  for ($i = 1; $i<5; $i++) {
    $addObject->value = $i;
    $objectsArray[] = $addObject;  // <-- This is always passed by reference
  }
  return $objectsArray;
}

function makeAnArrayOfObjectsForReal () {
  $objectsArray = array();
  for ($i = 1; $i<5; $i++) {
    $addObject = new stdClass(); // <-- Must always create a new object, can't clone
    $addObject->name = "Same Name";
    $addObject->value = $i;
    $objectsArray[] = $addObject;
  }
  return $objectsArray;
}

echo json_encode(makeAnArrayOfObjects());
//[{"name":"Same Name","value":4},{"name":"Same Name","value":4},{"name":"Same Name","value":4},{"name":"Same Name","value":4}]

echo json_encode(makeAnArrayOfObjectsForReal());
//[{"name":"Same Name","value":1},{"name":"Same Name","value":2},{"name":"Same Name","value":3},{"name":"Same Name","value":4}]
?>
    We'll add some additional PHP code here just to see how difficult it is to manage the merge from git
        <?php
    for($i = 1; $i<=20; $i++){
        echo $i;
    }
        ?>
</body>
</html>
