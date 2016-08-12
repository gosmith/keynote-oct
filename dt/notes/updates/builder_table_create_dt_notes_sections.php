<?php namespace Dt\Notes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDtNotesSections extends Migration
{
    public function up()
    {
        Schema::create('dt_notes_sections', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('number', 25);
            $table->string('name');
            $table->primary(['number']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dt_notes_sections');
    }
}
