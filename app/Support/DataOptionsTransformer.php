<?php

namespace App\Support;

use Spatie\LaravelData\Support\DataProperty;
use Spatie\LaravelData\Support\Transformation\TransformationContext;
use Spatie\LaravelData\Transformers\Transformer;

final class DataOptionsTransformer implements Transformer
{
    public function transform(DataProperty $property, mixed $value, TransformationContext $context): mixed
    {
        if (!$value instanceof HasOptions) {
            return null;
        }

        return $value->toOption();
    }
}
