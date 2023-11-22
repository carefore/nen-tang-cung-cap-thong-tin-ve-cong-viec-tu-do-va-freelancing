<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$jobTitle = $_POST['jobTitle'];
$jobDescription = $_POST['jobDescription'];

// Chuẩn bị truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO jobs (job_title, job_description) VALUES ('$jobTitle', '$jobDescription')";

if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được lưu thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
