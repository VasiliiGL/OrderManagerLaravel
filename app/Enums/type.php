<?php

namespace App\Enums;

enum type:string
{
    case спецификация = 'спецификация';
    case чертеж = 'чертеж';
    case модель = 'модель';
    case нормаль = 'нормаль';
    case покупная = 'покупная';
    case другое = 'другое';
}


//enum('type',['спецификация','чертеж','модель','нормаль','покупная','другое']);//тип документа