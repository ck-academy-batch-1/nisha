<h1></h1>
<?php
class Sea
{

    public $fish;
    function seafood()
    {
        $this->fishing;
    }
    function __construct($fishname)
    {
        $this->fishname=$fishname;
    }
}
class seaanimal extends Sea
{
    public $animal=true;
}
$ocean = new seaanimal('Goldfish,Starfish');
echo $ocean->fishname;
?>