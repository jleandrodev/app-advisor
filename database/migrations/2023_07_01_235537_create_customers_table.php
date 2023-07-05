<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('doc')->nullable();
            $table->char('phone', 16);
            $table->char('cel', 16);
            $table->string('email', 100)->nullable();

            $table->char('cep', 9)->nullable();
            $table->string('adress', 100)->nullable();
            $table->string('number', 10)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('neighborhood', 100)->nullable();
            $table->char('state', 2)->nullable();
            $table->text('notes')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
}
