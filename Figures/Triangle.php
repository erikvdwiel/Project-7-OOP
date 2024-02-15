<?php
//auteur Van der Wiel
class Triangle extends ScreenShape
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
                      <polygon points=\"" . ($this->width / 2) . "," . ($this->height - $this->height * 0.95) . "
                                        " . ($this->width - $this->width * 0.95) . "," . ($this->height * 0.95) . "
                                        " . ($this->width * 0.95) . "," . ($this->height * 0.95) . "\"
                            style=\"fill:$this->color\"/>
                  </svg>";
    }
}