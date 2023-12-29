//To create a class number with to numeric data member to perform basic arithmetic operation using member functions which will by access by object name obj1
<?php
class Number
{
 var $num1;
 var $num2;

 function setvalues($a,$b)
 {
    $this->num1=$a;
    $this->num2=$b;
 }
 function sum()
 {
    return ($this->num1+$this->num2);
    }
    }
    $obj=new Number();
    $obj->setvalues(5,6);
    echo "<br>";
    echo "Sum of two numbers is ".$obj->sum()."<br>";
    ?>