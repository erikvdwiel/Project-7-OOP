<?php
//auteur Van der Wiel
class Circle extends ScreenShape
{
    public function __construct(int $width, int $height, string $color)
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    public function draw(): string
    {
        return "<svg width=\"$this->width\" height=\"$this->height\" xmlns=\"http://www.w3.org/2000/svg\">
                      <ellipse rx=\"" . $this->width * 0.5 * 0.95 . "\" ry=\"" . $this->height * 0.5 * 0.95 . "\"
                               cx=\"" . $this->width * 0.5 . "\" cy=\"" . $this->height * 0.5 . "\" 
                               style=\"fill:$this->color\"/>
                  </svg>";
    }
}