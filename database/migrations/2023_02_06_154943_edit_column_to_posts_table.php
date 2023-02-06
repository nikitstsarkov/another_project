<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ //php artisan make:migration edit_column_to_posts_table (чтоыб изменить в ней что то типа названия столбца или
    //типа данных

    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('content ', 'post_content');
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
            $table->renameColumn('post_content', 'content');
        });
    }
}
