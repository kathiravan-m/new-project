<?php

namespace Package\Post\App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viewer extends Model
{
    use HasFactory;
    protected $table='userss_tables';
    protected $fillable=['name','email','role'];

}
