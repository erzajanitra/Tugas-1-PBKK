<?php
//  dibuat ppake command -> php artisan make:model -m Article

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            // $table->string('author');
            $table->text('body');
            $table->string('excerpt');
            //  excerpt : menampilkan text tertentu (sneak peek)
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            // timestamps: untuk simpan record log 
        });
    }
    // setelah create table, run command php artisan migrate
    // nanti muncul tabel baru di phpmyadmin
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
