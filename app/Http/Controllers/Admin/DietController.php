<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diet;
use Illuminate\Http\Request;

class DietController extends Controller
{
    // index Method

    public function diet()
    {
        $living = Diet::all();
        return view('admin.diet.index',compact('living'));
    }


    // Profile For Add

    public function dietAdd()
    {
        return view('admin.diet.create');
    }

    //storing Data

    public function dietAddProcess(Request $request)
    {
        $request->validate([
            'diet' => 'required'
        ]);

        $data = new Diet;
        $data->diet = $request->input('diet');
        $data->save();
        return redirect('/admin/diet')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function dietedit($id)
    {
        $editReligion = Diet::findOrFail($id);
        return view('admin.diet.edit',compact('editReligion'));

    }


    // Updating Data

    public function dietUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'diet' => 'required'
        ]);

        Diet::whereId($id)->update($data);

        return redirect('/admin/diet')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function dietdelete($id)
    {
        $data = Diet::findorFail($id);
        $data->delete();
        return redirect('/admin/diet')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
