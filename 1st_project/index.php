<title>Homepage</title>
</head>
<?php
require_once('includes/nav.php');
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
                    <div>
                        <div class="profile-pic">
                            <img src="img/foto.png" alt="">
                        </div>
                        <div>
                            <h3>Yannick Coolen</h3>
                            <p>Web-Developer</p>
                            <!-- Start gradient line -->
                            <div class="gradient-line"></div>
                            <!-- End gradient line -->
                        </div>
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
require_once('includes/footer.php');
?>