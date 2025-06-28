<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Job extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'jobs';

    protected $fillable = ['title', 'company', 'location', 'description'];
}
