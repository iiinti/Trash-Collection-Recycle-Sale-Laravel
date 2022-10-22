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
        Schema::create('procurements', function (Blueprint $table) {
            $table->id();
            $table->integer('drive_id');
            $table->string('drive_number');
            $table->integer('account_id');
            $table->integer('amount');
            $table->text('material_types');
            $table->integer('payment');
            $table->integer('input_amount');
            $table->text('pp_weight');
            $table->text('id_weight');
            $table->text('poly_weight');
            $table->text('hdpe_weight');
            $table->text('pet_white_weight');
            $table->text('pet_green_weight');
            $table->text('pet_brown_weight');
            $table->text('tin_weight');
            $table->text('cardboard_weight');
            $table->text('glass_weight');
            $table->text('paper_weight');
            $table->text('can_weight');
            $table->text('cloth_bag_weight');
            $table->text('iron_weight');
            $table->text('black_hdpe_weight');
            $table->text('one_time_cup_weight');
            $table->text('paper_packet_weight');
            $table->text('shredded_paper_weight');
            $table->text('hard_hdpe_weight');
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
        Schema::dropIfExists('procurements');
    }
};
