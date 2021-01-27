<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Storage;

class FileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimetypes:application/pdf|max:12288',
            'status' => 'required',
            'agendamento_id' => 'required|integer|exists:agendamentos,id',
        ]);
        $file = new File;
        $file->agendamento_id = $request->agendamento_id;
        $file->status = $request->status;
        $file->original_name = $request->file('file')->getClientOriginalName();
        $file->path = $request->file('file')->store('.');
        $file->save();
        return back();
    }

    public function show(File $file)
    {
        return Storage::download($file->path, $file->original_name);
    }

    public function destroy(File $file)
    {
        Storage::delete($file->path);
        $file->delete();
        return back();
    }
}