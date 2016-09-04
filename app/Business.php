<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    //
    protected $table = 'businesses';

    public $timestamps = false;

    public $primaryKey = 'user_id';

    public $increamenting = false;


    //mass assign avoid

    protected $fillable =[

    	'user_id',
    	'business_name',
    	'creation_date'

    	];

    public static function create(array $attr = [], $normal = true)
    {
    	$role = $normal ? 'business': 'non-profit';

    	if (!isset($attr['user_id']) && isset($attr['user'])) {
    		# code...
    		$attr['user']['role'] = $role;
    		$user = User::create($attr['user']);

    		unset($attr['user']);
    		$attr['user_id'] = $user->id;
    	}

    	return parent::create($attr);
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getAgeAttribute()
    {
    	return \Carborn\Carborn::parse($this->creation_date)->age;
    }

    public function getNameAttribute()
    {
    	return "$this->business_name";
    }

    public function getHasPhoneAttribute()
    {
    	return is_null($this->local_phone);
    }

}
