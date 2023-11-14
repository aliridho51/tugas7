<?php
$a = 1;
while ($a <= 3){
    $b = 1;
    while ($b <=10){
    $kali = $a * $b;
    echo "<table>";
    echo "<td><tr>$a</tr> <tr> x </tr> <tr>$b</tr> = </tr> <tr>$kali</tr></td>";
    echo "</table>";
    $b++;
    }
}
?>