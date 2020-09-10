1. <?php
class Circle {
         public $radius;
 
         function __construct($radius)
         {
                   return $this->radius=$radius;
         }
 
         function perimeter_cirlce() {
                   return number_format($this->radius*2*M_PI,2);
         }
          
           function area_circle() {
                      return number_format($this->radius*$this->radius*M_PI,2);
           }
}
 
if(isset($argv[1])) {
         $number=new Circle($argv[1]);
         $checkValue=$argv[1];
 
         if(is_numeric($checkValue)&&!is_null($checkValue)&&($checkValue>0)) {
                   echo "is a number\n";
                   echo "Perimeter of circle is ",$number->perimeter_cirlce(),"\n";
                   echo "Area of circle is ",$number->perimeter_cirlce(),"\n";
         }else {
                   echo "Please try again!!!\n";
         }
}else
         echo "Please try again!! Input the value\n";
?>
