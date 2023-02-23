<?php
/* Hex to RGB & RGBA - Color converter */
class ColorConverter {
    private $color, $red, $green, $blue;
    public function __construct( $colorCode = "" ) {
        $this->color = ltrim( $colorCode, "#" );
        $this->parsingColor();
    }
    public function get_color() {
        return $this->color;
    }
    public function set_color( $colorCode ) {
        $this->color = ltrim( $colorCode, "#" );
    }
    protected function parsingColor() {
        if ( $this->color ) {
            list( $this->red, $this->green, $this->blue ) = sscanf( $this->color, "%02x%02x%02x" );
        } else {
            list( $this->red, $this->green, $this->blue ) = [0, 0, 0];
        }
    }
    public function rgb() {
        return "rgb({$this->red}, {$this->green}, {$this->blue})";
    }
    public function rgba() {
        return "rgb({$this->red}, {$this->green}, {$this->blue},1)";
    }
    public function getRedColor() {
        return $this->red;
    }
    public function getGreenColor() {
        return $this->green;
    }
    public function getBlueColor() {
        return $this->blue;
    }
}

$rgba = new ColorConverter( "#ff00ff" );

echo "red = {$rgba->getRedColor()}";
echo "\n";
echo "red = {$rgba->getGreenColor()}";
echo "\n";
echo "red = {$rgba->getBlueColor()}";
echo "\n";
echo $rgba->rgb();
echo "\n";
echo $rgba->rgba();
