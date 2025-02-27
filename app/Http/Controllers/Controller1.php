<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DTOs\PHPInfoDTO;
use App\DTOs\ClientInfoDTO;
use App\DTOs\DatabaseInfoDTO;

class Controller1 extends Controller
{
    public function phpInfo()
    {
        
        $phpInfoDTO = new PHPInfoDTO(phpversion(), 'To display full phpinfo(), visit http://localhost/phpinfo');
        
        return response()->json($phpInfoDTO);
    }

    public function clientInfo(Request $request)
    {

        $clientInfoDTO = new ClientInfoDTO($request->ip(), $request->userAgent());
        
        return response()->json($clientInfoDTO);
    }

    public function databaseInfo()
    {
        $databaseInfoDTO = new DatabaseInfoDTO(env('DB_CONNECTION'), env('DB_DATABASE'));
        
        return response()->json($databaseInfoDTO);
    }
}