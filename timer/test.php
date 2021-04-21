<?php

$chessboard = array(
    1 => array(
        'a' => array(
            'piece' => 'rook',
            'color' => 'white',
        ),
        'b' => array(
            'piece' => 'knight',
            'color' => 'white',
        ),
    ),
    2 => array(
        'a' => array(
            'piece' => 'pawn',
            'color' => 'white',
        ),
        'b' => array(
            'piece' => 'pawn',
            'color' => 'white',
        ),
    ),
);

//figura na b3
$x = $chessboard[3]['b'];

$chessboard2 = array(
    'a1' => array(
        'piece' => 'rook',
        'color' => 'white',
    ),
    'a2' => array(
        'piece' => 'pawn',
        'color' => 'white',
    ),
    'b1' => array(
        'piece' => 'knight',
        'color' => 'white',
    ),
    'b2' => array(
        'piece' => 'pawn',
        'color' => 'white',
    ),
);

$x = $chessboard2['b3'];

?>