<?php
$Numero=8.0;
echo "Divisiones del numero ".$Numero.": ";
for ($i=1;$i<=$Numero;$i++){
    $Residuo=$Numero % $i;
    if ($Residuo==0)
    {
     echo "[".$i."]";
    }
}
?>