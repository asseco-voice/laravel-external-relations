<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_relations', function (Blueprint $table) {
            $table->id();
            $table->morphs("relatable");
            $table->string("service");

            //temp internal and external
            $table->string("relation_type");

            $table->string("model");
            $table->string("model_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('external_relations');
    }
}
