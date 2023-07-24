<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('projects', function (Blueprint $table) {
            $table -> unsignedBigInteger('project_id');

            $table -> foreign('project_id')
            -> references('id')
            -> on ('users');
        });

        Schema::table('types', function (Blueprint $table) {
            $table -> unsignedBigInteger('project_id');

            $table -> foreign('project_id')
            -> references('id')
            -> on ('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('projects', function (Blueprint $table) {

            $table -> dropForeign('projects_project_id_foreign');

            $table -> dropColumn('project_id');
        });


        Schema::table('types', function (Blueprint $table) {

            $table -> dropForeign('types_project_id_foreign');

            $table -> dropColumn('project_id');
        });

    }
};
