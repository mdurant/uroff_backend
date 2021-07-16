<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence', function (Blueprint $table) {
            $table->id();
            $table->string('file_type');
            $table->string('name');
            $table->string('extension_file');
            $table->string('ip_client');
            $table->text('metadata');
            $table->string('hash_code');
            $table->string('curt');
            $table->string('case_number');
            $table->date('date_case');
            $table->text('labeling');
            $table->text('name_expert');
            $table->text('crime_address');
            $table->text('description');
            $table->string('photo');
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
        Schema::dropIfExists('evidence');
    }
}
