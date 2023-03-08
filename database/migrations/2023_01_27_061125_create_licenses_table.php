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
            // $table->foreignId('service_id')->nullable()->constrained('services')->references('id')->cascadeOnDelete();
            $table->bigInteger('reffer_to')->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('price')->nullable();
            $table->date('purchase_date')->nullable();
            $table->longText('additional_info')->nullable();
            $table->string('license_owner')->nullable();
            $table->date('renew_date')->nullable();
            $table->tinyInteger('renew_alert')->nullable();
            $table->tinyInteger('expiry_alert')->nullable();
            $table->string('title')->nullable();
            $table->string('key')->nullable();
            $table->string('attachment')->nullable();
            $table->date('date_of_issue')->nullable();
            $table->date('date_of_expiry')->nullable();
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
