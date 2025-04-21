<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ApiTestController extends BaseController {
    
    public function test(Request $request) {
        
        $success = true;
        return [
            'success' => $success,
            'data' => 'Test is Ok.'
        ];
    }
}