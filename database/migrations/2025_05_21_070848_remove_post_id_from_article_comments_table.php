<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('article_comments', function (Blueprint $table) {
        $table->dropForeign(['post_id']); // jika ada foreign key
        $table->dropColumn('post_id');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('article_comments', function (Blueprint $table) {
        $table->foreignId('post_id')->nullable();
    });
}
};
