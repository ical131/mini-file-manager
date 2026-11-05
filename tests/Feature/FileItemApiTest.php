<?php

namespace Tests\Feature;

use App\Models\FileItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FileItemApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_root_file_items(): void
    {
        FileItem::create([
            'name' => 'Documents',
            'type' => 'folder',
        ]);

        $response = $this->getJson('/api/file-items');

        $response->assertOk()
            ->assertJsonFragment([
                'name' => 'Documents',
            ]);
    }

    public function test_can_get_file_item_detail(): void
    {
        $folder = FileItem::create([
            'name' => 'Documents',
            'type' => 'folder',
        ]);

        $response = $this->getJson('/api/file-items/' . $folder->id);

        $response->assertOk()
            ->assertJsonFragment([
                'name' => 'Documents',
            ]);
    }

    public function test_can_create_folder(): void
    {
        $response = $this->postJson('/api/file-items', [
            'name' => 'Projects',
            'parent_id' => null,
        ]);

        $response->assertCreated()
            ->assertJsonPath('data.name', 'Projects');

        $this->assertDatabaseHas('file_items', [
            'name' => 'Projects',
            'type' => 'folder',
        ]);
    }

    public function test_cannot_use_file_as_parent(): void
    {
        $file = FileItem::create([
            'name' => 'Proposal.pdf',
            'type' => 'file',
        ]);

        $response = $this->postJson('/api/file-items', [
            'name' => 'Subfolder',
            'parent_id' => $file->id,
        ]);

        $response->assertUnprocessable()
            ->assertJsonValidationErrors('parent_id');
    }

    public function test_folder_name_is_required(): void
    {
        $response = $this->postJson('/api/file-items', [
            'name' => '',
            'parent_id' => null,
        ]);

        $response->assertUnprocessable()
            ->assertJsonValidationErrors('name');
    }
}
