<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('git_user_activities', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->morphs('activitiable');
            $table->date('date')->index();
            $table->integer('gitlab_contributions')->unsigned()->default(0);
            $table->integer('gitlab_commits')->unsigned()->default(0);
            $table->integer('gitlab_loc')->unsigned()->default(0);
            $table->integer('gitlab_delayed_issues')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('git_user_activities');
    }
};