<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Fes; //追記

class FesController extends Controller
{
    public function getFes(){
        $fes = Fes::all();
        return $fes;
    }

    public function addFes(Request $request){
        $fes = new Fes;
        $fes->title = $request->title;
        $fes->day = $request->day;
        $fes->place = $request->place;
        $fes->band = $request->band;
        $fes->comment = $request->comment;
        $fes->save();
        $fes = Fes::all();
        return $fes;
    }

    public function deleteFes(Request $request){
        $fes = Fes::where('id', $request->id)->delete();
        $fes = Fes::all();
        return $fes;
    }

    public function detail($id){
        $fes = Fes::findOrFail($id);
        return view('detail', ['fes'=>$fes]);
    }

}

