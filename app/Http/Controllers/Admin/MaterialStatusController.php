<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MaterialStatus;
use Illuminate\Http\Request;

class MaterialStatusController extends Controller
{
    // index Method

    public function status()
    {
        $matrial = MaterialStatus::all();
        return view('admin.status.index',compact('matrial'));
    }


    // Profile For Add

    public function statusAdd()
    {
        return view('admin.status.create');
    }

    //storing Data

    public function statusAddProcess(Request $request)
    {
        $request->validate([
            'material_status' => 'required'
        ]);

        $data = new MaterialStatus();
        $data->material_status = $request->input('material_status');
        $data->save();
        return redirect('/admin/status')
            ->with('message','Your Data Has Been Created Successfully');


    }

    // Editing Data

    public function statusedit($id)
    {
        $materialStatus = MaterialStatus::findOrFail($id);

        return view('admin.status.edit',compact('materialStatus'));



    }


    // Updating Data

    public function statusUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'material_status' => 'required'
        ]);

        MaterialStatus::whereId($id)->update($data);

        return redirect('/admin/status')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function statusdelete($id)
    {
        $data = MaterialStatus::findorFail($id);
        $data->delete();
        return redirect('/admin/status')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
