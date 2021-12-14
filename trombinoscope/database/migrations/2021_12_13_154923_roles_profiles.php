<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RolesProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!schema::hasTable('roles_profiles')) {
            Schema::create('roles_profiles', function (Blueprint $table) {
                $table->id('id_role');
                $table->string('role_name', 45);
                $table->foreignId('id_permissions');
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
        Schema::dropIfExists('roles_profiles');
    }
}
