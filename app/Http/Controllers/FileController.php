<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request): string
    {
        $request->validate([
            'picture' => ['required', 'file', 'image', 'max:2048'],
        ]);

        $picture = $request->file('picture');
        $picture->storePubliclyAs("pictures", $picture->getClientOriginalName(), "public");

        return "Ok " . $picture->getClientOriginalName();
    }
}
