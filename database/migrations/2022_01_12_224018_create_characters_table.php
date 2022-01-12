<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->string('name', 30)->unique()->comment('キャラクター名');
            $table->unsignedInteger('age')->comment('年齢');
            $table->unsignedInteger('hp')->comment('HP');
            $table->unsignedInteger('mp')->comment('MP');
            $table->unsignedBigInteger('job_id')->index()->comment('ジョブID');
            $table->timestamps();
            // 外部キー制約
            $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
