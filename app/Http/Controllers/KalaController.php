<?php

namespace App\Http\Controllers;

use App\Models\Kala;
use App\Models\Stroe;
use Illuminate\Http\Request;

class KalaController extends Controller
{
    public function stores($id)
    {
        $store =new Stroe();
        $store->user_id=auth()->user()->id;
        $store->kala_id=$id;
        $store->number=1;
        $store->save();

    }
    public function del($id)
    {
        Stroe::deleted('id', $id);

    }

    public function newKala()
    {
        return view('new-kala');

    }

    public function store(Request $request)
    {
        $file_name = time() . "." . $request->image->extension();


        $kala = new Kala();
        $kala->name = $request->name;
        $kala->number = $request->number;
        $kala->price = $request->price;
        $kala->image = $file_name;
        $kala->category_parent = $request->category_parent;
        $kala->category = $request->grouping;
        $kala->save();
        $request->image->move(public_path('images'), $file_name);

    }

    public function allKala($parent, $category)
    {
        $kalas = Kala::where('category_parent', '=', $parent)->where('category', '=', $category)->get();

        return view('index-kala', ['kalas' => $kalas]);
    }

}
