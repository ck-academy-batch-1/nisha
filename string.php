<?php
class sentence
{
    function __construct($sen)
    {
        $this-> yourquote = $sen;
    }
}
$line = new sentence("Nothing is Impossible");
echo "Quote: ".$line->yourquote;
?>