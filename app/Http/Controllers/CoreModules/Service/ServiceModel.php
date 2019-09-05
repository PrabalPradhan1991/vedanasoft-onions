<?php

namespace App\Http\Controllers\CoreModules\Service;

use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    protected $table = 'core_services';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static $rule = [
    	//'feature_name' => ['required'],
    	//'slug' => ['required', 'unique:pages,slug'],
    	//'display_text' => ['required'],
        //'ordering'  =>  ['integer', 'min:0']
    ];
}