<?php
include "connect.php";

$sql = "INSERT INTO user(user_id, user_name, user_pass, phone_number, level)
VALUES 
        ('', 'Lương Quốc Trung', 'password1', '0123456781', 1),
        ('', 'Nguyễn Hồng Sơn', 'password2', '0123456782', 1),
        ('', 'Trần Thu Hương', 'password3', '0123456783', 1),
        ('', 'Phạm Quốc Khánh', 'password4', '0123456784', 1),
        ('', 'Lê Hoàng Minh', 'password5', '0123456785', 1),
        ('', 'Ngô Anh Dũng', 'password6', '0123456786', 1),
        ('', 'Đinh Thị Lan', 'password7', '0123456787', 1),
        ('', 'Trương Vĩnh Phúc', 'password8', '0123456788', 1),
        ('', 'Hoàng Thị Bích', 'password9', '0123456789', 1),
        ('', 'Vũ Đình Trung', 'password10', '0123456790', 1),
        ('', 'Nguyễn Thanh Tùng', 'password11', '0123456791', 1),
        ('', 'Bùi Minh Thư', 'password12', '0123456792', 1),
        ('', 'Phạm Anh Tuấn', 'password13', '0123456793', 1),
        ('', 'Lê Quốc Đạt', 'password14', '0123456794', 1),
        ('', 'Nguyễn Thị Kim', 'password15', '0123456795', 1),
        ('', 'Trần Văn Hà', 'password16', '0123456796', 1),
        ('', 'Hoàng Thị Hồng', 'password17', '0123456797', 1),
        ('', 'Ngô Đức Mạnh', 'password18', '0123456798', 1),
        ('', 'Lương Thị Hà', 'password19', '0123456799', 1),
        ('', 'Trịnh Văn Long', 'password20', '0123456800', 1),
        ('', 'Nguyễn Phương Linh', 'password21', '0123456801', 1),
        ('', 'Bùi Quang Huy', 'password22', '0123456802', 1),
        ('', 'Phạm Minh Hòa', 'password23', '0123456803', 1),
        ('', 'Lê Thị Tuyết', 'password24', '0123456804', 1),
        ('', 'Nguyễn Văn Khánh', 'password25', '0123456805', 1),
        ('', 'Trần Thị Nga', 'password26', '0123456806', 1),
        ('', 'Phan Minh Khoa', 'password27', '0123456807', 1),
        ('', 'Vũ Anh Quân', 'password28', '0123456808', 1),
        ('', 'Nguyễn Thị Lan', 'password29', '0123456809', 1),
        ('', 'Hoàng Văn Tùng', 'password30', '0123456810', 1),
        ('', 'Phạm Thu Trang', 'password31', '0123456811', 1),
        ('', 'Trần Quốc Toàn', 'password32', '0123456812', 1),
        ('', 'Nguyễn Thanh Huyền', 'password33', '0123456813', 1),
        ('', 'Bùi Văn Sơn', 'password34', '0123456814', 1),
        ('', 'Phạm Thị Hồng', 'password35', '0123456815', 1),
        ('', 'Lê Quang Dũng', 'password36', '0123456816', 1),
        ('', 'Nguyễn Đình Phúc', 'password37', '0123456817', 1),
        ('', 'Trần Văn Quý', 'password38', '0123456818', 1),
        ('', 'Ngô Thị Hà', 'password39', '0123456819', 1),
        ('', 'Phạm Thanh Hương', 'password40', '0123456820', 1),
        ('', 'Lê Văn Thành', 'password41', '0123456821', 1),
        ('', 'Nguyễn Quốc Anh', 'password42', '0123456822', 1),
        ('', 'Trần Thị Bích', 'password43', '0123456823', 1),
        ('', 'Nguyễn Hữu Thắng', 'password44', '0123456824', 1),
        ('', 'Bùi Thị Hoa', 'password45', '0123456825', 1),
        ('', 'Phạm Minh Tuấn', 'password46', '0123456826', 1),
        ('', 'Lê Anh Dũng', 'password47', '0123456827', 1),
        ('', 'Nguyễn Văn Hùng', 'password48', '0123456828', 1),
        ('', 'Trần Minh Tâm', 'password49', '0123456829', 1),
        ('', 'Phạm Thị Quỳnh', 'password50', '0123456830', 1)";

mysqli_query($conn, $sql);
$conn->close();
?>