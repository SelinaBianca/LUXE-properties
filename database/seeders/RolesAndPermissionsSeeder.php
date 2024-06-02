<?php
//namespace Database\Seeders;
//
//use Illuminate\Database\Seeder;
//use Spatie\Permission\Models\Role as SpatieRole;
//use Spatie\Permission\Models\Permission;
//use App\Enums\Role;
//
//class RolesAndPermissionsSeeder extends Seeder
//{
//public function run()
//{
//    $permissions = [
//        'edit',
//        'delete',
//
//    ];
//
//    foreach ($permissions as $permission) {
//        Permission::create(['name' => $permission]);
//    }
//
//
//    foreach (Role::cases() as $role) {
//        SpatieRole::create(['name' => $role->name]);
//    }
//
//
//    SpatieRole::findByName(Role::SuperAdministrator->name)->givePermissionTo($permissions);
//    SpatieRole::findByName(Role::Moderator->name)->givePermissionTo('edit');
//}
//
//}
//
