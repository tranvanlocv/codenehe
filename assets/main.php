<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Hệ thống quản lý nhân sự</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            min-height: 100vh;
            display: flex;
            background: #f0f4f8;
            overflow-x: hidden;
        }
        .sidebar {
            width: 220px;
            background-color: #003a8c;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px;
            height: 100vh;
        }
        .sidebar img {
            width: 100px;
            margin-bottom: 20px;
            align-self: center;
            cursor: pointer;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 10px;
            transition: 0.3s ease;
        }
        .sidebar a:hover {
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
            max-width: 800px;
        }
        .main-content h2 {
            color: #1e56a0;
            margin-bottom: 10px;
        }
        .card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .card {
            width: 32%;
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
        .card img {
            width: 60px;
            margin-bottom: 15px;
        }
        .card p {
            font-size: 16px;
            color: #333;
            margin: 5px 0;
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
            .card {
                width: 48%;
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
            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <a href="main.php">
            <img src="image/logovnpt.png" alt="VNPT Logo">
        </a>
        <a href="#">Hồ sơ</a>
        <a href="#">Bằng cấp</a>
        <a href="#">Chấm công</a>
        <a href="#">Lương</a>
        <a href="#">Quản lý user</a>
        <a href="logout.php">Đăng xuất</a>
    </div>

    <div class="main-content">
        <h2>Hệ thống quản lý nhân sự</h2>
        <p>Chào mừng bạn đã đến với hệ thống của chúng tôi!</p>

        <div class="card-container">
            <div class="card">
                <img src="image/chấm công.jpg" alt="Số ngày công">
                <p>Số ngày công</p>
                <p>24/30 DAYS</p>
            </div>
            <div class="card">
                <img src="image/lương.png" alt="Lương hiện tại">
                <p>Lương hiện tại</p>
                <p>5.000.000 VNĐ</p>
            </div>
            <div class="card">
                <img src="image/vnpt.jpg" alt="Trang chủ cty">
                <p>Trang chủ công ty</p>
                <p>VNPT</p>
            </div>
        </div>
    </div>

</body>
</html>
