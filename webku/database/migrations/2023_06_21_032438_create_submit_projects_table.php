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
        Schema::create('submit_projects', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->string('title');
            $table->text('members');
            $table->text('description');
            $table->string('ppt');
            $table->string('project');
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
        Schema::dropIfExists('submit_projects');
    }
};
