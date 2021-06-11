<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'admin.index', 'description' => 'Ver Dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.roles.index', 'description' => 'Lista de roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create', 'description' => 'Nuevo rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit', 'description' => 'Editar rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy', 'description' => 'Eliminar rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.c_users.index', 'description' => 'Lista de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.c_users.create', 'description' => 'Nuevo usuario'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.c_users.edit', 'description' => 'Editar usuario'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.c_users.destroy', 'description' => 'Eliminar usuario'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.r_users.index', 'description' => 'Lista de rol usuario'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.r_users.edit', 'description' => 'Editar rol de usuario'])->syncRoles([$role1]);
        //Permission::create(['name' => 'admin.r_users.update', 'description' => ''])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index', 'description' => 'Lista de categorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create', 'description' => 'Nueva categoría'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'Editar categoría'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Eliminar categoría'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index', 'description' => 'Lista de etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Nueva etiqueta'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Editar etiqueta'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Eliminar etiqueta'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index', 'description' => 'Lista de posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Nuevo post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Editar post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Eliminar post'])->syncRoles([$role1, $role2]);
    }
}
