<?php

namespace Iroid\LocalTimezone\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LocalTimezoneController extends Controller
{
    public function setTimezone(Request $request)
    {        
        session_start();
        $timezone = $request->input('timezone');
        if($timezone=='Asia/Calcutta'){
            $timezone='Asia/Kolkata';
        }
        $_SESSION['usertimezone'] = $timezone;
        return response()->json(['message' => 'Timezone set successfully']);
    }
}
