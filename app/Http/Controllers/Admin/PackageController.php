<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;
use function view;

class PackageController extends Controller
{
    // List of packages

    public function index()
    {
        $plans = Package::all();
        return view('admin.package-plan.index',get_defined_vars());
    }


    // Add Package View

    public function add()
    {
        return view('admin.package-plan.create');
    }

    // Add Process

    public function addPackage(Request $request)
    {
        $request->validate([
            'package_name' => 'required',
            'package_price' => 'required',
            'messages' => 'required',
            'view_contact' => 'required',
            'standout_profile' => 'required',
            'directly_contact' => 'required',
            'duration' => 'required'
        ]);


        $data = Package::create(
            [
                'package_name' => $request->input('package_name'),
                'package_price' => $request->input('package_price'),
                'messages' => $request->input('messages'),
                'view_contact' => $request->input('view_contact'),
                'standout_profile' => $request->input('standout_profile'),
                'directly_contact' => $request->input('directly_contact'),
                'sale_level' => $request->input('sale_level'),
                'discount_price' => $request->input('discount_price'),
                'discount_percentage' => $request->input('discount_percentage'),
                'duration' => $request->input('duration'),
            ]
        );

        $data->save();
         return redirect('/admin/package')->with('message','Your Plan has Been Added Successfully');

    }


    // Package Edit

    public function packgeEdit($id)
    {
        $plan = Package::where('id',$id)->first();
        return view('admin.package-plan.edit',get_defined_vars());
    }

    // update the Package

    public function update(Request $request,$id)
    {
        $request->validate([
            'package_name' => 'required',
            'package_price' => 'required',
            'messages' => 'required',
            'view_contact' => 'required',
            'standout_profile' => 'required',
            'directly_contact' => 'required',
            'duration' => 'required'
        ]);

        $data = $request->except(['_token']);
        Package::where('id',$id)->update($data);
        return redirect('/admin/package')->with('message','Your Plan has Been updated Successfully');
    }

    public function delete($id)
    {
        $data = Package::findorFail($id);
        $data->delete();
        return redirect('/admin/package')->with('error','Your Plan has Been Deleted Successfully');
    }

}
