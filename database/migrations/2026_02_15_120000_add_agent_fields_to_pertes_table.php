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
        if (!Schema::hasTable('pertes')) {
            return;
        }

        Schema::table('pertes', function (Blueprint $table) {
            if (!Schema::hasColumn('pertes', 'numero_declaration')) {
                $table->string('numero_declaration')->nullable()->after('statut');
            }

            if (!Schema::hasColumn('pertes', 'validated_by')) {
                $table->unsignedBigInteger('validated_by')->nullable()->after('numero_declaration');
            }

            if (!Schema::hasColumn('pertes', 'validated_at')) {
                $table->timestamp('validated_at')->nullable()->after('validated_by');
            }

            if (!Schema::hasColumn('pertes', 'motif_rejet')) {
                $table->text('motif_rejet')->nullable()->after('validated_at');
            }

            if (!Schema::hasColumn('pertes', 'validated_by')) {
                $table->foreign('validated_by')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pertes', function (Blueprint $table) {
            // Supprimer la clé étrangère d'abord
            $table->dropForeign(['validated_by']);
            
            // Supprimer les colonnes
            $table->dropColumn([
                'numero_declaration',
                'validated_by',
                'validated_at',
                'motif_rejet',
            ]);
        });
    }
};
