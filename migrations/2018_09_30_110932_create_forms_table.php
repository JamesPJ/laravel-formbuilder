<?php
/*--------------------
https://github.com/JamesPJ/laravelformbuilder
Licensed under the GNU General Public License v3.0
Author: Jasmine Robinson (JamesPJ.com)
Last Updated: 12/29/2018
----------------------*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');

            $table->string('name');
            $table->string('icon')->nullable();
            $table->string('visibility');
            $table->boolean('allows_edit')->default(false);

            $table->string('identifier')->unique();
            $table->text('form_builder_json')->nullable();
            $table->string('custom_submit_url')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
