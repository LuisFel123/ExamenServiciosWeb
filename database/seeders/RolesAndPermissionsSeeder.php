<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // // // Crear roles
        // $adminRole = Role::create(['name' => 'admin']);
        // $editorRole = Role::create(['name' => 'editor']);

        // // // // Crear permisos
        // $createPostsPermission = Permission::create(['name' => 'create posts']);
        // $editPostsPermission = Permission::create(['name' => 'edit posts']);
        // $deletePostsPermission = Permission::create(['name' => 'delete posts']);

        // // // // Asignar permisos a roles
        // $adminRole->givePermissionTo([$createPostsPermission, $editPostsPermission, $deletePostsPermission]);
        // $editorRole->givePermissionTo([$createPostsPermission, $editPostsPermission]);

        // // // // // Asignar roles a usuarios
        // $adminUser = User::create(['name' => 'Admin', 'email' => 'admin@example.com', 'password' => bcrypt('password')]);
        // $adminUser->assignRole('admin');

        $user = User::find(23);
        $user->assignRole('editor');

        // $user = User::find(4);
        // $user->assignRole('editor');

    }
}
