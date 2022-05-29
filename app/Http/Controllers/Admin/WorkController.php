<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    // index Method

    public function work()
    {
        $living = Work::all();
        return view('admin.work.index',compact('living'));
    }


    // Profile For Add

    public function workAdd()
    {
        return view('admin.work.create');
    }

    //storing Data

    public function workAddProcess(Request $request)
    {
        $request->validate([
            'work' => 'required'
        ]);

        $data = new Work;
        $data->work = $request->input('work');
        $data->save();
        return redirect('/admin/work')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function workedit($id)
    {
        $editReligion = Work::findOrFail($id);
        return view('admin.work.edit',compact('editReligion'));

    }


    // Updating Data

    public function workUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'work' => 'required'
        ]);

        Work::whereId($id)->update($data);

        return redirect('/admin/work')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function workdelete($id)
    {
        $data = Work::findorFail($id);
        $data->delete();
        return redirect('/admin/work    ')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
