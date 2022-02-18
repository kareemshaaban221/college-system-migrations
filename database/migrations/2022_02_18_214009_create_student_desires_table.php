<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDesiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_desires', function (Blueprint $table) {
            $table->foreignId('std_id')->index()->primary();
            $table->foreignId('desire_1_id')->nullable()->index();
            $table->foreignId('desire_2_id')->nullable()->index();
            $table->foreignId('desire_3_id')->nullable()->index();
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
        Schema::dropIfExists('student_desires');
    }
}
