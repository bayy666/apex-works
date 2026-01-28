<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section Styles</title>
    <style>
        body {
            background: #fff;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            max-width: 700px;
            margin: 40px auto;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }
        /* Style 1: Gambar kiri, teks kanan */
        .hero-style-1 {
            display: flex;
            align-items: center;
            background: #e9e6c7;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 32px 24px;
            gap: 32px;
        }
        .hero-style-1 img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 8px;
        }
        .hero-style-1-content {
            flex: 1;
        }
        .hero-style-1-title {
            font-size: 2rem;
            margin-bottom: 12px;
        }
        .hero-style-1-desc {
            margin-bottom: 18px;
            color: #444;
        }
        .hero-style-1-btn {
            background: #222;
            color: #fff;
            border: none;
            padding: 10px 28px;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }
        /* Style 2: Full background, teks di tengah */
        .hero-style-2 {
            position: relative;
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=700&q=80') center/cover no-repeat;
            border-radius: 10px;
            min-height: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            overflow: hidden;
        }
        .hero-style-2::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.45);
        }
        .hero-style-2-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }
        .hero-style-2-title {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .hero-style-2-desc {
            margin-bottom: 16px;
        }
        .hero-style-2-btn {
            background: #fff;
            color: #222;
            border: none;
            padding: 10px 28px;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }
        /* Style 3: Gambar atas, teks bawah, simple */
        .hero-style-3 {
            background: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 24px 18px 32px 18px;
            text-align: center;
        }
        .hero-style-3 img {
            width: 100%;
            max-width: 320px;
            border-radius: 8px;
            margin-bottom: 18px;
        }
        .hero-style-3-title {
            font-size: 1.7rem;
            margin-bottom: 10px;
        }
        .hero-style-3-desc {
            margin-bottom: 16px;
            color: #444;
        }
        .hero-style-3-btn {
            background: #e9e6c7;
            color: #222;
            border: none;
            padding: 10px 28px;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Style 1: Gambar kiri, teks kanan -->
        <div class="hero-style-1">
            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" alt="Hero 1">
            <div class="hero-style-1-content">
                <div class="hero-style-1-title">Hero Style 1</div>
                <div class="hero-style-1-desc">Layout gambar di kiri, teks dan tombol di kanan. Cocok untuk landing page modern.</div>
                <button class="hero-style-1-btn">Aksi Style 1</button>
            </div>
        </div>

        <!-- Style 2: Full background, teks di tengah -->
        <div class="hero-style-2">
            <div class="hero-style-2-content">
                <div class="hero-style-2-title">Hero Style 2</div>
                <div class="hero-style-2-desc">Background gambar penuh, teks dan tombol di tengah. Efek dramatis dan elegan.</div>
                <button class="hero-style-2-btn">Aksi Style 2</button>
            </div>
        </div>

        <!-- Style 3: Gambar atas, teks bawah, simple -->
        <div class="hero-style-3">
            <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="Hero 3">
            <div class="hero-style-3-title">Hero Style 3</div>
            <div class="hero-style-3-desc">Gambar di atas, teks dan tombol di bawah. Simple dan minimalis.</div>
            <button class="hero-style-3-btn">Aksi Style 3</button>
        </div>
    </div>
</body>
</html>
