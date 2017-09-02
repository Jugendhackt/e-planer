<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('name', ['Deutsch', 'Deutsch', 'Englisch', 'Französisch', 'Spanisch', 'Chinesisch', 'Hebräisch', 'Griechisch', 'Latein', 'Mathematik', 'Physik', 'Chemie', 'Physik+X', 'Biologie', 'BioChemie', 'Musik', 'Erdkunde', 'Geschichte', 'Sozialwissenschaften', 'Politik', 'Kunst', 'Philosophie', 'Katholische Religion', 'Evangelische Religion', 'Pädagogik']);
            $table->text('description');
            $table->enum('type', ['Fach', 'Kurs']);
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
        Schema::dropIfExists('courses');
    }
}
