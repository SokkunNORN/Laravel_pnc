<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->command('Admin is super user and student is normal user');
            $table->timestamps();
        });

        // insert all row needed in our system
        DB::table('roles')->insert([
            'name' => 'Admin'
        ]);
        
        DB::table('roles')->insert([
            'name' => 'Student'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
