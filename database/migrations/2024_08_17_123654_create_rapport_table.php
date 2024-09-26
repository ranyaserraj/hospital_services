<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportTable extends Migration
{
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id'); // Clé étrangère
            $table->date('hospitalization_start');
            $table->date('hospitalization_end');
            $table->text('reason');
            $table->text('history');
            $table->date('operation_date')->nullable();
            $table->string('intervention_title')->nullable();
            $table->text('progress')->nullable();
            $table->text('discharge_decision');
            $table->date('discharge_date');
            $table->text('rehabilitation')->nullable();
            $table->text('treatment')->nullable();
            $table->date('follow_up_date')->nullable();
            $table->timestamps();

            // Définir la clé étrangère
            $table->foreign('user_id')->references('id_p')->on('patients')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rapports');
    }
}
