<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function downloadCv()
    {
        $profile = Profile::first();

        abort_unless($profile && $profile->cv_file, 404);

        return Storage::download($profile->cv_file, 'CV.pdf');
    }
}
