<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('phone')->nullable()->after('password');
            $table->boolean('gender')->nullable()->after('phone');
            $table->string('address')->nullable()->after('gender');
            $table->string('dob')->nullable()->after('address');
            $table->boolean('roles')->nullable()->after('dob');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //

        });
    }
}
