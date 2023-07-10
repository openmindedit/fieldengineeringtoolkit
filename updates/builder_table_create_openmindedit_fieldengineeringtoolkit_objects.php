<?php namespace OpenMindedIT\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenMindedITFieldEngineeringToolkitObjects extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_fieldengineeringtoolkit_objects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('object_maxzoom');
            $table->string('object_name');
            $table->string('object_location');
            $table->text('object_description');
            $table->string('object_type')->nullable();
            $table->string('object_brand')->nullable();
            $table->string('object_model')->nullable();
            $table->string('object_archive');
            $table->text('object_parameters');
            $table->string('objects_id')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('customers_id')->nullable();
            $table->smallInteger('parent_id')->nullable();
            $table->string('ip')->nullable();
            $table->string('mac')->nullable();
            $table->integer('site_id')->nullable();
            $table->integer('site_root_id')->nullable();
            $table->string('code')->unique();
            $table->string('slug')->nullable();
            $table->string('marker')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_fieldengineeringtoolkit_objects');
    }
}