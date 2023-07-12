<?php namespace OpenMindedIT\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenmindeditFieldengineeringtoolkitTodo extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_fieldengineeringtoolkit_todo', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('task');
            $table->text('description');
            $table->date('deadline');
            $table->string('site_id')->nullable();
            $table->string('site_root_id')->nullable();
            $table->string('engineer_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_fieldengineeringtoolkit_todo');
    }
}
