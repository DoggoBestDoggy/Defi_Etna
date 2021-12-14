<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RolesPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!schema::hasTable('roles_permissions')) {
            Schema::create('roles_permissions', function (Blueprint $table) {
                $table->id('id_permissions');
                $table->boolean('read');
                $table->boolean('add');
                $table->boolean('delete');
                $table->boolean('edit');
                $table->boolean('sort');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_permissions');
    }
}
