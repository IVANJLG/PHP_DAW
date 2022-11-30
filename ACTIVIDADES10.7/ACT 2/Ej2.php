<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        Confeccionar una clase Menu, con los atributos titulo y enlace (ambos son arrays). Crear los métodos
    necesarios que permitan añadir elementos al menú. Crear los métodos que permitan mostrar el menú en forma
    horizontal o vertical (según que método llamemos).
    -->

    <?php
        include_once "Menu.php";

        $menu1 = new Menu();
		$menu2 = new Menu();

			$menu1->anadirTitulo("Google", "https://www.google.es/");
			$menu1->anadirTitulo("Bing", "https://www.bing.com/");
			$menu1->anadirTitulo("Yahoo", "https://es.yahoo.com/");
			$menu1->anadirTitulo("DuckDuckGo", "https://duckduckgo.com/");
			$menu2->anadirTitulo("Marca", "https://www.marca.com/");
			$menu2->anadirTitulo("facebook", "https://www.facebook.com/");
			$menu2->anadirTitulo("instagram", "https://www.instagram.com/");

			echo $menu1->mostrarMenu("x");
			echo "<br><br>";
			echo $menu1->mostrarMenu("y");
			echo "<br><br>";
			echo $menu2->mostrarMenu("y");
			echo "<br><br>";
			echo $menu2->mostrarMenu("x");
    ?>
</body>
</html>