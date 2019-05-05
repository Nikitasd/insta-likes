<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_active')->default(true);
            $table->char('page_type');
            $table->integer('number');
            $table->decimal('cost');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('last_user_id')->unsigned();
            $table->foreign('last_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->text('title');
            $table->string('image_url', 1000)->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('view_count')->unsigned()->default(0)->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
