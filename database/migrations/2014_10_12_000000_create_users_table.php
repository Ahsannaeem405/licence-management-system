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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string('billing_name')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('role')->nullable();
            $table->string('image')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_name')->nullable();
            $table->foreignId('add_by')->nullable()->constrained('users')->references('id');
            $table->foreignId('package_id')->nullable()->constrained('packages')->references('id')->cascadeOnDelete();
            $table->string('active')->nullable();
            $table->string('verification_code')->nullable();
            $table->tinyInteger('is_verified')->default(0);
            $table->string('language')->default('en');
            $table->string('currency')->default('$');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
