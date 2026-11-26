<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExportController extends Controller
{
    public function generateFile(Request $request)
    {
        $type = $request->input('type'); // 'excel', 'word', 'pdf'
        $title = $request->input('title', 'Dokumen_Zoy_AI');
        $content = $request->input('content', []);

        $fileName = str_replace(' ', '_', $title) . '_' . time();
        
        // 1. Export ke CSV (Bisa dibuka langsung di Excel)
        if ($type === 'excel') {
            $fileName .= '.csv';
            $csvData = "No,Deskripsi,Material,Volume,Satuan,Qty,Harga Satuan,Total\n";
            
            if (is_array($content)) {
                foreach ($content as $index => $row) {
                    $csvData .= ($index + 1) . ',"' . ($row['desc'] ?? '') . '","' . ($row['material'] ?? '') . '",' . ($row['volume'] ?? 0) . ',"' . ($row['unit'] ?? '') . '",' . ($row['qty'] ?? 1) . ',' . ($row['price'] ?? 0) . ',' . ($row['total'] ?? 0) . "\n";
                }
            }
            
            Storage::disk('public')->put("downloads/{$fileName}", $csvData);
        } 
        
        // 2. Export ke Word / HTML Doc (Format standar .doc yang bisa dibaca MS Word)
        elseif ($type === 'word') {
            $fileName .= '.doc';
            $wordHtml = "
                <html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'>
                <head><title>{$title}</title></head>
                <body style='font-family:Arial, sans-serif; padding:20px;'>
                    <h2 style='color:#3b82f6;'>Zoy AI — Dokumen Konstruksi</h2>
                    <h3>{$title}</h3>
                    <p>Tanggal: " . date('d-m-Y H:i') . "</p>
                    <hr>
                    <div>" . nl2br($request->input('text_content', '')) . "</div>
                </body>
                </html>
            ";
            
            Storage::disk('public')->put("downloads/{$fileName}", $wordHtml);
        }
        
        // Return URL Download yang bisa dipakai langsung di chat frontend
        $fileUrl = asset("storage/downloads/{$fileName}");

        return response()->json([
            'status' => 'success',
            'file_url' => $fileUrl,
            'file_name' => $fileName,
            'type' => $type
        ]);
    }
}

