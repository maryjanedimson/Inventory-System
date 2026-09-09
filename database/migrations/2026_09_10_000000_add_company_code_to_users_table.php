<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('users', 'company_code')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('company_code', 50)->nullable()->after('name');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('users', 'company_code')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('company_code');
            });
        }
    }
};