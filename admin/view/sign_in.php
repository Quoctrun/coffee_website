<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign In</title>
    <link rel="icon" type="image" href="img/logo-tap.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        html, body, main {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        /*--Css Main--*/
        div {
            display: block;
            unicode-bidi: isolate;
        }

        form {
            display: block;
            margin-top: 0rem;
            unicode-bidi: isolate;
        }

        .all {
            height: 100%;
            width: 100%;
            background-color: rgb(69, 74, 77);
            background-image: url(../img/sign_in.jpg);
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat;
            background-position: center; /* Center the image */
        }

        .form-main {
            background-image: url(../img/logo.png); 
            background-size: contain; 
            background-repeat: no-repeat; 
            background-position: left;
            margin: 0 200px 0 200px;
            min-height: 600px;
            max-width: 1300px;
            justify-content: flex-end;
            align-items: center;
            display: flex;
        }

        .element {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .ft-main {
            width: 400px;
            background-color: aliceblue;
            border-radius: 4px;
            overflow: hidden;
            box-sizing: border-box;
            box-shadow: 0 3px 10px 0 rgb(202, 198, 191);
        }

        .Title-form {
            box-sizing: border-box;
            min-height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-form {
            padding: 1.375rem 30px;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            display: flex;
        }

        .Tl-form {
            font-size: 1.25rem;
            max-width: 8.5rem;
            flex-shrink: 0;
        }

        .form-sign-up {
            overflow: hidden;
            padding: 0 30px 30px;
        }

        .input {
            margin-bottom: 10px;
        }

        .id-ac, .password {
            border: 1px solid rgb(53, 51, 51);
            border-radius: 2px;
            box-shadow: inset 0 2px 0 black;
            box-sizing: border-box;
            height: 2.5rem;
            overflow: hidden;
            width: 100%;
            align-items: center;
            display: flex;
        }

        .input-id, .input-password {
            border: 0;
            filter: none;
            flex: 1;
            flex-shrink: 0;
            outline: none;
            padding: .75rem;
        }

        input, .input2 {
            line-height: normal;
        }

        input, button {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        .id-error, .password-error {
            color: rgb(69, 74, 77);
            font-size: .75rem;
            margin: 0;
            min-height: 1rem;
            padding: .25rem 0 0;
        }

        .reset-pass {
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .reset {
            font-size: .75rem;
            color: blue;
        }

        .reset-pass >a {
            text-decoration: none;
            background-color: transparent;
        }

        .creat:disabled {
            cursor: not-allowed;
            opacity: .7;
        }

        .creat {
            margin-top: 50px;
            margin-bottom: 20px;
            width: 100%;
            background-color: black;
            box-shadow: rgb(69, 74, 77);
            color: white;
            text-transform: uppercase;
            height: 2.5rem;
            min-width: 8.75rem;
        }

        .creat:hover {
            background-color: rgb(69, 74, 77);
        }

        .line-or {
            padding: 20px;
            display: flex;
            align-items: center;
        }

        .p__MPF {
            height: 1px;
            background-color: #ccc;
            width: 100%;
        }

        .MPD {
            color: #ccc;
            font-size: .75rem;
            padding: 0 16px;
            text-transform: uppercase;
        }
        /*--Setting media--*/
        @media (max-width: 1092px) {
            .all {
                height: auto;
            }
            .header {
                padding: 15px 100px;
            }

            .form-main {
                height: 1100px;
                margin: auto auto;
                background-position-x: center;
                background-position-y: bottom;
                background-size: 650px;
                justify-content: baseline;
                align-items: baseline;
            }

            .element {
                margin-top: 100px;
                justify-content:center;
            }
        }

        @media (max-width: 476px) {
            .form-main {
                background-size: 500px;
                height: 940px;
            }
        }
    </style>
</head>
<body>
    <main class="main">
        <div class="all">
            <div style="height: 100%; display: flex; flex-direction: column; justify-content: center;">
                <div class="form-main">
                    <div class="element">
                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;"></div>
                        <div class="ft-main">
                            <div class="Title-form">
                                <div class="header-form">
                                    <div class="Tl-form">Đăng nhập</div>
                                </div>
                            </div>
                            <div class="form-sign-up">
                                <form action = "../model/sign_in.php" method="POST" >
                                    <div class="input">
                                        <div class="id-ac">
                                            <input class="input-id" type="text" placeholder="Số điện thoại" autocomplete="tel" name="phone_number" aria-invalid="false">
                                        </div>
                                    </div>
                                    <div id="id-error" aria-live="polite"></div>
                                    <div class="line-or">
                                        <div class="p__MPF"></div>
                                        <span class="MPD">###</span>
                                        <div class="p__MPF"></div>
                                    </div>
                                    <div class="input2">
                                        <div class="password">
                                            <input class="input-password" type="password" placeholder="Mật khẩu" autocomplete="tel" name="user_pass" aria-invalid="false">
                                        </div>
                                        <div id="password-error" aria-live="polite"></div>
                                    </div>
                                    <div class="reset-pass"><a class="reset" href="#">Quên mật khẩu</a></div>
                                    <button class="creat" type="submit" name="submit" >Đăng nhập</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>