<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm User - Hệ thống quản lý nhân sự</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background-color: #f0f4f8;
            overflow-x: hidden;
        }

        .sidebar {
            width: 220px;
            background-color: #003a8c;
            color: white;
            padding: 20px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar img {
            width: 100px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .sidebar ul {
            list-style: none;
            width: 100%;
            padding-top: 10px;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #164a86;
            border-radius: 5px;
            padding-left: 10px;
        }

        .main-content {
            flex: 1;
            padding: 30px;
            background: white;
            border-radius: 15px;
            margin: 40px auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #1e56a0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .radio-group input[type="radio"] {
            margin-right: 5px;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-group button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-cancel {
            background-color: #6c757d;
            color: white;
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
        }

        .btn-cancel:hover {
            background-color: #5a6268;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .sidebar {
                width: 180px;
            }
            .main-content {
                margin: 20px;
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                width: 100px;
                padding: 10px;
            }
            .sidebar img {
                width: 70px;
            }
            .main-content {
                margin: 10px;
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="main.php">
            <img src="image/logovnpt.png" alt="VNPT Logo">
        </a>
        <ul>
            <li><a href="#">Hồ sơ</a></li>
            <li><a href="#">Bằng cấp</a></li>
            <li><a href="#">Chấm công</a></li>
            <li><a href="#">Lương</a></li>
            <li><a href="#">Quản lý user</a></li>
            <li><a href="logout.php">Đăng xuất</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Thêm User</h2>

        <form action="add_user_process.php" method="post">
            <div class="form-group">
                <label for="fullname">Họ và Tên</label>
                <input type="text" id="fullname" name="fullname" placeholder="Nhập họ và tên" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email" required>
            </div>

            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
            </div>

            <div class="form-group">
                <label>Vai trò</label>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="role" value="admin" required> Admin
                    </label>
                    <label>
                        <input type="radio" name="role" value="user" required> User
                    </label>
                </div>
            </div>

            <div class="btn-group">
                <button type="button" class="btn-cancel" onclick="history.back()">Hủy</button>
                <button type="submit" class="btn-submit">Thêm</button>
            </div>
        </form>
    </div>

</body>
</html>
