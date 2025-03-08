<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Berhasil</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }

        .success-container {
            text-align: center;
            background: #ffffff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            color: #333;
            animation: fadeIn 1s ease-in-out;
        }

        .success-icon {
            font-size: 60px;
            color: #28a745;
            animation: bounce 1s ease-in-out infinite alternate;
        }

        .success-title {
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0;
        }

        .success-message {
            font-size: 18px;
            line-height: 1.6;
        }

        .btn-home {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }

        .btn-home:hover {
            background-color: #0056b3;
        }

        @keyframes bounce {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-10px);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">✅</div>
        <h1 class="success-title">Pengaduan Berhasil Dikirim!</h1>
        <p class="success-message">
            Terima kasih atas partisipasi Anda dalam menjaga integritas dan transparansi. 
            Kami akan segera menindaklanjuti laporan Anda dengan serius dan sebaik mungkin.
        </p>
    </div>
</body>
</html>
