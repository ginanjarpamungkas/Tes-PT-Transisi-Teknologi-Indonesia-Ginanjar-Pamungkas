<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model{
    protected $guarded = ['id'];
    protected $table = 'employees';

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
