
<?php

class GFG
{
    function multiply($var1)
    {
        return $var1;
    }

    function multiply($var1, $var2)
    {
        return $var1 * $var2;
    }
}

$ob = new GFG();
$ob->multiply(3,3,3);
?>