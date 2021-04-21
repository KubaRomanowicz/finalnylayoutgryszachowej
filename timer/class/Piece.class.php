<?php
class Piece
{
    private $color; // {black;white}
    private $type; // {pawn;rook;knight;bishop;queen;king}

    public function __construct(string $c, string $t)
    {
        $this->color = $c;
        $this->type = $t;
    }

    public function getHTML() : string
    {
        $c = $this->color;
        $t = $this->type;
        $html = "<img src=\"./img/$c/$t.png\">";
        return $html;
    }

    public function getType() : string {
        return $this->type;
    }

    public function getColor() : string {
        return $this->color;
    }
}
