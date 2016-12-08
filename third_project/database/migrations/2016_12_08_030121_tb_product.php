<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tb_product', function($v){  
                $v ->increments('prod_id');
                $v ->string('prod_name');
                $v ->string('prod_desc');
                $v -> timestamps();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          // Schema::dropIfExists('user'); //Drop table
        //  Schema::table('user', function($u){     //drop column
        //     $u -> dropColumn('lastname');

        // });
    }
}
