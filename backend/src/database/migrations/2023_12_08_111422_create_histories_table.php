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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->text('title');       // 自分年表タイトル
            $table->text('author');      // 作者名
            $table->integer('public')->default(0); // 公開フラグ 0:非公開 1:公開
            $table->text('member_id');   // 投稿者E-Mail
            $table->json('events');       // 自分年表情報 JSON
            $table->text('created');      // 作成日 YYYY-MM-DD HH:MM:SS
            $table->text('updated');      // 更新日 YYYY-MM-DD HH:MM:SS

            $table->foreign('member_id')->references('id')->on('members');
            $table->unique('member_id');
            $table->primary('id');
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
        Schema::dropIfExists('histories');
    }
};
