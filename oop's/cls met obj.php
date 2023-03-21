<h2>using class , methods and objects</h2>
<?php
class ck
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
    function set_course($course)
    {
         $this->course=$course;
    }
    function get_course()
    {
        return $this->course;
    }
}
$web = new ck();
$web->set_name('nisha');
$web->set_course('php');
echo "Name:".$web->get_name();
echo "<br>";
echo "Course:".$web->get_course();
?>