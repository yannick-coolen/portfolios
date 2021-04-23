<?php
require_once('includes/config/config.php');
include 'includes/nav.php';

?>
<title>Contact</title>
</head>

<body>
    <main>
        <article>
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

                </section>
                <!-- main-middle -->
                <section>
                    <div class="grid-container-middle">
                        <div class="main-right">
                            <div class="contact-form">
                                <form action="" method="post">   
                                    <label for="">Fullname</label><br>
                                    <input type="text" placeholder="Please, in your full name">
                                    <br><br>
                                    <label for="">Fullname</label><br>
                                    <input type="text" placeholder="Please, in your full name">
                                    <br><br>
                                    <label for="">Fullname</label><br>
                                    <input type="text" placeholder="Please, in your full name">
                                    <br><br>
                                    <input type="button" value="Confirm" class="confirm-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </article>
    </main>
    <?php
    require_once('includes/footer.php');
    ?>