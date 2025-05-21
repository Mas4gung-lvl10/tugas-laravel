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
        $table->foreignId('article_id')->after('comment')->constrained()->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('article_comments', function (Blueprint $table) {
        $table->dropForeign(['article_id']);
        $table->dropColumn('article_id');
    });
}
};
