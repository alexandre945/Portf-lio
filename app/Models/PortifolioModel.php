<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortifolioModel extends Model
{
    protected $fillable = ['name','subject','assessment'];
}
