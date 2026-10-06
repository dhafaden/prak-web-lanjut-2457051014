<?php

namespace App\Models;

use Database\Factories\MataKuliahFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    /** @use HasFactory<MataKuliahFactory> */
    use HasFactory;

    use HasUuids;

    protected $table = 'mata_kuliah';

    protected $keyType = 'string';

    protected $guarded = [];
}
