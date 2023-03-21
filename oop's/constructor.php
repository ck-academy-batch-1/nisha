<h1>Using Constructor</h1>
<?php
class bio
{
   function __construct($intro)
   {
    $this->letme=$intro;
   }
}
$Bio = new bio("Hi,this is Nisha from cuddalore");
echo "profile:". $Bio->letme;
?>