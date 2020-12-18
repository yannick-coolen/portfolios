<title>Homepage</title>
</head>
<?php
require_once('nav.php');
?>
<main>
    <section>
        <div class="main-container ">
            <p class="date">
                <?php $mydate = getdate(date("U"));
                echo "$mydate[weekday], $mydate[mday] $mydate[month],  $mydate[year]"; 
                ?>
            </p>
            <h2>Hello</h2>
        </div>
    </section>
</main>

<?php
require_once('footer.php');
?>