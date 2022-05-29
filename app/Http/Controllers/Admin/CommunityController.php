<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{

    // index Method

    public function community()
    {
        $community = Community::all();
        return view('admin.community.index',compact('community'));
    }


    // Profile For Add

    public function communityAdd()
    {
        return view('admin.community.create');
    }

    //storing Data

    public function communityAddProcess(Request $request)
    {
        $request->validate([
            'community' => 'required'
        ]);

        $data = new Community;
        $data->community = $request->input('community');
        $data->save();
        return redirect('/admin/community')
            ->with('message','Your Data Has Been Created Successfully');
    }

    // Editing Data

    public function communityedit($id)
    {
        $editCommunity = Community::findOrFail($id);

        return view('admin.community.edit',compact('editCommunity'));



    }


    // Updating Data

    public function communityUpdate(Request $request, $id)
    {

        $data = $request->validate([
            'community' => 'required'
        ]);

        Community::where('id',$id)->update($data);

        return redirect('/admin/community')
            ->with('message','Your Data Has Been Updated Successfully');
    }


    // Deleting Data

    public function communitydelete($id)
    {
        $data = Community::findorFail($id);
        $data->delete();
        return redirect('/admin/community')
            ->with('error','Your Data Has Been Deleted Successfully');

    }
}
