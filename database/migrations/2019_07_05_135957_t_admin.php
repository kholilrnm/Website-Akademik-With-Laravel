<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TAdmin extends Migration
{
    public function up()
    {
        Schema::create('t_admin', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->char('u_adm');
            $kolom->char('p_adm');
            $kolom->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('t_admin');
    }
}
