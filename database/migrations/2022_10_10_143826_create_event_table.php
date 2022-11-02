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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()
            ->index('fk_event_to_users'); 
            $table->string('name')->nullable();
            $table->string('instance')->nullable();
            $table->string('time')->nullable();
            $table->string('location')->nullable();
            $table->string('registration')->nullable();
            $table->string('category')->nullable();
            $table->longText('contact')->nullable();
            $table->string('invite_group_link')->nullable();
            $table->date('date_is_held')->nullable();
            $table->string('description')->nullable();
            $table->longText('poster')->nullable();
            $table->enum('status',[1,2]);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
};
