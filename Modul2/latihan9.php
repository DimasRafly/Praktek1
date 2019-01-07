<?php
$arrwarna = array ("blue", "black", "yellow", "Green");

echo "menampilkan isi array dengan for : <br>";
for ($i=0; $i<count($arrwarna); $i++)
{
    echo "do you like <font color=$arrwarna[$i]>". $arrwarna[$i]
    ."</font> ?<br>";
}

echo "<br> menampilkan isi array  dengan foreach : <br>";
foreach ($arrwarna as $warna)
{
    echo "do you like <font color=$warna>".$warna."</font>?<br>";
}
?>