<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueToMedicineMedicamentSourceRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('medicament_source_relations', function (Blueprint $table) {
            $table->unique('mm_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('medicament_source_relations', function (Blueprint $table) {
            $table->dropUnique('mm_id');
        });
    }
}
