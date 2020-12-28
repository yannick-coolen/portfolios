<title>Homepage</title>
</head>
<?php
require_once('nav.php');
?>
<main>
    <article>
        <section id="main-section">
            <section>
                <div class="main-container">
                    <p class="date">
                        <?php $mydate = getdate(date("U"));
                        echo "$mydate[weekday], $mydate[mday] $mydate[month],  $mydate[year]";
                        ?>
                    </p>
                    <div class="grid-container">
                        <div class="main"><h2>Hello</h2></div>
                        <div class="profile-pic"><img src="img/foto.png" alt=""></div>
                    </div>
            </section>
        </section>
    </article>
</main>

<?php
require_once('footer.php');
?>
