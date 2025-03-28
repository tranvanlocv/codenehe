<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Lại Mật Khẩu</title>
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
            background: url('image/backgroundvnpt1.jpg') no-repeat center center fixed;
            background-size: cover;
            padding: 15px;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            width: 100%;
            max-width: 400px;
            padding: 25px;
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
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="text"]:focus, 
        input[type="password"]:focus {
            border-color: #1e56a0;
            outline: none;
            box-shadow: 0 0 5px rgba(30, 86, 160, 0.5);
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
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #164a86;
        }
        .footer-text {
            margin-top: 15px;
            font-size: 12px;
            color: #777;
        }

        /* Media query cho màn hình nhỏ hơn 400px */
        @media (max-width: 400px) {
            .container {
                padding: 20px 15px;
            }
            .container h2 {
                font-size: 20px;
            }
            input[type="text"], input[type="password"] {
                padding: 10px;
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
    <script>
        function validateForm() {
            const newPassword = document.getElementById("new-password").value;
            const confirmPassword = document.getElementById("confirm-password").value;

            if (newPassword !== confirmPassword) {
                alert("Mật khẩu mới và xác nhận mật khẩu không khớp. Vui lòng kiểm tra lại!");
                return false; // Ngăn gửi form nếu mật khẩu không khớp
            }
            return true; // Cho phép gửi form nếu hợp lệ
        }
    </script>
</head>
<body>

    <div class="container">
        <h2>Đặt lại mật khẩu</h2>
        <form action="" method="post" onsubmit="return validateForm()">
            <div class="input-group">
                <label for="otp_code">Nhập mã OTP</label>
                <input type="text" id="otp_code" name="otp_code" required placeholder="Nhập mã OTP">
            </div>

            <div class="input-group">
                <label for="new-password">Mật khẩu mới</label>
                <input type="password" id="new-password" name="new_password" required placeholder="Nhập mật khẩu mới">
            </div>

            <div class="input-group">
                <label for="confirm-password">Xác nhận mật khẩu</label>
                <input type="password" id="confirm-password" name="confirm_password" required placeholder="Nhập lại mật khẩu mới">
            </div>

            <button type="submit" class="btn">Xác nhận</button>
        </form>

        <p class="footer-text">© 2025 VNPT. Bảo mật thông tin của bạn là ưu tiên hàng đầu.</p>
    </div>

</body>
</html>
