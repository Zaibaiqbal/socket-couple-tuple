<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function index()
    {
        $profile = Profile::where('user_id',Auth::id())->first();
        return view('user_panel.profile.upload-img',get_defined_vars());
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'images' => 'required|array|max:4',
            'images.*' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ]);
        $form_collect = $request->input();

        $form_collect['images']  = $request->images;
        // dd($request->images);
        $image = new Image;
        $image = $image->storeImages($form_collect);

        // if($request->hasfile('images'))
        // {
        //     foreach($request->file('images') as $key => $file)
        //     {
        //         $insert[$key]['user_id']    = $form_collect['profile_id'];
        //         $insert[$key]['profile_id']    = $form_collect['profile_id'];
        //         $path = $file->store('public/images');
        //         $name = $file->getClientOriginalName();
        //         $insert[$key]['name'] = $name;
        //         $insert[$key]['path'] = $path;
        //     }
        // }
        // Image::insert($insert);
        return redirect()->back()->with('status', 'Multiple Image has been uploaded into db and storage directory');
    }

    // User Gallary

    public function gallery(Request $request)
    {
        $images = Image::where('user_id',Auth::id())->get();
        return view('user_panel.gallery.index',get_defined_vars());
    }

}
