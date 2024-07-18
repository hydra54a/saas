<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usersRolesAccessLimit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('userRoles_id')->unsigned();
            $table->bigInteger('rolesDetail_id')->unsigned();
            $table->smallInteger('status')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->foreign('userRoles_id')->references('id')->on('userRoles')->onDelete('cascade');
            $table->foreign('rolesDetail_id')->references('id')->on('rolesDetail')->onDelete('cascade');
            $table->index(['userRoles_id', 'rolesDetail_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usersRolesAccessLimit');
    }
};
