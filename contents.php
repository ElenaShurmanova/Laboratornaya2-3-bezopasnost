<?php
    // session_start();
    // if (!$_SESSION['user']) {
    //     header('Location: /');
    // }
    $link = mysqli_connect('localhost', 'root', 'root', 'lw_2_bez');
    $sql = 'SELECT * FROM contents';
    $result = mysqli_query($link,$sql);

    // while ($row = mysqli_fetch_array($result)) {
    //     print("Город: " . $row['name'] . "; Идентификатор: . " . $row['id'] . "<br>");
    // }

    while ($row = mysqli_fetch_array($result)) {
        print("Идентификатор:" . $row['id'] . "<br>" . "Заголовок: " . $row['title'] . "<br>" . "Текст статьи: " . $row['content'] . "<br>" . "<br>");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Страница с контентом -->

    <div class="navigation">
        <a class="active" href="profile.php">Профиль</a>
    </div>
    <form>
        <!-- <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt=""> -->
        <h2><?= $_SESSION['contents']['title'] ?></h2>
        <!-- <a href="#"><?= $_SESSION['user']['email'] ?></a> -->

        <!-- <a href="vendor/logout.php" class="logout">Выход</a> -->
    </form>

</body>
</html>