<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    //
    protected $table = 'contact_form';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'project_description',
    ];
}
