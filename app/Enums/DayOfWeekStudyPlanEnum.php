<?php

namespace App\Enums;

enum DayOfWeekStudyPlanEnum: string
{
    case SUNDAY = 'sunday';
    case MONDAY = 'monday';
    case TUESDAY = 'tuesday';
    case WEDNESDAY = 'wednesday';
    case THURSDAY = 'thursday';
    case FRIDAY = 'friday';
    case SATURDAY = 'saturday';

    public static function getLabels()
    {
        return [
            self::SUNDAY->value => 'Domingo',
            self::MONDAY->value => 'Segunda',
            self::TUESDAY->value => 'Terça',
            self::WEDNESDAY->value => 'Quarta',
            self::THURSDAY->value => 'Quinta',
            self::FRIDAY->value => 'Sexta',
            self::SATURDAY->value => 'Sábado',
        ];
    }

    public static function getValues()
    {
        return [
            self::SUNDAY->value,
            self::MONDAY->value,
            self::TUESDAY->value,
            self::WEDNESDAY->value,
            self::THURSDAY->value,
            self::FRIDAY->value,
            self::SATURDAY->value,
        ];
    }
}
