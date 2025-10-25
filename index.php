<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pee aitch pee</title>
</head>
<body>
  <?php
  // These are 2 diff variables
  $language = "php";
  $Language = "PHP";
  $name = "Steven";
  
  // functions are case insensitive
  echo $language . "<br>";
  ECHO $name . " speaks " . $language . "<br>";

  ecHO $Language;
  echo $Language;

  //data types

  // 1. Integer 
  $a = 5;
  echo "Integer : " . $a . "<br>";

  // 2. Float 
  $a = 5.7;
  echo "Float :" . $a . "<br>";

  // 3. String
  $a = "stringggg";
  echo "String: " . $a . "<br>";

  // 4. Boolean
  $a = true;
  echo "Boolean: " . $a . "<br>";

  // 5. Arrays

  // Indexed Array
  $a = array(1, 2, "Three");

  echo "<pre>";
  print_R($a);
  var_dump($a);
  echo "</pre>";

  echo "First element: ";
  echo $a[0] . "<br>";

  // Associative Array (dict basically)
  $b = array("Name" => "Stuart", "Age" => "7", -6 => 7, null => "BOB");
  echo "<pre>";

  echo "Assosciative Array : ";
  print_r($a);
  echo "<br>";

  echo "Element: " . $b["Name"] . " Age: " . $b["Age"];
  echo $b[-6];

  echo "</pre>";  

  // 6. Objects
  class Video {
    public $title = "PHP in x minutes";
  }

  $my_video = new Video();
  echo $my_video->title. "<br>";

  // 7. Resource

  $fileHandle = fopen("hi.txt", "r");

  if (is_resource($fileHandle)){
    echo "fileHandle is a resource" . "<br>";
  }
  else {
    echo "no it isnt";
  }

  // 8. NULL
  $c = NULL;
  
  echo $c ?? "c is null";

  // Other 
  $ab = "ni hao";

  is_int($ab);
  is_float($ab);
  is_string($ab);
  is_bool($ab);
  is_array($ab);
  is_object($ab);

  // Switch Statement
  $number = 1;

  echo "<br>";

  switch ( $number ) {
    case 1:
      echo "ONE";
      break;
    case 2:
      echo "TWO";
      break;
    default:
      echo "NO SABO";
  }

  // While
  while ($number != 10) {
    echo "<br>" . $number;
    $number++;
  }

  // Do While
  $number = 1;

  do {
    print $number;
    $number++;
  } while ($number <= 10);

  // For Loop

  for ($i=1; $i<=3; $i++) {
    echo "<br> hello <br>" ;
  }

  // For each
  $a = array("hi", "hello", "GRRRRREEETINGS");

  foreach ($a as $word){
    echo $word . "<br>";
  }

  // Function
  function say($word) {
    echo $word . " was said!";
  }

  say("PESTO");

  ?>
</body>
</html>