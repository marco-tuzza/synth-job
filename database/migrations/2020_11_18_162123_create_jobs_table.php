<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('category_id');
            $table->text('description');
            $table->foreignId('company_id');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');

            $table->foreign('company_id')
            ->references('id')
            ->on('companies')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
