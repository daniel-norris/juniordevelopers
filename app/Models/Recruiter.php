<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;

    /**
     * 
     * Get the recruiter's company.
     * 
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
