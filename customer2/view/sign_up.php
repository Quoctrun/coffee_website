<?php include "../model/sign_up.php" ?>

<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caffe Monster</title>
    <link rel="icon" type="image" href="img/logo-tap.png">
    <link rel="stylesheet" href="css/StyleSignUp.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <div class="navbar-index">
            <a href="index.php"><img src="img/logo.png" class="logo" alt="Logo Caffe Monster"></a>
            <h1 id="Title">Đăng ký</h1>
        </div>
        <p id="help">Hotline: 0354464053</p>
    </header>
    <main class="main">
        <div>
            <div style="background-color: rgb(69, 74, 77);">
                <div class="form-main">
                    <div class="element">
                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;"></div>
                        <div class="ft-main">
                            <div class="Title-form">
                                <div class="header-form">
                                    <div class="Tl-form">Đăng ký</div>
                                </div>
                            </div>
                            <div class="form-sign-up">
                            <form method="POST">
                                <div class="input">
                                    <div class="phone-number">
                                        <input class="input-phone" type="text" placeholder="Số điện thoại" autocomplete="tel" name="phone_number" required>
                                    </div>
                                </div>
                                <div id="phone-error" aria-live="polite"></div>
                                <button class="creat" type="submit" name="submit">Tiếp theo</button>
                            </form>
                            </div>
                            
                            <div class="footer-form">
                                <div class="have-ac">Bạn đã có tài khoản? <a class="nav-signin" href="sign_in.php">Đăng nhập</a></div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Kiểm tra nếu có lỗi từ biến PHP và hiển thị lỗi
                        var errorMessage = "<?php echo $error_message; ?>";
                        if (errorMessage) {
                            document.getElementById("phone-error").innerText = errorMessage;
                        }
                    </script>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="inf-cfshop">
            <div class="ft-adress">
                <div class="ad-map">
                    <div class="ad-tl" style="min-width: 80px; margin-top: 0; margin-bottom: auto;"><b>Địa chỉ:</b></div>
                    <div class="ad-ct">70 Đ. Tô Ký, Tân Chánh Hiệp, Quận 12, Hồ Chí Minh</div>
                </div>
                <div class="map-ft" style="padding-bottom: 20px;"><a href="https://maps.app.goo.gl/jsNYvsDtjdViF1XcA" target="_blank" style="color: wheat;">Xem bản đồ</a></div>
                <div class="if-hotline">
                    <div class="hl-ft"><b>Hotline:</b></div>
                    <div class="nb-hl">0354464053</div>
                </div>
            </div>
            <div class="ft-dr-ite">
                <div class="ft-email-inf">
                    <div class="ft-email-inf-tl"><b>Email: </b></div>
                    <div class="ft-email-inf-ct"><a href="mailto:dcao9049@gmail.com" target="_blank">dcao9049@gmail.com</a></div>
                </div>
                <div class="ft-icon">
                    <a href="https://www.facebook.com/profile.html?id=100070397753672&mibextid=ZbWKwL" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/trunganhlt?igsh=MWR4azFjcWMzZ2g2dg==" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="https://www.tiktok.com/@quc.trung7365?_t=8nzILavzXsI&_r=1" target="_blank"><i class='bx bxl-tiktok'></i></a>
                </div>
                <div class="my-group" style="width: 100%;">
                    <fieldset>
                        <legend style="color: greenyellow;">Group members</legend>
                        <p>2251120204__Cao Tiến Đạt</p>
                        <p>2251120255__Lương Quốc Trung</p>
                    </fieldset>
                </div>
            </div>
        </div>
        <div style="background-color: black;color:white; width: 100%; height: 80px; display: flex; justify-content: center;"><b>@2024 Cafe Monster | All rights reserved.</b></div>
    </footer>
</body>
</html>