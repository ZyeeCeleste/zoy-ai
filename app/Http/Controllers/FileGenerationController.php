<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileGenerationController extends Controller
{
    public function generate(Request $request)
    {
        $type = $request->input('type'); // 'excel' atau 'word'
        $title = $request->input('title', 'Dokumen_ZoyAI');
        $content = $request->input('content');
        
        $fileName = $title . '_' . time() . ($type === 'excel' ? '.xlsx' : '.docx');
        
        // Simpan file dummy
        $filePath = 'public/generated/' . $fileName;
        Storage::put($filePath, "Isi konten file untuk: " . $title);

        return response()->json([
            'status' => 'success',
            'file_name' => $fileName,
            'file_url' => Storage::url($filePath)
        ]);
    }
}

