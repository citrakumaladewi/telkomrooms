<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Layout</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: white;
        }
        .header {
            background-color: #8B0000; /* Warna merah gelap */
            height: 80px;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }
        .nav-bar {
            background-color: #8B0000;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }
        .content {
            background-color: white;
            min-height: 500px;
            padding: 20px;
        }
        .footer {
            background-color: #8B0000;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="header"></div>
    <div class="nav-bar">
        <div></div> <!-- Bisa diisi logo/menu -->
        <div>
            <span>🌍</span>
            <span>👤</span>
        </div>
    </div>
    <div class="content">
        <!-- Konten utama -->
    </div>
    <div class="footer"></div>
</body>
</html>