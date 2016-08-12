<?php namespace Dt\Notes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDtNotesSections extends Migration
{
    public function up()
    {
        Schema::table('dt_notes_sections', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('dt_notes_sections', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
