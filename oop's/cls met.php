<h2>using class and methods</h2>
<?php
class ckEdge
{
    public $name;
    public $course;
    function set_name($name)
    {
        $this->name=$name;
    }
    function get_name()
    {
        return $this->name;
    }
}
?>
