<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->after('name');
            $table->enum('role', ['admin', 'ticket seller', 'driver', 'customer'])->after('last_name');
            $table->string('phone_num')->after('password')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['last_name', 'role', 'phone_num']);
        });
    }
};
