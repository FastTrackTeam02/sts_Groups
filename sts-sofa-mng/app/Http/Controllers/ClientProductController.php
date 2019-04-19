<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $name = $request->input('name')?: "";
        $type = $request->input('type');
        $sort = $request->input('sort')?: "asc";


        $products = null;
        if($type) {
            $products = DB::table('tbl_sofas')
            ->where('name','like', '%'.$name.'%')
            ->where('type','=', $type)
            ->orderBy('giaban', $sort)->get();
        } else {
            $products = DB::table('tbl_sofas')
            ->where('name','like', '%'.$name.'%')
            ->orderBy('giaban', $sort)->get();
        }
        // $products = DB::table('tbl_sofas')
        //     ->where('name','like', '%'.$name.'%')
        //     ->whereNotNull('type','=', $type)->get();
        //$products = DB::select('select * from tbl_sofas');
        foreach ($products as &$product) {
            $product->files = json_decode($product->files);
        }
        return view('client.product.list', ['products' => $products, 'name' => $name, 'type' => $type, 'sort' => $sort]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->input('id')?: 0;
        $products = DB::select('select * from tbl_sofas where id='.$id);
        foreach ($products as &$product) {
            $product->files = json_decode($product->files);
        }

        $product_list_last = DB::table('tbl_sofas')->paginate(4);
        foreach ($product_list_last as &$product) {
            $product->files = json_decode($product->files);
        }

        $product_list_new = DB::table('tbl_sofas')->paginate(4);
        foreach ($product_list_new as &$product) {
            $product->files = json_decode($product->files);
        }

        return view('client.product.show', ['products' => $products, 'product_list_last' => $product_list_last, 'product_list_new' => $product_list_new]);
    }


}
