<?php

use App\Data\PilotData;
use App\PilotGrade;
use App\Support\DataOptionsTransformer;
use App\Support\HasOptions;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelData\Support\Transformation\TransformationContext;
use Spatie\LaravelData\Support\Transformation\TransformationContextFactory;

use function Hybridly\view;

Route::get('/', function () {
    return view('index', [
        'pilot' => PilotData::from([
            'name' => 'Jon Doe',
            'grade' => PilotGrade::CAPTAIN
        ])
    ]);
});
