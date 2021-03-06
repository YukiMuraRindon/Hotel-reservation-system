<?php

namespace App\Http\Controllers\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateorder extends Controller
{
    public function updatestatus(Request $request)
    {
        $orderid = $request->input('orderid');
        DB::table('order')
            ->where('orderid', $orderid)
            ->update([
                'sentstatus' => "sending"
            ]);
        return [
            'error_code' => '0'
        ];
    }
    public function finishorder(Request $request){
        $orderid = $request->input('orderid');
        DB::table('order')
            ->where('orderid', $orderid)
            ->update([
                'sentstatus' => "finish"
            ]);
        return [
            'error_code' => '0'
        ];
    }
    //
}
