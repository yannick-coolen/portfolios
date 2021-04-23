<?php
    $button = array("button_1", "button_2", "button_3", "button_4"
);
?>

<title>Homepage</title>
</head>
<?php
include 'includes/nav.php';
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
                            <!-- End gradient line -->
                        </div>
                    </div>
                </div>
            </section>
            <div class="gradient-line"></div>
            <!-- main-middle -->


            <section>
                <div class="grid-container-middle">
                    <div class="main-left">
                    <?php
                        foreach($button as $btn) {
                        echo <<<_END
                                <div>
                                    <a><button class="btn">$btn</button></a>
                                </div>
                            _END;
                        }
                    ?>
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