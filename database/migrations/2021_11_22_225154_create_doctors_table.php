<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("phone");
            $table->foreignId("clinic_id")->constrained("clinics")->onUpdate("CASCADE")->onDelete("CASCADE");
            $table->enum("shift" ,["morning" ,"evening"]);
            $table->enum("title" ,["professor" ,"consultant","specialist"]);
            $table->decimal("ex_fees");
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
        Schema::dropIfExists('doctors');
    }
}
