<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->integer('design_id');
            $table->integer('user_id');
            $table->string('slug');
            $table->string('cover_image');
            $table->string('groom_name');
            $table->string('groom_full_name');
            $table->string('groom_info');
            $table->string('groom_image');
            $table->string('bride_name');
            $table->string('bride_full_name');
            $table->string('bride_info');
            $table->string('bride_image');
            $table->dateTime('wedding_date');
            $table->time('wedding_time_start');
            $table->time('wedding_time_end');
            $table->text('wedding_venue');
            $table->text('wedding_venue_address');
            $table->dateTime('reseption_date');
            $table->time('reseption_time_start');
            $table->time('reseption_time_end');
            $table->text('reseption_venue');
            $table->text('reseption_venue_address');
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitations');
    }
}
