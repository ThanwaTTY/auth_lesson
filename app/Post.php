<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['user_id','title','body'];

	public static function createFrom($user, $data)
	{
    	$data = collect($data)
		    	->merge([
		    			'user_id'=>$user->id
		    		]);

		return static::create( $data->toArray() );
	}

	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}


}
