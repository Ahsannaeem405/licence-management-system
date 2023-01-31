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
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->nullable()->constrained('departments')->references('id')->cascadeOnDelete();
            $table->foreignId('customer_id')->nullable()->constrained('users')->references('id')->cascadeOnDelete();
            $table->string('title');
            $table->string('service')->nullable();
            $table->string('key');
            $table->date('date_of_issue');
            $table->date('date_of_expiry');
            
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
        Schema::dropIfExists('licenses');
    }
};
