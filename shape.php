<h1>Area of Shapes</h1>
<?php
class rectangle
{
    private $lenght;
    private $width;

    function __construct($lenght, $width)
    {
        $this->length = $lenght;
        $this->width =$width;
    }
    function getshape()
    {
        return $this->length * $this->width;
    }
}
$rect = new rectangle(10,5);
echo "Area of rectangle:" . $rect->getshape();
?><br><br>
<?php
class triangle
{
    private $base;
    private $height;

    function __construct($base, $height)
    {
        $this->base = $base;
        $this->height =$height;
    }
    function getshape()
    {
        return 0.5* $this->base * $this->height;
    }
}
$tri = new triangle(10,5);
echo "Area of triangle:" . $tri->getshape();
?><br><br>
<?php
class square
{
    private $side;

    function __construct($side)
    {
        $this->side = $side;
    }
    function getshape()
    {
        return $this->side * $this->side;
    }
}
$sqr = new square(10);
echo "Area of square:" . $rect->getshape();
?><br><br>
<?php
class circle
{
    private $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }
    function getshape()
    {
        return pi() * $this->radius * $this->radius;
    }
}
$cr = new circle(10);
echo "Area of circle:" . $rect->getshape();
?>