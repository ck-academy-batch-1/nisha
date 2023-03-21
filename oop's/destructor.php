<?php
class festival
{
    private $name;
    private $origin;
    function __construct($name,$origin)
    {
        $this->name=$name;
        $this->origin=$origin;
    }
    
    function __destruct()
    {
        echo "The festival is {$this->name} and the origin is {$this->origin}";
    }
}
$cul = new festival("Pongal","Tamilnadu");
?>