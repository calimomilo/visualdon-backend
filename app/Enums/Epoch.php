<?php

namespace App\Enums;

enum Epoch: string
{
    case MEDIEVAL = 'medieval';
    case RENAISSANCE = 'renaissance';
    case BAROQUE = 'baroque';
    case CLASSICAL = 'classical';
    case EARLYROM = 'early_romantic';
    case ROMANTIC = 'romantic';
    case LATEROM = 'late_romantic';
    case TWENTIETH = '20th_century';
    case POSTWAR = 'post-war';
    case TWENTIFIRST = '21st_century';
}
