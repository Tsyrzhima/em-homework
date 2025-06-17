<?php

namespace App\Http\Controllers;

use App\Jobs\QueueJob;
use Illuminate\Http\Request;

class QueueTestController extends Controller
{
    public function dispatchJob()
    {
        QueueJob::dispatch('Тестовое сообщение из контроллера');
        return response()->json(['message' => 'Задача отправлена']);
    }
}
