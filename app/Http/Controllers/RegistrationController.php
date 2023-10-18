<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewRegistrationNotification;
use Illuminate\Support\Facades\Notification;

use App\Models\User;

use App\Models\registration;



class RegistrationController extends Controller
{

    public function showRegistrationForm()
        {
            return view('registration');
        }


    public function submitForm(Request $request)
    {
               // Check if a record with the same email already exists
        $existingRegistration = Registration::where('email', $request->email)->first();

        if ($existingRegistration) {
            // You can choose to update the existing record or display an error message.
            // For example, to update the existing record:
            $existingRegistration->update([
                'first_name' => $request->first_name,
                'surname' => $request->surname,
                // Update other fields as needed.
            ]);

            return redirect()->back()->with('success', 'Your information has been updated successfully.');
        }

        $registration=new registration;


        // Check if a file was uploaded
        if ($request->hasFile('documents')) {
            $documents = $request->file('documents');
            $documentNames = [];

          
        foreach ($documents as $document) {
            // Validate each uploaded file
            if ($document->isValid()) {
                $extension = $document->getClientOriginalExtension();
                $documentName = time() . '_' . uniqid() . '.' . $extension;

                // Move the uploaded file to a storage directory
                $document->move('registrationdocuments', $documentName);

                // Store the document name for each file in an array
                $documentNames[] = $documentName;
            } else {
                // Handle the case where an uploaded file is not valid
            }
        }

        // Serialize the array of document names as a string
        $documentNamesString = implode(', ', $documentNames);

        // Save the document names in the database as a string
        $registration->documents = $documentNamesString;
    }


        $registration->first_name=$request->first_name;
        $registration->surname=$request->surname;
        $registration->phone=$request->number;
        $registration->email=$request->email;
        $registration->address=$request->address;
        $registration->organization=$request->organization;
        $registration->education=$request->education;
        $registration->membership_category=$request->membership_category;
        $registration->additional_details=$request->additional_details;
 
        $registration->save();

        

         return redirect()->back()->with('success','Application Submitted successfully!');
    }




}
