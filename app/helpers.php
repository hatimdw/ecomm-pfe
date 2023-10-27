<?php



function format($price)
{

    return number_format((float)$price);
}

function productImage($path)
{
    return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) :asset('img/not-found.png');
}
