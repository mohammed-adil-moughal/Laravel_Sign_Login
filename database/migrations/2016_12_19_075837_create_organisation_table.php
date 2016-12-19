<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('organisations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->Nullable;
            $table->string('address')->Nullable;
            $table->string('contact_person')->Nullable;
            $table->string('contact_email')->Nullable;
            $table->string('phone')->Nullable;
              $table->timestamp('created_at');
                $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('organisations');
    }
}
