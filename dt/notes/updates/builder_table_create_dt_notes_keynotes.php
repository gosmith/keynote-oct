<?php namespace Dt\Notes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDtNotesKeynotes extends Migration
{
    public function up()
    {
        Schema::create('dt_notes_keynotes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('number', 25);
            $table->string('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dt_notes_keynotes');
    }
}
