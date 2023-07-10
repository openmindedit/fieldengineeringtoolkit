<?php namespace OpenMindedIT\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenMindedITFieldEngineeringToolkitMaps extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_fieldengineeringtoolkit_maps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('maps_name');
            $table->text('maps_location');
            $table->integer('maps_zoomlevel');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('site_id')->nullable();
            $table->integer('site_root_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_fieldengineeringtoolkit_maps');
    }
}