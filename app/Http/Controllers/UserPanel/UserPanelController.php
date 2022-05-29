<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\Education;
use App\Models\MaterialStatus;
use App\Models\Diet;
use App\Models\Package;
use App\Models\Profession;
use App\Models\Profile;
use App\Models\ProfileFor;
use App\Models\Religion;
use App\Models\Salary;
use App\Models\SubCommunity;
use App\Models\Height;
use App\Models\Image;
use App\Models\ProfileView;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserPanelController extends Controller
{

    // Profile View

    public function profileView()
    {
        return view('user_panel.profile.userProfile');
    }



    // User Panel Dashboard Page
    //
    public function UserPanel()
    {
//        $mytime = \Carbon\Carbon::now();
//        $onlineUsers = User::where('last_seen','=',$mytime )->first();
//        $users = User::all();
        $image = Image::where('user_id',Auth::id())->orderby('id','desc')->first();
        $profile_view = new ProfileView;
        $user = new User;
        $user = $user->getUserById(Auth::user()->id);

        if(isset($user->id))
        {
            $profile = $user->profile;

            $visitors_list = $profile_view->getVisitorsListByUserId($profile->id);
            $visitors_count = $visitors_list->count();

        }
        else{
            $visitors_count = 0;
        }

        return view('user_panel.index',get_defined_vars());
    }

    // User Profile

    public function profile()
    {
        $user = User::where('id',Auth::id())->select('dob')->first();
        $age = Carbon::parse($user->dob)->diff(Carbon::now())->y;
        $user = Profile::where('user_id',Auth::id())->first();
        $image = Image::where('user_id',Auth::id())->first();

        return view('user_panel.profile.userDetail',get_defined_vars());
    }

    // User Detail View

    public function detail($id)
    {
        $user = User::where('id',$id)->first();
        return view('user_panel.profile.userDetail',get_defined_vars());
    }

    // Editing User Profile
    public function EditProfile()
    {
        $profileFor = ProfileFor::all();
        $materialStatus = MaterialStatus::all();
        $religion = Religion::all();
        $subCommunities = SubCommunity::all();
        $community = Community::all();
        $educations = Education::all();
        $works = Work::all();
        $profession = Profession::all();
        $salary = Salary::all();
        $user = User::with('profile')->where('id',Auth::id())->first();
        return view('user_panel.profile.edit-detail',get_defined_vars());
    }


    // Update your Profile

    public function EditProfileProcess(Request $request)
    {
        $user = User::with('profile')->where('id',Auth::id())->first();
        $user->profile_for = $request->profile_for;
        $user->profile->material_status = $request->material_status;
        $user->dob = $request->dob;
        $user->profile->blood_group = $request->blood_group;
        $user->religion = $request->religion;
        $user->profile->sub_community = $request->sub_community;
        $user->community = $request->community;
        $user->profile->father_status = $request->father_status;
        $user->profile->mother_status = $request->mother_status;
        $user->profile->family_location = $request->family_location;
        $user->profile->native_place = $request->native_place;
        $user->profile->siblings = $request->siblings;
        $user->profile->family_type = $request->family_type;
        $user->profile->family_values = $request->family_values;
        $user->profile->family_affluence = $request->family_affluence;
        $user->profile->high_education = $request->high_education;
        $user->profile->college_name = $request->college_name;
        $user->profile->work_with = $request->work_with;
        $user->profile->designation = $request->designation;
        $user->profile->current_company = $request->current_company;
        $user->profile->salary = $request->salary;
        $user->profile->bio = $request->bio;
        $user->save();
        $user->profile->save();
        return redirect('userPanel/profile')->with('success','Your Data has been Updated Successfully');
    }

    // user panel Create Your Profile

    public function createProfile()
    {
        $materialStatus = MaterialStatus::all();
        $diet = Diet::all();
        $heights = Height::all();
        $subCommunities = SubCommunity::all();
        $educations = Education::all();
        $works = Work::all();
        $profession = Profession::all();
        $salary = Salary::all();
        $country = DB::table('country')->get();
        return view('user_panel.profile.create-profile',get_defined_vars());
    }


    // create profile Process

    public function createProfileProcess(Request $request)
    {

        $request->validate([
            'city_live' => 'required',
            'live_family' => 'required',
            'material_status' => 'required',
            'diet' => 'required',
            'height' => 'required',
            'sub_community' => 'required',
            'high_education' => 'required',
            'work_with' => 'required',
            'designation' => 'required',
            'salary' => 'required',
            'college_name' => 'required',
            'bio' => 'required',
            'country_code' => 'required',
            'mobile_number' => 'required',
        ]);


        $data = new Profile([
            'user_id'=> Auth::id(),
            'city_live' => $request->input('city_live'),
            'live_family' => $request->input('live_family'),
            'material_status' => $request->input('material_status'),
            'diet' => $request->input('diet'),
            'height' => $request->input('height'),
            'sub_community' => $request->input('sub_community'),
            'high_education' => $request->input('high_education'),
            'work_with' => $request->input('work_with'),
            'designation' => $request->input('designation'),
            'salary' => $request->input('salary'),
            'current_company' => $request->input('current_company'),
            'college_name' => $request->input('college_name'),
            'bio' => $request->input('bio'),
            'country_code' => $request->input('country_code'),
            'mobile_number' => $request->input('mobile_number'),
        ]);

        $data->save();
        return redirect('/userPanel/profile');
    }




    // Near Me

    public function nearMe()
    {
        $location = Profile::where('user_id',Auth::id())->select('city_live')->get();
        $data = Profile::whereIn('city_live',$location)->where('user_id', '!=', Auth::id())->get();
        return view('user_panel.nearme.near-me',get_defined_vars());

    }



    // Pricing Plans
    public function plans()
    {
        $plans = Package::all();
        return view('user_panel.price-plan.plan',get_defined_vars());
    }




}
