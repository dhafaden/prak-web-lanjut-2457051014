<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('ALTER TABLE mata_kuliah ALTER COLUMN id DROP DEFAULT');
        DB::statement(
            'ALTER TABLE mata_kuliah ALTER COLUMN id TYPE uuid USING id::text::uuid'
        );
        DB::statement(
            "ALTER TABLE mata_kuliah ALTER COLUMN id SET DEFAULT gen_random_uuid()"
        );
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE mata_kuliah ALTER COLUMN id DROP DEFAULT');
        DB::statement(
            'ALTER TABLE mata_kuliah ALTER COLUMN id TYPE bigint USING id::text::bigint'
        );
        DB::statement(
            'ALTER TABLE mata_kuliah ALTER COLUMN id SET DEFAULT nextval(\'mata_kuliah_id_seq\')'
        );
    }
};
