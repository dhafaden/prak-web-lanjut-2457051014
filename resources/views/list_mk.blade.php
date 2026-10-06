<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mata Kuliah</title>
    <style>
        body { margin: 0; min-height: 100vh; font-family: system-ui, sans-serif; background: #f4f7fb; color: #172033; }
        main { width: min(960px, calc(100% - 32px)); margin: 40px auto; padding: 32px; background: white; border-radius: 16px; box-shadow: 0 12px 36px rgba(23,32,51,.1); }
        .header { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 24px; }
        h1 { margin: 0; }
        a { color: white; background: #2563eb; padding: 10px 16px; border-radius: 8px; font-weight: 600; text-decoration: none; }
        .message { padding: 12px 14px; border-radius: 8px; background: #dcfce7; color: #166534; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 14px 12px; border-bottom: 1px solid #e2e8f0; text-align: left; }
        th { color: #475569; }
        .empty { text-align: center; padding: 36px 12px; color: #64748b; }
    </style>
</head>
<body>
    <main>
        <div class="header">
            <div>
                <h1>Daftar Mata Kuliah</h1>
                <p>Data mata kuliah yang telah disimpan.</p>
            </div>
            <a href="{{ route('matakuliah.create') }}">+ Buat Mata Kuliah</a>
        </div>

        @if (session('success'))
            <div class="message">{{ session('success') }}</div>
        @endif

        @if ($mataKuliah->isEmpty())
            <div class="empty">Belum ada mata kuliah yang disimpan.</div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Dibuat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mataKuliah as $mataKuliahItem)
                        <tr>
                            <td>{{ $mataKuliahItem->id }}</td>
                            <td>{{ $mataKuliahItem->nama_mk }}</td>
                            <td>{{ $mataKuliahItem->sks }}</td>
                            <td>{{ $mataKuliahItem->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </main>
</body>
</html>
