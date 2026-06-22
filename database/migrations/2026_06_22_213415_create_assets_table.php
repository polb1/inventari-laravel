/** ------ TAULA DE ASSETS (DISPOSITIUS) ------ */

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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('serialNumber');
            $table->string('marca');
            $table->string('model');
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->enum('estat', ['Assignat',  'Disponible', 'Revisar', 'Descartat', 'Baixa']);
            $table->string('ubicacio')->nullable();
            $table->date('data_compra')->nullable();
            $table->decimal('preu', 8, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
