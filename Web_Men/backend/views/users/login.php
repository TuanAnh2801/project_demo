<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
    <link rel="stylesheet" href="http://localhost/Web_Men/frontend/assets/css/style.css">
</head>

<body>

</body>

</html>
<div class="login">
    <img src="../backend/assets/uploads/1679476732-f82f676e5d71f2ff05aaa8d852e771a1.jpg " >
</div>

<div class="container" style="max-width: 500px">
    <form method="post" action="">
        <h2>Form login</h2>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" value="" id="username" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="" id="password" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary" id="btn-primary"/>
            <p>
                Chưa có tài khoản, <a href="index.php?controller=login&action=register">Đăng ký</a> ngay
            </p>
        </div>
    </form>
</div>