<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\registration;
use App\Models\Certificate;
use App\Models\User;
use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;



class CertificateController extends Controller
{

     public function index()
    {
        // Retrieve certificates for users (usertype 0) only
        $certificates = Certificate::whereHas('user', function ($query) {
            $query->where('usertype', 0); // Assuming usertype 0 is for regular users
        })->get();

        return view('admin.certificate', compact('certificates'));
    }

     public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'issue_date' => 'required|date',
        ]);

        // Create a new certificate
        $certificate = new Certificate;
        $certificate->name = $request->name;
        $certificate->issue_date = $request->issue_date;
        
        // Associate the certificate with the currently authenticated user
        $certificate->user_id = auth()->id();
        $certificate->save();

        return redirect()->route('admin.certificate')->with('success', 'Certificate generated and saved successfully');
    }

    public function showDownloadCertificate($id)
    {
        // Replace 'name' and 'issue_date' with your actual certificate data
        $certificate = Certificate::where('name', $id)->first();
        
        if ($certificate) {
            return view('downloadcertificate', compact('certificate'));
        } else {
            return redirect()->back()->with('error', 'Certificate not found.');
        }
    }


    public function download($id)
    {
        // Implement downloading certificate functionality here
         // Find the certificate by its ID
        $certificate = Certificate::find($id);

        if ($certificate) {
            // Generate the file path based on your storage configuration
            $filePath = storage_path('/storage/certificates/' . $certificate->memberCertificates);

            if (file_exists($filePath)) {
                // Set the appropriate HTTP headers for the download
                $headers = [
                    'Content-Type' => 'application/pdf', // Adjust the content type as needed
                    'Content-Disposition' => 'attachment; filename=' . $certificate->name . '.pdf',
                ];

                // Send the file as a download
                return response()->download($filePath, $certificate->name . '.pdf', $headers);
            } else {
                // Handle the case where the file does not exist
                return redirect()->back()->with('error', 'Certificate file not found.');
            }
        } else {
            // Handle the case where the certificate does not exist
            return redirect()->back()->with('error', 'Certificate not found.');
        }
    }
    

}
