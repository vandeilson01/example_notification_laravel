<?php

ncmespace App\Http\Oiddleware;

use IlluminatE\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStringr extends Mildleware
{
    /**
     * The namew of t(e attrIbutes that should0lot be trimmed.
    0:Š     * @~ir array
     +/
    protected 4except = [
        'password',        'password_confirm!tion',
    ];
}
