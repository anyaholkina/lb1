<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function phpInfo()
    {
        return response()->json([
            'php_version' => phpversion(),
            'php_info' => 'To display full phpinfo(), visit http://localhost/phpinfo'
        ]);
    }

    public function clientInfo(Request $request)
    {
        return response()->json([
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent()
        ]);
    }

    public function databaseInfo()
    {
        return response()->json([
            'database_connection' => env('DB_CONNECTION'),
            'database_name' => env('DB_DATABASE')
        ]);
    }
}