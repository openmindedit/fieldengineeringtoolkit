<?php namespace OpenMindedIT\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenMindedITFieldEngineeringToolkitEngineers extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_fieldengineeringtoolkit_engineers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('surname');
            $table->string('address');
            $table->string('zipcode');
            $table->string('city');
            $table->string('phone');
            $table->string('mail');
            $table->string('isactive');
            $table->string('skills');
            $table->string('visits_id')->nullable();
            $table->string('planning_id')->nullable();
            $table->integer('site_id')->nullable();
            $table->integer('site_root_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_fieldengineeringtoolkit_engineers');
    }
}