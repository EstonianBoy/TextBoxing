<?php

$textStorage = [];

function add(string $title, string $text,array &$textStorage): void
{
    $textStorage[] = ['title' => $title, 'text' => $text];
    return;
};

function remove(int $textNumber,array &$textStorage): bool
{
    if (array_key_exists($textNumber, $textStorage)){
        unset($textStorage[$textNumber]);
        return true;
    }
    return false;
};

function edit(string $title, string $text, int $textNumber, array &$textStorage): bool
{
    if (array_key_exists($textNumber, $textStorage)){
        $textStorage[$textNumber]['title'] = $title;
        $textStorage[$textNumber]['text'] = $text;
        return true;
    }
    return false;
};

add("Hi", "Wassup", $textStorage);
add("Sup", "abba", $textStorage);

var_dump($textStorage);

remove(0, $textStorage);
remove(5, $textStorage);

var_dump($textStorage);

edit('Depth', 'Deep down', 1, $textStorage);
edit('Error', 'Is it!', 0, $textStorage);


var_dump($textStorage);

