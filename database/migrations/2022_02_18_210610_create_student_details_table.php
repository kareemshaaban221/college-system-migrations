<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(0)->nullable();
            $table->string('phone', 50)->nullable();
            $table->float('degree', 5, 2)->nullable();
            $table->string('img')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('std_id')->nullable()->index();
            $table->foreignId('dept_id')->nullable()->index();
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
        Schema::dropIfExists('student_details');
    }
}
