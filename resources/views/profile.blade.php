<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile</title>
        <style>
            body { font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; background:#ffffff; color:#111827; }
            .container { min-height:100vh; display:flex; align-items:center; justify-content:center; }
            .card { width:420px; background:transparent; padding:40px 20px 60px; border-radius:8px; text-align:center }
            .avatar-wrap { display:flex; align-items:center; justify-content:center; margin-bottom:28px }
            .avatar { width:140px; height:140px; border-radius:9999px; background:linear-gradient(180deg,#ffffff,#e6e6e6); display:flex; align-items:center; justify-content:center; box-shadow:0 0 0 6px #f3f4f6 }

            .bar { width:320px; height:56px; background:#d9d9d9; margin:18px auto; border-radius:6px; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:20px; color:#111 }
            .bar.small { height:48px; font-size:18px }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="avatar-wrap">
                    <div class="avatar" aria-hidden="true">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5z" fill="#9CA3AF"/>
                            <path d="M3 21c0-3.866 3.582-7 9-7s9 3.134 9 7v1H3v-1z" fill="#D1D5DB"/>
                        </svg>
                    </div>
                </div>

                <div class="bar">{{ $nama }}</div>
                <div class="bar small">KELAS {{ $kelas }}</div>
                <div class="bar">{{ $npm }}</div>
            </div>
        </div>
    </body>
</html>
