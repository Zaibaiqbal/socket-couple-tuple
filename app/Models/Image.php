<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'user_id',
        'name',
        'path'
    ];

    public function storeImages($object)
    {
        return DB::transaction(function() use ($object){

//            foreach($object['images'] as $rows)
//            {
//                $image = new Image;
//                $image->profile_id = $object['profile_id'];
//                $image->user_id = $object['profile_id'];
//                $image->name = $rows->getClientOriginalName();
//                $extension = $rows->getClientOriginalExtension();
//                // dd(\Storage::disk('public')->url($image->name));
//                // $image->path = \Storage::put('/public/images/', $image->name);
//                $image->save();
//
//            }
            foreach($object['images'] as $rows)
            {
                $image = new Image;
                $image->profile_id  = $object['profile_id'];
                $image->user_id     = $object['profile_id'];
                $image->name        = $rows->getClientOriginalName();
                $file               = base64_encode(file_get_contents($rows));
                \Storage::disk('public')->put('images/'.$image->name,base64_decode($file));
                $image->path        = 'storage/images/'.$image->name;

                $image->save();

            }

            return with($image);

        });
    }


    public function profileImage()
    {
        return $this->belongsTo(Profile::class,'profile_id','id');
    }
}
