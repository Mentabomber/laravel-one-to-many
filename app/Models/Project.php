<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [

        "title",
        "description",
        "start_date",
        "project_manager",
        "thumb",
        "project_id"
    ];
    public function type() {
        return $this -> hasOne(Type :: class);
    }
}
