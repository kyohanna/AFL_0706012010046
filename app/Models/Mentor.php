<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $table = "mentors";
    protected $primaryKey = "nama";
    protected $keyType = 'string';
    protected $fillable = ['nama','angkatan'];

    public function mentee()
    {
        return $this->hasMany(Mentee::class,'mentor','nama' );
    }
    
}
 