<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];
    protected $appends = ['image_url'];

    public function projects(){
        return $this->hasMany(Project::class);
    }
    public function getImageUrlAttribute(){
        return asset('storage/'.$this->image);
    }
}
