<?php namespace AmunRe\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmunreEventsEvents extends Migration
{
    public function up()
    {
        Schema::create('amunre_events_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('slug', 255);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amunre_events_events');
    }
}
