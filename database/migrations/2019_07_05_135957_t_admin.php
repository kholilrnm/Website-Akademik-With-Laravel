<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TAdmin extends Migration
{
    public function up()
    {
        Schema::create('t_admin', function (Blueprint $kolom){
            $kolom->increments('id_adm');
            $kolom->char('u_adm');
            $kolom->char('p_adm');
            $kolom->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $kolom->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));        
        });
    }

    public function down()
    {
        Schema::drop('t_admin');
    }
}
