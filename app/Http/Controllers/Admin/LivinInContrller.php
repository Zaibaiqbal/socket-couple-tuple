<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LivingIn;
use Illuminate\Http\Request;

class LivinInContrller extends Controller
{

    // index Method

    public function livingin()
    {
        $living = LivingIn::all();
        return view('admin.livingin.index',compact('living'));
    }


    // Profile For Add

    public function livinginAdd()
    {
        return view('admin.livingin.create');
    }

    //storing Data

    public function livinginAddProcess(Request $request)
    {
        $request->validate([
            'living_in' => 'required'
        ]);

        $data = new LivingIn;
        $data->living_in = $request->input('living_in');
        $data->save();
        return redirect('/admin/livingin')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function livinginedit($id)
    {
        $editliving = LivingIn::findOrFail($id);

        return view('admin.livingin.edit',compact('editliving'));



    }


    // Updating Data

    public function livinginUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'living_in' => 'required'
        ]);

        LivingIn::whereId($id)->update($data);

        return redirect('/admin/livingin')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function livingindelete($id)
    {
        $data = LivingIn::findorFail($id);
        $data->delete();
        return redirect('/admin/livingin')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
