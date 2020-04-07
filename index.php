<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<!-- Template by html.am -->
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=1280, initial-scale=1">
        <title>2 Column Layout &mdash; Left Menu with Header &amp; Footer</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
      <?php
        if (isset($_SESSION['message']) && $_SESSION['message'])
        {
          printf('<b>%s</b>', $_SESSION['message']);
          unset($_SESSION['message']);
        }
       ?>
        <header id="header">
            <div class="innertube">
                <h1>Item locator</h1>
            </div>
        </header>
        <div id="wrapper">
            <main>
                <div id="content">
                    <div class="innertube">
                        <h1>Items</h1>
                        <?php
                        $contents = glob("../debug/uploaded_files/*");
                        echo '<div class="row">';
                        foreach ($contents as $content)
                        {
                            echo '<div class = "column">';
                            echo '<img src="'.$content.'">';
                            echo '</div>';
                        }
                        echo '</div>';
                        ?>
                    </div>
                </div>
            </main>

            <nav id="nav">
                <div class="innertube">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="upload.php">Upload images</a></li>
                        <li><a href="delete.php">Delete images</a></li>
                        <li><a href="../index.php">Main screen</a></li>
                        <li><a href="reverse.php">Reverse search</a></li>
                        <li><a href="database.php">Database</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </body>
</html>
