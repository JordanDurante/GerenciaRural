<?php

namespace App\Http\Controllers;

use App\Models\Cultura;
use Illuminate\Http\Request;

class CulturasController extends Controller
{
    public function index()
    {
        $culturas = Cultura::all();
        //dd($culturas);
        return view('culturas.index',['culturas'=>$culturas]);
    }

    public function create() 
    {
        return view('culturas.create');
    }

    public function store(Request $request){
        Cultura::create($request->all());
        return redirect()->route('culturas-index');
    }
    public function edit($id){
        $culturas=Cultura::where('id',$id)->first();
        if(!empty($culturas))
        {
            return view('culturas.edit',['culturas'=>$culturas]);        }
        else
        {
            return redirect()->route('culturas-index');
        }
    }
    public function update(Request $request, $id){
        $data = [
            "nome"=>$request->nome,
            "variedade"=>$request->variedade,
        ];
        Cultura::where('id',$id)->update($data);
        return redirect()->route('culturas-index');
    }
    public function destroy($id){
        Cultura::where('id',$id)->delete();
        return redirect()->route('culturas-index');
    }
}
