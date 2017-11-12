<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Webpatser\Uuid\Uuid; // https://medium.com/@steveazz/setting-up-uuids-in-laravel-5-552412db2088

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designation', 100);
            $table->text('remarque')->nullable();
            $table->decimal('location_lat',10,8)->nullable();
            $table->decimal('location_long',11,8)->nullable();
            $table->uuid('auth_code')->nullable()->unique(); /*->default(Uuid::generate())*/
            $table->boolean('archived')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
