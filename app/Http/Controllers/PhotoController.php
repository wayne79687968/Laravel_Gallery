<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class PhotoController extends Controller
{
    public function index()
    {
        return view('admin.gallery',[
            'images' => Photo::all(),
        ]);
    }

    public function store()
    {
        return view('admin.gallery-create', [
            'images' => Photo::all(),
        ]);
    }

    public function upload(Request $request)
    {
        $image = $request->file('file');
        $imagePath = time() . '.' . $image->extension();
        Photo::create([
            'path' => 'uploads/' . $imagePath,
        ]);

        $image->storeAs('uploads', $imagePath, 'public');
        return response()->json(['success' => $imagePath]);
    }

    public function fetch()
    {
        $images = Photo::all();
        $output = '<div class="row">';
        foreach($images as $image)
        {
            $output .= '
            <div class="col-md-2" style="margin-bottom:16px;" align="center">
                <img src="' . asset("storage/" . $image->path) . '" class="img-thumbnail" height="175" style="height:175px;" />
                <button type="button" class="btn btn-link remove_image" id="' . $image->id .'">Remove</button>
            </div>
            ';
        }
        $output .= '</div>';
        return $output;
    }

    public function delete(Request $request)
    {
        if($image = Photo::findOrFail($request->get('name')))
        {
            \File::delete(public_path('storage/' . $image->path));
            Photo::findOrFail($request->get('name'))->delete();
        }
    }
}
