<?php

namespace App\Services;

use App\Models\FileItem;

class FileItemService
{
    // Mengambil semua item di root folder
    public function getRootItems()
    {
        return FileItem::whereNull('parent_id')
            ->latest()
            ->get();
    }

    // Mengambil detail item berdasarkan ID
    public function getItemById(int $id)
    {
        return FileItem::findOrFail($id);
    }

    // Membuat folder baru
    public function createFolder(array $data)
    {
        return FileItem::create([
            'name' => $data['name'],
            'type' => 'folder',
            'parent_id' => $data['parent_id'] ?? null,
        ]);
    }
}