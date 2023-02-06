<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumnDescriptionToPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ //php artisan make:migration delete_column_description_to_post_table (чтобы удалить что то из миграции)

    public function up()
    {
        Schema::table('post', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post', function (Blueprint $table) {
            $table->text('description')->nullable()->after('content');
        });
    }
}
