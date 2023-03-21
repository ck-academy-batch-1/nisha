<h1>Using Traits</h1>
<?php
trait message1
{
    public function msg()
    {
        echo "OOP is function";
    }
}
class welcome
{
    use message1;
}
$obj = new welcome();
$obj->msg();
?>