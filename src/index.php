<?php
    if ($argc < 3) {
        die("Usage: php generate.php [command] [file_name]\n");
    }

    $command = $argv[1];
    $file_name = $argv[2];

    // Está es la logica donde depende del comando que realices puedes crear cierto archivo.
    if($command === 'view') {
        $content = 
        '
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Título de la página</title>
            </head>
        <body>
              
        </body>
        </html>
        ';
        file_put_contents($file_name . '.php', $content);
        echo "Archivo de vista generado: $file_name.php\n";
    } else if($command === 'php:delete') {
        $content = "<?php " . " " . "\n  // Tu lógica aquí\n?>\n";
        file_put_contents($file_name . '.php', $content);
        echo "Archivo de PHP generado: $file_name.php\n";
    } else {
        echo "Comando no válido. Usa 'view' o 'controller'.\n";
    }

    echo "Archivo generado: $file_name\n";

    // Comandos

    /**
     * Comando para generar una vista
     * 1.- php generate.php view nombre_del_archivo - No necesitas especificar .php porque ya el comando lo detecta automaticamente
     * 
     * Comando para generar un archivo php
     * 2.- php generate.php php:delete nombre_del_archivo_php - No necesitas especificar la extensión.
     */
?>