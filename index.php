<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    <title>Portfólio</title>
    <style>
        html,body{
            font-family: "Maven Pro", sans-serif;
        }

        .fonte-asap{
            font-family: "Asap", serif;
        }

        .fonte-inconsolata{
            font-family: "Inconsolata", serif;
        }

        .fonte-maven{
            font-family: "Maven Pro", sans-serif;
        }
    </style>
</head>
<body class="bg-[#16181b] text-white">
    <?php include('./componentes/header.php'); ?>

    <?php include('./componentes/projetos.php')?>

   <?php include('./componentes/footer.php') ?>
</body>
</html>