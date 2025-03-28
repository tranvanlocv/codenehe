<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản người dùng</title>
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
            background-color: #f2f2f2;
        }

        .sidebar {
            width: 250px;
            background-color: #012a7d;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar img {
            width: 150px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            width: 100%;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .sidebar ul li a:hover {
            background-color: #0056b3;
        }

        .main-content {
            flex: 1;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .table-container {
            background-color: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }

        h2 {
            text-align: center;
            color: #012a7d;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 5px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
            color: #012a7d;
        }

        td {
            background-color: #f9f9f9;
        }

        .icon {
            cursor: pointer;
            font-size: 22px;
            color: #007bff;
            transition: color 0.3s;
        }

        .icon:hover {
            color: #0056b3;
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
            <li><a href="#">Bảng cấp</a></li>
            <li><a href="#">Chấm công</a></li>
            <li><a href="#">Lương</a></li>
            <li><a href="#">Quản lý user</a></li>
            <li><a href="logout.php">Đăng xuất</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="table-container">
            <h2>Danh sách tài khoản người dùng</h2>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>vana</td>
                        <td>********</td>
                        <td><span class="icon">&#x21bb;</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>tranb</td>
                        <td>********</td>
                        <td><span class="icon">&#x21bb;</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>leminhc</td>
                        <td>********</td>
                        <td><span class="icon">&#x21bb;</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>quangd</td>
                        <td>********</td>
                        <td><span class="icon">&#x21bb;</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>thuyd</td>
                        <td>********</td>
                        <td><span class="icon">&#x21bb;</span></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>hoangf</td>
                        <td>********</td>
                        <td><span class="icon">&#x21bb;</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
