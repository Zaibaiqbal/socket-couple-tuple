<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    // index Method

    public function profession()
    {
        $living = Profession::all();
        return view('admin.profession.index',compact('living'));
    }


    // Profile For Add

    public function professionAdd()
    {
        return view('admin.profession.create');
    }

    //storing Data

    public function professionAddProcess(Request $request)
    {
        $request->validate([
            'profession' => 'required'
        ]);

        $data = new Profession;
        $data->profession = $request->input('profession');
        $data->save();
        return redirect('/admin/profession')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function professionedit($id)
    {
        $editReligion = Profession::findOrFail($id);
        return view('admin.profession.edit',compact('editReligion'));

    }


    // Updating Data

    public function professionUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'profession' => 'required'
        ]);

        Profession::whereId($id)->update($data);

        return redirect('/admin/profession')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function professiondelete($id)
    {
        $data = Profession::findorFail($id);
        $data->delete();
        return redirect('/admin/profession')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
