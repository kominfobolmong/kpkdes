<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapitulasiPendidiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekapitulasi_pendidiks', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->foreignId('id_opd');
            $table->foreignId('id_jenis');
            $table->foreignId('id_kecamatan');
            $table->string('jenjang')->nullable();
            $table->string('pendidik_asn_s1')->nullable();
            $table->string('pendidik_asn_non_s1')->nullable();
            $table->string('pendidik_non_asn_s1')->nullable();
            $table->string('pendidik_non_asn_non_s1')->nullable();
            $table->string('administrasi_asn_s1')->nullable();
            $table->string('administrasi_asn_non_s1')->nullable();
            $table->string('administrasi_non_asn_s1')->nullable();
            $table->string('administrasi_non_asn_non_s1')->nullable();
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
        Schema::dropIfExists('rekapitulasi_pendidiks');
    }
}
