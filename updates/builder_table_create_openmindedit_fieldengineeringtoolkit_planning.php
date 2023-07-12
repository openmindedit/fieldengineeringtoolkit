<?php namespace OpenMindedIT\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenMindedITFieldEngineeringToolkitPlanning extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_fieldengineeringtoolkit_planning', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->dateTime('plandate');
            $table->timestamp('deleted_at')->nullable();
            $table->text('description');
            $table->string('status');
            $table->string('element');
            $table->string('engineer_id');
            $table->string('ticketid')->nullable();
            $table->integer('site_id')->nullable();
            $table->integer('site_root_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_fieldengineeringtoolkit_planning');
    }
}