<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCommunity;
use Illuminate\Http\Request;

class SubCommunityController extends Controller
{
    // index Method

    public function subCommunity()
    {
        $living = SubCommunity::all();
        return view('admin.subcommunity.index',compact('living'));
    }


    // Profile For Add

    public function subCommunityAdd()
    {
        return view('admin.subcommunity.create');
    }

    //storing Data

    public function subCommunityAddProcess(Request $request)
    {
        $request->validate([
            'sub_community' => 'required'
        ]);

        $data = new SubCommunity;
        $data->sub_community = $request->input('sub_community');
        $data->save();
        return redirect('/admin/sub-community')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function subCommunityedit($id)
    {
        $editReligion = SubCommunity::findOrFail($id);
        return view('admin.subcommunity.edit',compact('editReligion'));

    }


    // Updating Data

    public function subCommunityUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'sub_community' => 'required'
        ]);

        SubCommunity::whereId($id)->update($data);

        return redirect('/admin/sub-community')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function subCommunitydelete($id)
    {
        $data = SubCommunity::findorFail($id);
        $data->delete();
        return redirect('/admin/sub-community')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
