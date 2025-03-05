<?php

/** @var string $params[0] */
$current = $params[0];

/** @var array $data */
/** @var array $chapters */
$chapters = $data['chapters'];

$stack = [
    0 => null,
    1 => null,
    2 => null,
];

foreach ($chapters as $chapter => $title) {
    array_push($stack, $chapter);
    array_shift($stack);

    if ($stack[1] === $current) break;
}

if ($stack[2] === $current) {
    $stack = [
        0 => $stack[1],
        1 => $stack[2],
        2 => null,
    ];
}


echo '<header>';

if (!is_null($stack[0])) {
    echo '<a href="/chapter/'.$stack[0].'">'.$stack[0].'. '.$chapters[$stack[0]].'</a>';
}

echo '<a href="/chapters">Оглавление</a>';

if (!is_null($stack[2])) {
    echo '<a href="/chapter/'.$stack[2].'">'.$stack[2].'. '.$chapters[$stack[2]].'</a>';
}

echo '</header>';

echo '<h1>' . $stack[1] . '. ' . $chapters[$stack[1]].'</h1>';