<?php

namespace App\Data;

use App\PilotGrade;
use App\Support\HybridData;

final class PilotData extends HybridData
{
    public function __construct(
        public readonly string $name,
        public readonly PilotGrade $grade,
    ) {
    }
}
