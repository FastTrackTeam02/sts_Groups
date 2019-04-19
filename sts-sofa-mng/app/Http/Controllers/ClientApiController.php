<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customerRegister(Request $request)
    {
        $tel = $request->input('tel')?: "";

        DB::table('tbl_customers')->insert(
            ['tel'   => $tel,
            'created_at' => now()
            ]
        );

        return redirect()->route('client_product')->with('msg-success-customer-register', 'Đã đăng ký thành công!!');

    }


}