<?php
namespace App\Enums;

enum LoanStatusEnum: string
{
    case PENDING = 'En préstamo';
    case RETURNED = 'Devuelto';
    case DELAYED = 'Retrasado';
    case LOST = 'Perdido';
}
