<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $role1 = Role::all()->pluck(['name']);
        Permission::create(['name' => 'admin.clientes.pdf'])->assignRole($role1);
        /*Permission::create(['name' => 'admin.users.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.update'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.destroy'])->assignRole($role1);
       
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Empleado']);

        Permission::create(['name' => 'admin.clientes.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.clientes.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.clientes.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.clientes.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.citas.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.citas.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.citas.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.citas.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.compras.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.compras.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.compras.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.compras.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.detallecompras.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.detallecompras.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.detallecompras.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.detallecompras.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.empleados.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.empleados.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.empleados.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.empleados.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.inventarios.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.inventarios.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.inventarios.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.inventarios.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.ventas.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.ventas.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.ventas.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.ventas.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.registro.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.registro.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.registro.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.registro.destroy'])->assignRole($role1);

        //******************************************* */
        /*
        Permission::create(['name' => 'usuario.citasU.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.citasU.create'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'usuario.clientesU.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.clientesU.create'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'usuario.ventasU.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.ventasU.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.ventasU.edit'])->syncRoles([$role1, $role2]);
        */

    }
}
