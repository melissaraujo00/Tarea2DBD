<?php
namespace App\Enums;

enum LevelEnum: string
{
    case BEGINNER = 'Principiante';
    case BASIC = 'Basico';
    case INTERMEDIANTE = 'Intermedio';
    case ADVANCED = 'Avanzado';
    case PROFFESIONAL = 'Profesional';
    case MAESTER = 'Maestro';
}
