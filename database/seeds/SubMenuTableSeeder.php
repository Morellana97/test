<?php

use Illuminate\Database\Seeder;

class SubMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // menu para menu
        DB::table('sub_menu')->insert([
            'id'            => 1,
            'title' 	 	=> 'Menu',
            'description' 	=> 'listado de menu',
            'url' 			=> "menu",
            'icon' 		    =>  "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 2,
            'title' 	 	=> 'Crear Menu',
            'description' 	=> 'Creacion de menu',
            'url' 			=> "menu.create",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 2,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 3,
            'title' 	 	=> 'Editar Menu',
            'description' 	=> 'Edicion de menu',
            'url' 			=> "menu.update",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

         DB::table('sub_menu')->insert([
            'id'            => 4,
            'title' 	 	=> 'Vista Editar Menu',
            'description' 	=> 'Vista para editar menu',
            'url' 			=> "menu.edit",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 5,
            'title' 	 	=> 'Anular Menu',
            'description' 	=> 'Anulacion de menu',
            'url' 			=> "menu.anular",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 6,
            'title' 	 	=> 'Activar Menu',
            'description' 	=> 'Activacion de menu',
            'url' 			=> "menu.activar",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 7,
            'title' 	 	=> 'Buscar Menu',
            'description' 	=> 'Busqueda de menu de menu',
            'url' 			=> "menu.find",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 8,
            'title' 	 	=> 'Eliminar Menu',
            'description' 	=> 'Eliminacion de menu',
            'url' 			=> "menu.delete",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        // menu submenu
        DB::table('sub_menu')->insert([
            'id'            => 9,
            'title' 	 	=> 'Agregar submenu',
            'description' 	=> 'Vista para lista el submenu de un menu',
            'url' 			=> "menu.add",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 10,
            'title' 	 	=> 'Buscar submenu',
            'description' 	=> 'Buscador de la vista de submenu',
            'url' 			=> "menu.find_sub",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 11,
            'title' 	 	=> 'Editar submenu',
            'description' 	=> 'Edicion de submenu',
            'url' 			=> "menu.edit_sub",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 12,
            'title' 	 	=> 'Activar submenu',
            'description' 	=> 'Activacion de submenu',
            'url' 			=> "menu.activar_sub",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 13,
            'title' 	 	=> 'Anular submenu',
            'description' 	=> 'Anulacion de submenu',
            'url' 			=> "menu.anular_sub",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 14,
            'title' 	 	=> 'Eliminar submenu',
            'description' 	=> 'Eliminacion de submenu',
            'url' 			=> "menu.delete_sub",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        // menu de roles
        DB::table('sub_menu')->insert([
            'id'            => 15,
            'title'         => 'Roles',
            'description'   => 'Lista de roles',
            'url'           => "rol",
            'icon'          => "bx bx-id-card",
            'id_menu'       => 1,
            'order'         => 3
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 16,
            'title' 	 	=> 'Crear Rol',
            'description' 	=> 'Creacion de Rol',
            'url' 			=> "rol.create",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 17,
            'title' 	 	=> 'Vista para Editar Rol',
            'description' 	=> 'Vista de Edicion de Rol',
            'url' 			=> "rol.edit",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 18,
            'title' 	 	=> 'Editar Rol',
            'description' 	=> 'Edicion de Rol',
            'url' 			=> "rol.update",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 19,
            'title' 	 	=> 'Anular Rol',
            'description' 	=> 'Anulacion de Rol',
            'url' 			=> "rol.anular",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 20,
            'title' 	 	=> 'Activar Rol',
            'description' 	=> 'Activacion de Rol',
            'url' 			=> "rol.activar",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 21,
            'title' 	 	=> 'Eliminar Rol',
            'description' 	=> 'Eliminacion de Rol',
            'url' 			=> "rol.delete",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 22,
            'title' 	 	=> 'Buscar Rol',
            'description' 	=> 'Busqueda de roles',
            'url' 			=> "rol.find",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        // menu de usuarios
        DB::table('sub_menu')->insert([
            'id'            => 23,
            'title'         => 'Usuario',
            'description'   => 'Lista de usuarios',
            'url'           => "usuario",
            'icon'          => "bx bx-user-circle",
            'id_menu'       => 1,
            'order'         => 4
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 24,
            'title' 	 	=> 'Crear Usuario',
            'description' 	=> 'Creacion de Usuario',
            'url' 			=> "usuario.create",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 25,
            'title' 	 	=> 'Vista para Editar Usuario',
            'description' 	=> 'Vista de Edicion de Usuario',
            'url' 			=> "usuario.edit",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 26,
            'title' 	 	=> 'Editar Usuario',
            'description' 	=> 'Edicion de Usuario',
            'url' 			=> "usuario.update",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 27,
            'title' 	 	=> 'Anular Usuario',
            'description' 	=> 'Anulacion de Usuario',
            'url' 			=> "usuario.anular",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 28,
            'title' 	 	=> 'Activar Usuario',
            'description' 	=> 'Activacion de Usuario',
            'url' 			=> "usuario.activar",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 29,
            'title' 	 	=> 'Eliminar Usuario',
            'description' 	=> 'Eliminacion de Usuario',
            'url' 			=> "usuario.delete",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);

        DB::table('sub_menu')->insert([
            'id'            => 30,
            'title' 	 	=> 'Buscar Usuario',
            'description' 	=> 'Busqueda de Usuario',
            'url' 			=> "usuario.find",
            'icon' 		    => "bx bx-list-ul",
            'id_menu'		=> 1,
            'order'         => 1,
            'type'          => 2
        ]);
    }
}
