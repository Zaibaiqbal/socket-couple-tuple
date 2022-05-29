<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Religion;
use Illuminate\Http\Request;

class Religioncontroller extends Controller
{
    // index Method

    public function religion()
    {
        $religion = Religion::all();
        return view('admin.religion.index',compact('religion'));
    }


    // Profile For Add

    public function religionAdd()
    {
        return view('admin.religion.create');
    }

    //storing Data

    public function religionAddProcess(Request $request)
    {
        $request->validate([
            'religion' => 'required'
        ]);

        $data = new Religion;
        $data->religion = $request->input('religion');
        $data->save();
        return redirect('/admin/religion')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function religionedit($id)
    {
        $editReligion = Religion::findOrFail($id);

        return view('admin.religion.edit',compact('editReligion'));



    }


    // Updating Data

    public function religionUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'religion' => 'required'
        ]);

        Religion::whereId($id)->update($data);

        return redirect('/admin/religion')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function religiondelete($id)
    {
        $data = Religion::findorFail($id);
        $data->delete();
        return redirect('/admin/religion')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
