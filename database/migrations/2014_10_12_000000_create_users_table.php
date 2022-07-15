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
        Schema::create('users', function (Blueprint $table) {
            /* IDs */
            $table->uuid('id')->primary();
            /* Profile */
            $table->string('name_first');
            $table->string('name_middle')->nullable();
            $table->string('name_last');
            /* Identity */
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            /* Password */
            $table->string('password');
            $table->timestamp('password_updated_at')->nullable();
            /* Miscellaneous */
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
