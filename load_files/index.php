<?php
$connect = mysqli_connect("localhost", "qqq", "www", "eee");

if (!empty($_POST) or !empty($_FILES)) {

    $url       = 'https://time100.ru/api.php';
    $data_time = file_get_contents($url);
    $data_time = date('Y-m-d H:i:s', $data_time);
    $rand_n    = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $rand_n    = substr(str_shuffle($rand_n), 0, 15);

    if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $destiation_dir = dirname(__FILE__) . '/files/' . $rand_n . '_' . $_FILES['file']['name'];
        $url            = '/files/' . $rand_n . '_' . $_FILES['file']['name'];
        if (move_uploaded_file($_FILES['file']['tmp_name'], $destiation_dir)) {

            $query_user = mysqli_query($connect, "INSERT INTO `1_file` (`name`, `size`, `url`, `data_add`)
    VALUES ('{$_FILES["file"]["name"]}','{$_FILES["file"]["size"]}', '{$url}', '{$data_time}');");
            if ($query_user) {
                echo 'Файл загружен';
            } else {
                echo 'Ошибка загрузки';
            }
        } else {
            echo 'Ошибка загрузки';
        }
    } else {
        echo 'Ошибка загрузки';
    }

}
?>
<html>
<head>
<title>Загрузка файла</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>Загрузка файла</h1>

<div class="container">
  <div class="row">
    <div class="col">
      <form name="file" enctype="multipart/form-data" method="post">
        <div class="form-group">
          <label for="file">Файл:</label>
          <input type="file" class="form-control-file" id="file" name="file">
          <input type="submit" name="button" />
        </div>
      </form>

    </div>
    <div class="col">
      <?
$query = mysqli_query($connect, "SELECT * FROM `1_file` ORDER BY `data_add` DESC LIMIT 10");
if ($query) {
    while ($x = mysqli_fetch_array($query)) {
        echo "Файл: <a href='." . $x['url'] . "'>" . $x['name'] . "</a> Размер: " . $x['size'] . " Дата/время загрузки: " . $x['data_add'] . " </br>";
    }
}
?>
    </div>
  </div>

</div>
</body>
</html>