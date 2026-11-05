<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileItemRequest;
use App\Services\FileItemService;

class FileItemController extends Controller
{
    protected FileItemService $fileItemService;

    public function __construct(FileItemService $fileItemService)
    {
        $this->fileItemService = $fileItemService;
    }

    // Menampilkan daftar file dan folder
    public function index()
    {
        $items = $this->fileItemService->getRootItems();

        return response()->json($items);
    }

    // Menampilkan detail file atau folder
    public function show(int $id)
    {
        $item = $this->fileItemService->getItemById($id);

        return response()->json($item);
    }

    // Membuat folder baru
    public function store(StoreFileItemRequest $request)
    {
        $folder = $this->fileItemService->createFolder(
            $request->validated()
        );

        return response()->json([
            'message' => 'Folder berhasil dibuat.',
            'data' => $folder,
        ], 201);
    }
}
