<?php

namespace App\Http\Controllers;

use App\Models\Safra;
use Illuminate\Http\Request;

class SafrasController extends Controller
{
    public function index()
    {
        $safras = Safra::all();
        //dd($safras);
        return view('safras.index',['safras'=>$safras]);
    }

    public function create() 
    {
        return view('safras.create');
    }

    public function store(Request $request){
        Safra::create($request->all());
        return redirect()->route('safras-index');
    }
    public function edit($id){
        $safras=Safra::where('id',$id)->first();
        if(!empty($safras))
        {
            return view('safras.edit',['safras'=>$safras]);        }
        else
        {
            return redirect()->route('safras-index');
        }
    }
    public function update(Request $request, $id){
        $data = [
            "nome"=>$request->nome,
            "data_inicio"=>$request->data_inicio,
            "data_fim"=>$request->data_fim,
        ];
        Safra::where('id',$id)->update($data);
        return redirect()->route('safras-index');
    }
    public function destroy($id){
        Safra::where('id',$id)->delete();
        return redirect()->route('safras-index');
    }
}
