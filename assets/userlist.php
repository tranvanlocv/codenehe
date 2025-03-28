<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý User - Hệ thống quản lý nhân sự</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            display: flex;
            background-color: #f0f4f8;
        }

        /* Sidebar Đồng Bộ */
        .sidebar {
            width: 220px;
            background-color: #004080;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px 0;
            height: 100vh;
            position: fixed;
        }

        .sidebar img {
            width: 120px;
            margin-bottom: 20px;
            align-self: center;
            cursor: pointer;
        }

        .sidebar a {
            display: block;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-left: 4px solid transparent;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #0056b3;
            border-left: 4px solid #ffc107; /* Tạo hiệu ứng active */
        }

        .sidebar a.active {
            background-color: #003a8c;
            border-left: 4px solid #ffc107;
            font-weight: bold;
        }

        .main-content {
            margin-left: 220px; /* Đẩy nội dung chính qua bên phải để tránh đè lên sidebar */
            flex: 1;
            padding: 30px;
            background-color: white;
            border-radius: 15px;
            margin: 40px auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
        }

        h2 {
            color: #1e56a0;
            margin-bottom: 20px;
        }

        .search-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            width: 70%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .search-bar button {
            padding: 10px 15px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #004093;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #003a8c;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        .edit-btn, .delete-btn {
            padding: 5px 10px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-btn:hover, .delete-btn:hover {
            background-color: #5d6d70;
        }

        @media (max-width: 768px) {
            .main-content {
                padding: 15px;
            }

            .search-bar input[type="text"] {
                width: 60%;
            }
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <a href="main.php">
            <img src="image/logovnpt.png" alt="VNPT Logo">
        </a>
        <a href="main.php">Hồ sơ</a>
        <a href="#">Bằng cấp</a>
        <a href="#">Chấm công</a>
        <a href="#">Lương</a>
        <a href="userlist.php" class="active">Quản lý user</a>
        <a href="logout.php">Đăng xuất</a>
    </div>

    <div class="main-content">
        <h2>Danh sách User</h2>

        <div class="search-bar">
            <input type="text" placeholder="Tìm user">
            <button>Tìm kiếm</button>
            <button onclick="window.location.href='adduser.php'">Thêm User</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và Tên</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th>Vai Trò</th>
                    <th>Trạng Thái</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>vana@gmail.com</td>
                    <td>0981 234 567</td>
                    <td>Người dùng</td>
                    <td>Hoạt động</td>
                    <td class="action-buttons">
                        <button class="edit-btn">✏️</button>
                        <button class="delete-btn">❌</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Trần Thị B</td>
                    <td>tranb@example.com</td>
                    <td>0902 345 678</td>
                    <td>Người dùng</td>
                    <td>Khóa</td>
                    <td class="action-buttons">
                        <button class="edit-btn">✏️</button>
                        <button class="delete-btn">❌</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lê Minh C</td>
                    <td>leminhc@yahoo.com</td>
                    <td>0976 789 101</td>
                    <td>Người dùng</td>
                    <td>Hoạt động</td>
                    <td class="action-buttons">
                        <button class="edit-btn">✏️</button>
                        <button class="delete-btn">❌</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Phạm Quang D</td>
                    <td>quangd@gmail.com</td>
                    <td>0911 223 344</td>
                    <td>Admin</td>
                    <td>Hoạt động</td>
                    <td class="action-buttons">
                        <button class="edit-btn">✏️</button>
                        <button class="delete-btn">❌</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
