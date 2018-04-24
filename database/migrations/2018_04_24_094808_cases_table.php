<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('gender');
            $table->integer('age');
            $table->string('missing_from');
            $table->dateTime('missing_date');
            $table->string('district');
            $table->string('police_station');
            $table->decimal('height', 8, 2);
            $table->integer('complexion');
            $table->integer('scar');
            $table->integer('mole');
            $table->integer('tatto');
            $table->integer('face');
            $table->integer('lower_dress');
            $table->integer('upper_dress');
            $table->integer('upper_dress_color');
            $table->integer('lower_dress_color');
            $table->string('photo');
            $table->string('contact_number');
            $table->longText('notes');
			$table->integer('created_by');	
			$table->integer('updated_by');	
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
        //
    }
}
