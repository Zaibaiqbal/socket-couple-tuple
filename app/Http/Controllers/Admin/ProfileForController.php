<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileFor;
use Illuminate\Http\Request;

class ProfileForController extends Controller
{
    // index Method

    public function profilefor()
    {
        $profileFor = ProfileFor::all();
        return view('admin.profilefor.index',compact('profileFor'));
    }


    // Profile For Add

    public function profileforAdd()
    {
        return view('admin.profilefor.create');
    }

    //storing Data

    public function profileforAddProcess(Request $request)
    {
        $request->validate([
            'profile_for' => 'required'
        ]);

        $data = new ProfileFor;
        $data->profile_for = $request->input('profile_for');
        $data->save();
        return redirect('/admin/profile-for')
            ->with('message','Your Data Has Been Created Successfully');
    }

        // Editing Data

    public function profileforedit($id)
    {
        $ProfileFor = ProfileFor::findOrFail($id);

        return view('admin.profilefor.edit',compact('ProfileFor'));



    }


    // Updating Data

    public function profileforUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'profile_for' => 'required'
        ]);

        ProfileFor::whereId($id)->update($data);

        return redirect('/admin/profile-for')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function profilefordelete($id)
    {
        $data = ProfileFor::findorFail($id);
        $data->delete();
        return redirect('/admin/profile-for')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
