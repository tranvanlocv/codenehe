<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập VNPT</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            background-image: url('image/backgroundvnpt1.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            overflow-x: hidden;
            
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 22px;
            color: #333;
        }

        .login-container img {
            width: 100px;
            margin-bottom: 20px;
        }

        .form-input {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-input label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-input input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 13px;
            flex-wrap: wrap;
        }

        .options div {
            display: flex;
            align-items: center;
        }

        .options a {
            color: #007bff;
            text-decoration: none;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            .login-container {
                padding: 20px 15px;
            }
            .login-container h2 {
                font-size: 20px;
            }
            .login-container img {
                width: 80px;
            }
            .form-input input {
                padding: 10px;
            }
            .login-btn {
                padding: 10px;
            }
        }

        @media (max-width: 400px) {
            .login-container {
                padding: 15px 10px;
            }
            .login-container h2 {
                font-size: 18px;
            }
            .login-container img {
                width: 70px;
            }
            .form-input input {
                padding: 8px;
            }
            .login-btn {
                padding: 8px;
            }
        }
    </style>
</head>
<body>

<?php
$message = ""; // Thông báo lỗi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra tài khoản cứng (tạm thời)
    if ($username === 'admin' && $password === '123456') { 
        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // Lưu cookie 30 ngày
            setcookie('password', $password, time() + (86400 * 30), "/");
        }
        header("Location: main.php"); // Chuyển hướng nếu đăng nhập thành công
        exit();
    } else {
        $message = "Sai tên đăng nhập hoặc mật khẩu."; // Sai tài khoản
    }
}
?>

    <div class="login-container">
        <img src="image/logovnpt.png" alt="VNPT Logo">
        <h2>Đăng nhập</h2>

        <form method="post">
            <?php if (!empty($message)) : ?>
                <p style="color: red;"><?php echo $message; ?></p>
            <?php endif; ?>

            <div class="form-input">
                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập"
                       value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>" required>
            </div>

            <div class="form-input">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu"
                       value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>" required>
            </div>

            <div class="options">
                <div>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Ghi nhớ đăng nhập</label>
                </div>
                <a href="forgot_password.php">Quên mật khẩu?</a>
            </div>

            <button type="submit" name="login" class="login-btn">Đăng nhập</button>
        </form>
    </div>

</body>
</html>
