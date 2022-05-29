<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Height;
use Illuminate\Http\Request;

class HeightController extends Controller
{
    // index Method

    public function height()
    {
        $living = Height::all();
        return view('admin.height.index',compact('living'));
    }


    // Profile For Add

    public function heightAdd()
    {
        return view('admin.height.create');
    }

    //storing Data

    public function heightAddProcess(Request $request)
    {
        $request->validate([
            'height' => 'required'
        ]);

        $data = new Height;
        $data->height = $request->input('height');
        $data->save();
        return redirect('/admin/height')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function heightedit($id)
    {
        $editReligion = Height::findOrFail($id);

        return view('admin.height.edit',compact('editReligion'));



    }


    // Updating Data

    public function heightUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'height' => 'required'
        ]);

        Height::whereId($id)->update($data);

        return redirect('/admin/height')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function heightdelete($id)
    {
        $data = Height::findorFail($id);
        $data->delete();
        return redirect('/admin/height')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
