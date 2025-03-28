<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu - VNPT</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('image/backgroundvnpt.jpg') no-repeat center center fixed;
            background-size: cover;
            padding: 15px;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            width: 100%;
            max-width: 400px;
            padding: 25px 20px;  /* Cân đối padding ngang */
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .container h2 {
            color: #1e56a0;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;  /* Tăng padding cho trải nghiệm tốt hơn */
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #1e56a0;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;  /* Tạo thêm khoảng trống để tránh quá sát input */
        }
        .btn:hover {
            background-color: #164a86;
        }
        .footer-text {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }

        /* Media Query cho tablet và điện thoại nhỏ */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
            .container h2 {
                font-size: 22px;
            }
            input[type="text"] {
                padding: 10px;
            }
            .btn {
                padding: 10px;
                font-size: 15px;
            }
        }

        /* Media Query cho điện thoại rất nhỏ */
        @media (max-width: 400px) {
            .container {
                padding: 18px 15px;
            }
            .container h2 {
                font-size: 20px;
            }
            input[type="text"] {
                padding: 8px;
            }
            .btn {
                padding: 10px;
                font-size: 15px;
            }
            .footer-text {
                font-size: 11px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Quên mật khẩu</h2>
        <form action="/change_password" method="post">
            <div class="input-group">
                <label for="email-or-name">Email hoặc tên</label>
                <input type="text" id="email-or-name" name="email_or_name" required placeholder="Nhập email hoặc tên">
            </div>
            <button type="submit" class="btn">Gửi OTP</button>
        </form>

        <p class="footer-text">© 2025 VNPT. Bảo mật thông tin của bạn là ưu tiên hàng đầu.</p>
    </div>

</body>
</html>
