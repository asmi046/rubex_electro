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
        Schema::create('zayavkas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("familia")->comment("Фамилия");
            $table->string("name")->comment("Имя");
            $table->string("othestvo")->nullable()->comment("Отчество");
            $table->string("email")->comment("e-mail");
            $table->string("ogrn")->nullable()->comment("ОГРН");
            $table->string("inn")->nullable()->comment("ИНН");
            $table->string("orgforma")->comment("Организационная форма");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zayavkas');
    }
};
