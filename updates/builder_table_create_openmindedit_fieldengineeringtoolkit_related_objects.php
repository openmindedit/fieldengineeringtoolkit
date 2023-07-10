<?php namespace OpenMindedIT\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenMindedITFieldEngineeringToolkitRelatedObjects extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_fieldengineeringtoolkit_related_objects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('object_id');
            $table->string('related_object_id');
            $table->integer('site_id')->nullable();
            $table->integer('site_root_id')->nullable();
            $table->integer('objects_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_fieldengineeringtoolkit_related_objects');
    }
}