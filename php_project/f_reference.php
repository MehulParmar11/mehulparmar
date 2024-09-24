<?php
function a1(&$x)
{
    $x.="hello how are you?";
}
$s1="GM<br>";
a1($s1);
echo $s1 ;

?>