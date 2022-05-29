<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SallaryController extends Controller
{
    // index Method

    public function salary()
    {
        $living = Salary::all();
        return view('admin.salary.index',compact('living'));
    }


    // Profile For Add

    public function salaryAdd()
    {
        return view('admin.salary.create');
    }

    //storing Data

    public function salaryAddProcess(Request $request)
    {
        $request->validate([
            'salary' => 'required'
        ]);

        $data = new Salary;
        $data->salary = $request->input('salary');
        $data->save();
        return redirect('/admin/salary')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function salaryedit($id)
    {
        $editReligion = Salary::findOrFail($id);
        return view('admin.salary.edit',compact('editReligion'));

    }


    // Updating Data

    public function salaryUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'salary' => 'required'
        ]);

        Salary::whereId($id)->update($data);

        return redirect('/admin/salary')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function salarydelete($id)
    {
        $data = Salary::findorFail($id);
        $data->delete();
        return redirect('/admin/salary')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
