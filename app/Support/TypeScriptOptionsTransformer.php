<?php

namespace App\Support;

use Spatie\TypeScriptTransformer\Transformers\EnumTransformer;

final class TypeScriptOptionsTransformer extends EnumTransformer
{
    protected function toEnumValue(\ReflectionEnumBackedCase $case): string
    {
        if ($case->getEnum()->implementsInterface(HasOptions::class)) {
            return json_encode($case->getValue()->toOption());
        }

        $value = $case->getBackingValue();

        return \is_string($value) ? "'{$value}'" : "{$value}";
    }
}
