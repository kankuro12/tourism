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
        Schema::table('events', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable()->after('id');

        });
        Schema::table('destinations', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable()->after('id');

        });
        Schema::table('festivals', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable()->after('id');

        });
        Schema::table('galleries', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable()->after('id');

        });
        Schema::table('hotels', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable()->after('id');

        });
        Schema::table('chapters', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable()->after('id');

        });
        Schema::table('experiences', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable()->after('id');

        });
        Schema::table('destination_types', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable()->after('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('slug');

        });
        Schema::table('destinations', function (Blueprint $table) {
            $table->dropColumn('slug');

        });
        Schema::table('festivals', function (Blueprint $table) {
            $table->dropColumn('slug');

        });
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn('slug');

        });
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('slug');

        });
        Schema::table('chapters', function (Blueprint $table) {
            $table->dropColumn('slug');

        });
        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn('slug');

        });
        Schema::table('destination_types', function (Blueprint $table) {
            $table->dropColumn('slug');

        });
    }
};
