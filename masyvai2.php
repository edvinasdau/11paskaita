<pre>
<?php

$sudetis = ["Jautiena" => 250, "Pupeles" => 500, "Vanduo" => 500, "Pomidorai" => 200, "Paprika" => 100];

print_r($sudetis);
    $suma = 0;
    foreach ($sudetis as $ing => $kiekis) {
       echo $ing . ": " . $kiekis . "  " . "<br/>"; 
       $suma += $kiekis;
    }

echo $suma;

checkWater($troskinys){
    //patikrinti ar vandens ne maziau nei
}


?>



<table style="background-color: yellow; border: solid black 1px; width: 50%; ">
    <tr>
        <th>Jautiena</th>
        <th>Pupeles</th>
        <th>Vanduo</th>
        <th>Pomidorai</th>
        <th>Paprika</th>
    </tr>
    <tr>
        <td>250</td>
        <td>500</td>
        <td>500</td>
        <td>200</td>
        <td>100</td>
    </tr>
</table>
<? 