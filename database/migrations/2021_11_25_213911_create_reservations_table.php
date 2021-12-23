<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId("user_id")->constrained("users")->onUpdate("CASCADE")->onDelete("CASCADE");
            // $table->foreignId("clinic_id")->constrained("clinics");
            $table->foreignId("doctor_id")->constrained("doctors")->onUpdate("CASCADE")->onDelete("CASCADE");
            // $table->enum("shift" ,["morning" ,"evening"]);
            // $table->decimal("ex_fees");
            $table->text("comment")->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
