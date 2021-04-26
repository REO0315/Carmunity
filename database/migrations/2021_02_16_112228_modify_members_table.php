<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('mycar')->nullable()->change();
            $table->string('spot')->nullable()->change();
            $table->string('self')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('mycar')->nullable(false)->change();
            $table->string('spot')->nullable(false)->change();
            $table->string('self')->nullable(false)->change();
        });
    }
}
