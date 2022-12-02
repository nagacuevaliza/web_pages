<?php
require("connectdb.php");

if(isset($_GET["id"])){
    $result = mysqli_query($connect, "SELECT * FROM users WHERE id=".$_GET["id"]);
    
    if(!$result || mysqli_num_rows($result) == 0){
        echo "Этот пользователь не найден";
        exit;
    }
    
    $author = mysqli_fetch_assoc($result);
    $nameValue = $author["name"];
    $loginValue = $author["login"];
    $title = "Аккаунт";
}
else{
    $title = "Создание новой страницы";
}

$title="Аккаунт";
$content = "
<form method=\"POST\">
    <div>
        <h3>Имя: ".$nameValue."</h3>
    </div>
    
    <div>
        <h3>Логин: ".$loginValue."</h3>
    </div>


    
</form>
";

require("template.php");
?>
