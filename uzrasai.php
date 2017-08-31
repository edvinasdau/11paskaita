
<!DOCTYPE html>
<html>
<head>
	<title>9 Paskaita (PHP)</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<pre>
<?php
  masyvai nurodomi :
   $masyvas1 = [99, "desimt", 55,14];
   $masyvas2 = array();

   $masyvas3 = [[5,8], [2,8], [1,7]];

   echo $masyvas3 [1][0]; //isves skaiciu 2;

   $user1 = ["vardas1" => "petras", "pavarde1" => "Petraitis", 91["sachmatai", "filmai"]];
   $user2 = ["vardas2", "pavarde2", 19];
   $user3 = ["vardas3", "pavarde3", 11]; 

   $users = [$user1, $user2, $user3]; 

   echo $users; // meta klaida;

   print_r ($users); //isveda i ekrana;

   echo $users[1][2];
 $array = ["name" => "value","name2" => "value2"]
    echo $users[0]["vardas1"];




foreach ($users as $user) {
   echo $user ['Vardas'] . "<br/>";
}

?>