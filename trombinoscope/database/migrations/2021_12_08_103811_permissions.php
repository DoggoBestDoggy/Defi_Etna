<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!schema::hasTable('permissions')) {
            Schema::create('permissions', function (Blueprint $table) {
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
        Schema::dropIfExists('permissions');
    }
}
