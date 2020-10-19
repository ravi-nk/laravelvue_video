<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Http\Resources\ItemResource;
use Illuminate\Support\Facades\Storage;


class ItemController extends Controller
{
    

public function store(Request $request){
    $item = new Item;
    $item->image = $request->image;       

    // $item->image = $request->file('image')->getClientOriginalName();
    $request->image->move(public_path('images'));

    $item->title = $request->input('title');
    $item->des = $request->input('des');
    $item->video = $request->input('video');
    $item->year = $request->input('year');
    $item->type = $request->input('type');
    $item->duration = $request->input('duration');
    $item->quality = $request->input('quality');

    if($item->save()){
        return new ItemResource($item);
    }
    // $file = $request->file('img');
    // $filename = $file->getClientOriginalName();
    // $file->move($path, $filename);
    // $item->update(['image'=> $filename]);

    // $path = $request->file('file')->store('images');
    // return $path;
           
    

return $path;

}

}
