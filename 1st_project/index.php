<title>Homepage</title>
</head>
<?php
require_once('include/nav.php');
?>
<main>
    <article>
        <!-- Main-section -->
        <section id="main-section">
            <!-- Date -->
            <section>
                <div class="main-container-date">
                    <p class="date">
                        <?php $mydate = getdate(date("U"));
                        echo "$mydate[weekday], $mydate[mday] $mydate[month],  $mydate[year]";
                        ?>
                    </p>
                </div>
            </section>
            <!-- Toptext -->
            <section>
                <div class="grid-container-top">
                    <div class="main-text">
                        <h2>Hello</h2>
                    </div>
                    <div class="profile-pic">
                        <img src="img/foto.png" alt="">
                    </div>
                </div>
            </section>
            <!-- main-middle -->
            <section>
                <div class="grid-container-middle">
                    <div class="main-left">
                        <p>test</p>
                        <p>test</p>
                        <p>test</p>
                        <p>test</p>
                        <p>test</p>
                        <p>test</p>
                        <p>test</p>
                        <p>test</p>
                        <p>test</p>
                        <p>test</p>
                        <p>test</p>
                        <p>test</p>
                    </div>
                    <div class="main-right">
                        <p>text</p> 
                    </div>
                </div>
            </section>
        </section>
    </article>
</main>

<?php
require_once('include/footer.php');
?>