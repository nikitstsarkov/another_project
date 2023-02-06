<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDescriptionToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ //php artisan make:migration add_column_description_to_posts_table чтобы добавить добавление в миграцию

    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('description')->nullable()->after('content');  //php artisan migrate
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
           $table->dropColumn('description');   //php artisan migrate:rollback
        });
    }
}
