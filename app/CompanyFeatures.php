<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyFeatures extends Model
{
    //
    protected $table = 'company_features';

    protected $primaryKey = 'id';

    public $company_id = 'company_id';


    //mass asign avoid

    protected $fillable = [
    'company_id',
    'description',

    ];
}
