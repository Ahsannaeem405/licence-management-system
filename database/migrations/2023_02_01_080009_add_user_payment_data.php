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
        Schema::table('users', function (Blueprint $table) {
            $table->text('next_payment')->nullable();
            $table->text('stripe_id')->nullable();
            $table->text('pack_id')->nullable();;
            $table->text('activated')->nullable();;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('next_payment');
            $table->dropColumn('stripe_id');
            $table->dropColumn('pack_id');
            $table->dropColumn('activated');


        });
    }
};
