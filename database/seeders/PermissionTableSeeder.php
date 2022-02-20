<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'client-list',
            'client-create',
            'client-edit',
            'client-delete',
            'pemda-lihat',
            'pemda-edit',
            'kecamatan-lihat',
            'kecamatan-tambah',
            'kecamatan-edit',
            'kecamatan-hapus',
            'kelurahan-lihat',
            'kelurahan-tambah',
            'kelurahan-edit',
            'kelurahan-hapus',
            'ressource-lihat',
            'ressource-tambah',
            'ressource-edit',
            'ressource-hapus',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
