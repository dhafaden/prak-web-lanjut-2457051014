<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Mata Kuliah</title>
    <style>
        body { margin: 0; min-height: 100vh; font-family: system-ui, sans-serif; background: #f4f7fb; color: #172033; }
        main { width: min(640px, calc(100% - 32px)); margin: 48px auto; padding: 32px; background: white; border-radius: 16px; box-shadow: 0 12px 36px rgba(23,32,51,.1); }
        h1 { margin-top: 0; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 7px; font-weight: 600; }
        input { width: 100%; box-sizing: border-box; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 1rem; }
        input:focus { outline: 3px solid rgba(37,99,235,.15); border-color: #2563eb; }
        .actions { display: flex; gap: 12px; align-items: center; margin-top: 28px; }
        button, a { padding: 11px 18px; border-radius: 8px; font-weight: 600; text-decoration: none; border: 0; cursor: pointer; }
        button { background: #2563eb; color: white; }
        a { background: #e2e8f0; color: #172033; }
        .error { color: #b91c1c; margin-top: 6px; font-size: .9rem; }
    </style>
</head>
<body>
    <main>
        <h1>Edit Mata Kuliah</h1>
        <p>Perbarui nama mata kuliah dan jumlah SKS.</p>

        @if ($errors->any())
            <div class="error">Periksa kembali data yang dimasukkan.</div>
        @endif

        <form action="{{ route('matakuliah.update', $mataKuliah) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama_mk">Nama Mata Kuliah</label>
                <input id="nama_mk" name="nama_mk" type="text" value="{{ old('nama_mk', $mataKuliah->nama_mk) }}" required>
                @error('nama_mk')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="sks">Jumlah SKS</label>
                <input id="sks" name="sks" type="number" min="1" max="100" value="{{ old('sks', $mataKuliah->sks) }}" required>
                @error('sks')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="actions">
                <button type="submit">Simpan Perubahan</button>
                <a href="{{ route('matakuliah.index') }}">Kembali ke daftar</a>
            </div>
        </form>
    </main>
</body>
</html>
