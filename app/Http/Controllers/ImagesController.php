<?php

namespace App\Http\Controllers;

use App\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ImagesController extends Controller
{
    public function upload()
    {
        return view('imagesView.upload');
    }

    public function store(Request $request)
    {
        $image = new Image();

        $this->validate($request, [
           'title' => 'required',
            'image' => 'required'
        ]);
        $image->title = $request->title;
        $image->description = $request->description;

        if($request->hasFile('image')){
            $file = Input::file('image');
            dd($file);

            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-'.$file->getClientOriginalName();
            $image->filepath = $name;
            $file->move(public_path().'/images/'.$name);
        }
        $image->save();
        $success = 'Image uploaded successfully';
        return view('imagesView.upload', compact('success'));
    }

    public function show()
    {
        $images = Image::all();
        return view('imagesView.show', compact('images'));

    }
}
