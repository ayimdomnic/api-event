<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'companies';

    public $primaryKey = 'id';


    //mass asinables

    protected $fillable = [
	    'name',
	    'website_name',
	    'slogan',
	    'logo',
	    'css_file',
	    'phone_number',
	    'cell_phone',
        'address',
        'theme',
        'state',
        'city',
        'zip_code',
        'email',
        'contact_email',
        'sales_email',
        'support_email',
        'status',
        'twitter',
        'facebook',
        'facebook_app_id',
        'description',
        'keywords',
        'about_us',
        'refund_policy',
        'privacy_policy',
        'terms_of_service',


    ];

    public function features()
    {
    	return $this->hasMany('App/CompanyFeatures');
    }
}
