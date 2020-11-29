<?php
// Funcion para obtener todas las carpetas de htdocs
function get_folder($route)
{
    if (is_dir($route)) {
        // Abrimos el directorio y iniciamos una lista
        $manager = opendir($route);
        echo "<ul>";
        // Recorremos todos los archivos
        while (($archive = readdir($manager)) !== false) {

            $route_complete = $route . "/" . $archive;

            if (
                $archive != "."
                && $archive != ".."

                && $archive != "applications.html"
                && $archive != "bitnami.css"
                && $archive != "dashboard"
                && $archive != "favicon.ico"
                && $archive != "func.php"
                && $archive != "img"
                && $archive != "index.php"
                && $archive != "index1.php"
                && $archive != "webalizer"
                && $archive != "xampp"

            ) {
                if (is_dir($route_complete)) {
                    echo "<li><a href='" . $archive . "'>" . $archive . "</a></li>";
                }
            }
        }
        closedir($manager);
        echo '</ul>';
    } else {
        // Por si la ruta es incorrecta
        echo "Error al encontrar la ruta";
    }
}
