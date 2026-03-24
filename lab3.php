<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Практична робота №3</title>
</head>
<body>
    <?php
        echo "<h1>Мій перший PHP сайт</h1>";
        echo "<p>Hello world</p>";

        $navigation = ["Головна", "Галерея", "Контакти", "Про нас"];
        $technologies = ["HTML", "CSS", "PHP", "Git"];

        echo "<h3>Навігація:</h3><ul>";
        foreach ($navigation as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";

        echo "<h3>Технології:</h3><ol>";
        foreach ($technologies as $tech) {
            echo "<li>$tech</li>";
        }
        echo "</ol>";
    ?>
</body>
</html>