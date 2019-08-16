<?
if (isset($_POST['title']) && isset($_POST['info']))
{

    $title = $_POST['title'];
    $info = $_POST['info'];

    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/images/';

    $uploadtobase = '/images/' . basename($_FILES['img']['name']);

    $uploadfile = $uploaddir . basename($_FILES['img']['name']); 

    if (copy($_FILES['img']['tmp_name'], $uploadfile))
    {
        echo "<h3>Файл успешно загружен на сервер</h3>";
    }
    else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

    $connect = mysql_connect(localhost, root, '');
    $select_db = mysql_select_db('articles web-site');

    mysql_query("SET NAMES 'cp1251'");

    mysql_query("INSERT INTO `articles` 
    (`num`, `title`, `previewimage`, `content`) 
    VALUES 
    (NULL, '$title', '$uploadtobase', '$info');");  

    echo "<h3>Данные успешно добавлены.</h3>";
    echo "<a href='http://web-articles.ru/'>Перейти на сайт...</a>";
}
else
{
    echo "Данные не переданы.";
}
