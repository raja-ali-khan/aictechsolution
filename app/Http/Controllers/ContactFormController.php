<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{

    public function store(ContactFormRequest $request)
    {
        $data = new ContactForm; // New model instance
        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->email = $request->input('email');
        $data->phone_number = $request->input('phone_number'); // Set null if not provided
        $data->project_description = $request->input('project_description');

        $data->save(); // Save the data to the database

        return response()->json(['message' => 'Form submitted successfully'], 200);
    }
}
