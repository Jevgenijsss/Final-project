<?php
    date_default_timezone_set('Europe/Copenhagen');
    include 'dbh.inc.php';
    include 'comments.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../aboutme/fontello/css/icon-font.css">
    
</head>

    <body>
    <nav>
            <div class="navigation">
            <h1>Jevgēnijs Varivončiks</h1>
            <h2>WEB Developer</h2>

            
                <a  href="../aboutme/aboutme.html" >
                    <span class="icon-about-me"></span>
                    About Me
                </a>
       

            <a href="../skills/skills.html">
                <span class="icon-star"></span>
                Skills
            </a>

            <a href="../projects/projects.html">
                <span class="icon-group-50"></span>
                Projects
            </a>

            <a href="../profexp/profexp.html">
                <span class="icon-proff-ex"></span>
                Professional Experience
            </a>

            <a class="active comments" href="../comments/index.php">
               
                Comments
            </a>

    </nav>
        <main>

        <header>Comments</header>
            <section class="section1">
            
        <?php
        getComments ($conn);
        echo "<form method='POST' action='".setComments($conn)."'>
            <input type='hidden' name='uid' value='Anonymous'>
            <input type='hidden' name='date' value=".date('Y-m-d H:i:s').">
            <textarea name='message'></textarea><br>
            <button type='submit' name='commentSubmit'>Submit</button>
        </form>";
        
        ?>
            </section>
        </main>
    </body>
</html>