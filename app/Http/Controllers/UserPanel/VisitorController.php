<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\ProfileView;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitorController extends Controller
{
    public function __construct()
    {
        $this->user = new User;
    }

    // visitors

    public function profile(User $user)
    {
       $user_profile_list = $user->getUserProfiles();
        // $user->profileViews()->updateOrCreate([ 'visitor_id' => Auth::user()->id ]);

        return view('user_panel.profileVisitors.view_profiles', [

            'user_profile_list'     =>    $user_profile_list
            
        ]);
    }
    public function visitUserProfile(Request $request)
    {
        try{
            $form_collect = $request->input();
            $form_collect['profile_id'] = decrypt($request->profile_id);
            $profile_view = new ProfileView;
            $profile_view = $profile_view->storeProfileView($form_collect);

            if(isset($profile_view->id))
            {
                $user_profile = $this->user->getUserProfiles()->where('profile_id',$profile_view->profile_id)->first();

                return view('user_panel.profileVisitors.visit_profile',[
                    'user' => $user_profile
                ]);
            }
  
        }
        catch(DecryptException $e)
        {

        }

    }

    public function viewRecentVisitors(Request $request)
    {
        try{
            $user_id = decrypt($request->id);

            $profile_view = new ProfileView;
            $profile = new Profile;
           
            
            $user = $this->user->getUserById($user_id);

            if(isset($user->id))
            {
                $profile = $user->profile;

                $visitors_list = $profile_view->getVisitorsListByUserId($profile->id);

                $visitor_ids = $visitors_list->pluck('visitor_id')->toArray();

                $visitor_profiles = $user->getUserProfiles()->whereIn('user_id',$visitor_ids);

                $title = 'Visitors Profiles';

                
            return view('user_panel.profileVisitors.view_profiles', [

                'user_profile_list'     =>    $visitor_profiles,
                'title'     =>    $title,
                
            ]);
            }

        }
        catch(DecryptException)
        {

        }
    }

    public function sendRequest(Request $request)
    {
        try{
            $user_id = $request->user_id;
            $user = new User;
            $curr_user = $user->getUserById($user_id);
            if(isset($curr_user->id))
            {
                $user_ids = [$curr_user->id];
                $visitor = $user->getUserById($request->visitor_id);

                event(new \App\Events\NotificationPusher($request->visitor_id,$user_ids,'Connection Request','userprofiles',0,'You got a Connection Request From '.Auth::user()->first_name.''));               
    
            }
        }
        catch(DecryptException $e)
        {
        
                  
        }
  
    }
}
