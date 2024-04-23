<?php

namespace App\Support;

use Hybridly\Support\Hybridable;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Transformation\TransformationContextFactory;

abstract class HybridData extends Data implements Hybridable
{
    public function toHybridArray(): array
    {
        return $this->transform(
            TransformationContextFactory::create()
                ->withTransformer(HasOptions::class, DataOptionsTransformer::class)
        );
    }
}
