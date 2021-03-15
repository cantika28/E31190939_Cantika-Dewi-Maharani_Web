<?
class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct ($width, $height)
    {
        $this -> widh = $width;
        $this -> height = $height;
    }

    //calcArea calculates the area of rectangels
    public function valcArea(
        {
            return $this -> width * $this -> height;
        }
}

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo $circ -> calcArea();
echo $rect -> calcArea();
?>