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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('test_type');
            $table->integer('test_code');
            $table->char('no1');
            $table->char('no2');
            $table->char('no3');
            $table->char('no4')->nullable();
            $table->char('no5')->nullable();
            $table->char('no6')->nullable();
            $table->char('no7')->nullable();
            $table->char('no8')->nullable();
            $table->char('no9')->nullable();
            $table->char('no10')->nullable();
            $table->char('no11')->nullable();
            $table->char('no12')->nullable();
            $table->char('no13')->nullable();
            $table->char('no14')->nullable();
            $table->char('no15')->nullable();
            $table->char('no16')->nullable();
            $table->char('no17')->nullable();
            $table->char('no18')->nullable();
            $table->char('no19')->nullable();
            $table->char('no20')->nullable();
            $table->char('no21')->nullable();
            $table->char('no22')->nullable();
            $table->char('no23')->nullable();
            $table->char('no24')->nullable();
            $table->char('no25')->nullable();
            $table->char('no26')->nullable();
            $table->char('no27')->nullable();
            $table->char('no28')->nullable();
            $table->char('no29')->nullable();
            $table->char('no30')->nullable();
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
        Schema::dropIfExists('tests');
    }
};
