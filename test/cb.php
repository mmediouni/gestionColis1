<?php


function barcodeGenerator()
{
    return Rand(100000000,9999999999);
}

$bareCode = barcodeGenerator();