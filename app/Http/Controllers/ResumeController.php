<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function download() 
    {
        $path = 'public/resume.pdf';
        
        // Mengecek apakah file ada di storage
        if (Storage::exists($path)) {
            return Storage::download($path, 'resume.pdf');
        }

        return abort(404, 'File tidak ditemukan');
    }
}
