<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->after('id')->constrained('users');
        });

        Schema::table('faces', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->after('id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('faces', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
