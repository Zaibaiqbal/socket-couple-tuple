<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class ProfileView extends Model
{
    use HasFactory;


    protected $fillable = [
        'profile_id',
        'visitor_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getVisitorsListByUserId($id)
    {
        return ProfileView::where('profile_id',$id)->distinct('visitor_id')->get();
    }
    public function storeProfileView($object)
    {
        return DB::transaction(function() use ($object){
            $profile_view = new ProfileView;

            $profile_view->visitor_id = Auth::user()->id;
            $profile_view->profile_id = $object['profile_id'];
            $profile_view->save();

            return with($profile_view);
        });
    }
}
