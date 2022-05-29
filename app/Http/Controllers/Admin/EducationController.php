<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use function redirect;
use function view;

class EducationController extends Controller
{
    // index Method

    public function education()
    {
        $living = Education::all();
        return view('admin.education.index',compact('living'));
    }


    // Profile For Add

    public function educationAdd()
    {
        return view('admin.education.create');
    }

    //storing Data

    public function AddProcess(Request $request)
    {
        $request->validate([
            'education' => 'required'
        ]);

        $data = new Education;
        $data->education = $request->input('education');
        $data->save();
        return redirect('/admin/education')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function educationedit($id)
    {
        $editReligion = Education::findOrFail($id);
        return view('admin.education.edit',compact('editReligion'));

    }


    // Updating Data

    public function educationUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'education' => 'required'
        ]);

        Education::whereId($id)->update($data);

        return redirect('/admin/education')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function educationdelete($id)
    {
        $data = Education::findorFail($id);
        $data->delete();
        return redirect('/admin/education')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
