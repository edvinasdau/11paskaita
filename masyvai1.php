<pre>
<?php

$auto1 = ["Modelis" => "audi", "marke" => "100", "metai" => "1990"];
$auto2 = ["Modelis" => "bmw", "marke" => "318", "metai" => "1993"];
$auto3 = ["Modelis" => "chrysler", "marke" => "300", "metai" => "1999"];

$autos = [$auto1, $auto2, $auto3];


$phone1 = ["Modelis" => "motorola", "marke" => "kazkoks", "spalva" => "balta"];
$phone2 = ["Modelis" => "siemens", "marke" => "c45", "spalva" => "melyna"];
$phone3 = ["Modelis" => "samsung", "marke" => "S4", "spalva" => "pilka"];
$phone4 = ["Modelis" => "samsung", "marke" => "S7", "spalva" => "Juoda"];

$phones = [$phone1, $phone2, $phone3, $phone4];

/*

foreach ($autos as $auto) {
  echo $auto["Modelis"] . " (" . $auto['metai'] . ")<br/>"; foreach komanda sulauzo dideli masyva. po to galima issirinkti atskiras jo dalis ir atvaizduoti.
}

*/

print_r($autos);
print_r($phones);

?>

<table style="background-color: orange" width="50%">
  <tr>
    <td>Modelis</td>
    <td>marke</td>
    <td>metai</td>
  </tr>

<?php

foreach ($autos as $auto) {
  echo "<tr>
  <td>" . $auto['Modelis'] . "</td>
  <td>" . $auto['marke'] . "</td>
  <td>" . $auto['metai'] . "</td>
  </tr>" ;
}
  ?>
</table>

<table>
  <tr>
    <td>Modelis</td>
    <td>marke</td>
    <td>spalva</td>
  </tr>
 
<?php
/*pabaigt namie su telefonais*/


?>
</table>


