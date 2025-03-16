<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Limpiar caché de roles y permisos
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Crear permisos para gestión de productos
        Permission::create(['name' => 'ver productos']);
        Permission::create(['name' => 'crear productos']);
        Permission::create(['name' => 'editar productos']);
        Permission::create(['name' => 'eliminar productos']);

        // Permisos para gestión de pedidos
        Permission::create(['name' => 'ver pedidos']);
        Permission::create(['name' => 'crear pedidos']);
        Permission::create(['name' => 'procesar pedidos']);
        Permission::create(['name' => 'cancelar pedidos']);

        // Permisos para gestión de usuarios
        Permission::create(['name' => 'ver usuarios']);
        Permission::create(['name' => 'crear usuarios']);
        Permission::create(['name' => 'editar usuarios']);
        Permission::create(['name' => 'eliminar usuarios']);

        // Permisos para gestión de roles
        Permission::create(['name' => 'ver roles']);
        Permission::create(['name' => 'crear roles']);
        Permission::create(['name' => 'editar roles']);
        Permission::create(['name' => 'eliminar roles']);

        // Crear roles
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);
        $operatorRole = Role::create(['name' => 'operator']);
        $clientRole = Role::create(['name' => 'client']);

        // Asignar permisos al rol de administrador
        $adminRole->givePermissionTo(Permission::all());

        // Asignar permisos al rol de manager
        $managerRole->givePermissionTo([
            'ver productos', 'crear productos', 'editar productos',
            'ver pedidos', 'crear pedidos', 'procesar pedidos', 'cancelar pedidos',
            'ver usuarios'
        ]);

        // Asignar permisos al rol de operador
        $operatorRole->givePermissionTo([
            'ver productos',
            'ver pedidos', 'procesar pedidos'
        ]);

        // Asignar permisos al rol de cliente
        $clientRole->givePermissionTo([
            'ver productos',
            'crear pedidos',
            'ver pedidos'
        ]);

        // Asignar rol de administrador al primer usuario (si existe)
        if ($user = User::first()) {
            $user->assignRole('admin');
        }
    }
}