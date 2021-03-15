class Circle implements Shape {
    ptivate $radius;

    public function __construct($radius)
    {
        $this -> radius = $radius;
    }

    //calcArea calculates the area of circles
    public function calcArea()
    {
        return $this -> radius * $this -> radius * pi();
    }
}