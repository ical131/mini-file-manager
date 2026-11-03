<?php

namespace App\Http\Controllers;

use App\Models\FileItem;
use Illuminate\Http\Request;

class FileItemController extends Controller
{
    // Menampilkan daftar file dan folder
    public function index()
    {
        $items = FileItem::whereNull('parent_id')
            ->latest()
            ->get();

        return response()->json($items);
    }

    // Menampilkan detail file atau folder
    public function show(FileItem $fileItem)
    {
        return response()->json($fileItem);
    }



    // Membuat folder baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => [
                'nullable',
                'exists:file_items,id',
                function ($attribute, $value, $fail) {
                    if ($value && FileItem::where('id', $value)->where('type', '!=', 'folder')->exists()) {
                        $fail('Parent hanya boleh berupa folder.');
                    }
                },
            ],
        ]);

        $folder = FileItem::create([
            'name' => $validated['name'],
            'type' => 'folder',
            'parent_id' => $validated['parent_id'] ?? null,
        ]);

        return response()->json([
            'message' => 'Folder berhasil dibuat.',
            'data' => $folder,
        ], 201);
    }
}