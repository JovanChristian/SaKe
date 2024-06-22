<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index() {
        $listActivity = Activity::all();
        return view('aktivitasAfter', compact('listActivity'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'namaYayasan' => 'required|string|max:255',
            'tanggalLahir' => 'required|date',
            'jenisPengasuh' => 'required|string',
            'durasiKontrak' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        $filename = null;
        $path = null;

        if ($request->hasFile('image')) { // Check for file existence using hasFile
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'upload/kontrak/';
            $file->move($path, $filename);
        }

        // Save the form data to the database (example model Yayasan)
        // You need to create a Yayasan model and migration if it doesn't exist

        Activity::create([
            'namaYayasan' => $request->input('namaYayasan'),
            'tanggalLahir' => $request->input('tanggalLahir'),
            'jenisPengasuh' => $request->input('jenisPengasuh'),
            'durasiKontrak' => $request->input('durasiKontrak'),
            'image' => $path . $filename
        ]);
        // Redirect to the next page
        return redirect()->route('aktivitas.index');
    }
}
