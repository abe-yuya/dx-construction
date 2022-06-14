<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExecController extends Controller
{
    public function exec (Request $request) {
        $path = "../app/Python/hello.py";
        $command = "python3 " . $path;
        Log::debug($command);
        exec($command, $output);
        dd($output);
    }
}
