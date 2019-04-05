<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Sofa;
use Illuminate\Http\Request;

class SofaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $sofas = DB::select('select * from tbl_sofas');
        foreach ($sofas as &$sofa) {
            $sofa->files = json_decode($sofa->files);
        }
        return view('sofa.list', ['sofas' => $sofas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sofa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masofa = $request->input('masofa') ?: '';
        $name = $request->input('name') ?: '';
        $gia = $request->input('gia') ?: 0;
        $khuyenmai = $request->input('khuyenmai') ?: 0;
        $type = $request->input('type') ?: 1;
        $detail = $request->input('detail') ?: '';
        $paths = array();
        if($request->file('files') ) {
            foreach ($request->file('files') as $file) {
                array_push($paths, str_replace("public","storage",$file->store('public')));
            }
        }
        

        DB::table('tbl_sofas')->insert(
            ['masofa'   => $masofa,
            'name'      => $name,
            'gia'       => $gia,
            'khuyenmai' => $khuyenmai,
            'type'      => $type,
            'detail'      => $detail,
            'files'      => json_encode($paths)
            ]
        );

        return redirect()->route('sofa')->with('msg-success', 'thêm mới thành công!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sofa  $sofa
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->input('id')?: 0;
        $sofas = DB::select('select * from tbl_sofas where id='.$id);
        foreach ($sofas as &$sofa) {
            $sofa->files = json_decode($sofa->files);
        }
        return view('sofa.show', ['sofas' => $sofas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sofa  $sofa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->input('id')?: 0;
        $sofas = DB::select('select * from tbl_sofas where id='.$id);

        return view('sofa.edit', ['sofas' => $sofas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sofa  $sofa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id')?: 0;
        $masofa = $request->input('masofa') ?: '';
        $name = $request->input('name') ?: '';
        $gia = $request->input('gia') ?: 0;
        $khuyenmai = $request->input('khuyenmai') ?: 0;
        $type = $request->input('type') ?: 1;
        $detail = $request->input('detail') ?: '';

        DB::table('tbl_sofas')
        ->where('id', $id)
        ->update(
            ['masofa'   => $masofa,
            'name'      => $name,
            'gia'       => $gia,
            'khuyenmai' => $khuyenmai,
            'type'      => $type,
            'detail'      => $detail
            ]
        );

        /// update image
        $paths = array();
        if($request->file('files') ) {
            foreach ($request->file('files') as $file) {
                array_push($paths, str_replace("public","storage",$file->store('public')));
            }
            DB::table('tbl_sofas')
            ->where('id', $id)
            ->update(
                [
                'files'      => json_encode($paths)
                ]
            );
        }
        
        return redirect()->route('sofa')->with('msg-success', 'chỉnh sửa thành công!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sofa  $sofa
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->input('id')?: 0;
        DB::table('tbl_sofas')->where('id', '=', $id)->delete();

        return redirect()->route('sofa')->with('msg-warning', 'xóa thành công!!');
    }
}