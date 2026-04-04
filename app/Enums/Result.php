<?php

namespace App\Enums;

enum Result: string
{
    case UNKNOWN = 'unknown';
    case KNOWN = 'known';
    case BTFALSE = 'bt-false';
    case BTCOMP = 'bt-composer';
    case BTTITLE = 'bt-title';
    case BTBOTH = 'bt-both';
}
