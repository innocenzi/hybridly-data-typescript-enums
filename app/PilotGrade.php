<?php

namespace App;

use App\Support\HasOptions;

enum PilotGrade: string implements HasOptions
{
    case CAPTAIN = 'captain';
    case FIRST_OFFICER = 'first_officer';
    case PILOT = 'pilot';

    public function toHumanReadableString(): string
    {
        return match ($this) {
            static::FIRST_OFFICER => 'First officer',
            static::CAPTAIN => 'Captain',
            static::PILOT => 'Pilot',
        };
    }

    public function toOption(): array
    {
        return [
            'value' => $this->value,
            'label' => $this->toHumanReadableString(),
        ];
    }
}
