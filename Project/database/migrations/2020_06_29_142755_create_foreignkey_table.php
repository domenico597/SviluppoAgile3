<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignkeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Hosting
        Schema::table('hostings', function(Blueprint $table0) {
            $table0->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade'); });

        Schema::table('hostings', function(Blueprint $table0) {
            $table0->foreign('genre_id')->references('id')
                ->on('genres')->onDelete('cascade'); });
        //Enter
        Schema::table('enters', function(Blueprint $table0) {
            $table0->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade'); });

        Schema::table('enters', function(Blueprint $table0) {
            $table0->foreign('hosting_id')->references('id')
                ->on('hostings')->onDelete('cascade'); });
        
        //BanUser
        Schema::table('banUsers', function(Blueprint $table0) {
            $table0->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade'); });

        Schema::table('banUsers', function(Blueprint $table0) {
            $table0->foreign('hosting_id')->references('id')
                ->on('hostings')->onDelete('cascade'); });

        //PlayList
        Schema::table('playlists', function(Blueprint $table0) {
            $table0->foreign('hosting_id')->references('id')
                ->on('hostings')->onDelete('cascade'); });

        Schema::table('playlists', function(Blueprint $table0) {
            $table0->foreign('music_id')->references('id')
                ->on('musics')->onDelete('cascade'); });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
