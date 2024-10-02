<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
        protected $fillable = [
            'name',
            'age',
            'email',
            'job',  // Job title
            'job_description',  // Job description
            'years_of_experience',  // Years of experience
            'reference_name',  // Reference name
            'reference_details',  // Reference details
            'contact',  // Contact information
            'photo', // Add this field

        ];


}
