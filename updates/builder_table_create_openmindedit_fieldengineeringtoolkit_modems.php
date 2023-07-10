<?php namespace OpenMindedIT\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOpenmindeditFieldengineeringtoolkitModems extends Migration
{
    public function up()
    {
        Schema::create('openmindedit_fieldengineeringtoolkit_modems', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('cmts')->nullable();
            $table->string('mac_address');
            $table->text('issue');
            $table->string('customer_id')->nullable();
            $table->string('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('openmindedit_fieldengineeringtoolkit_modems');
    }
}
