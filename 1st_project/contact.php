<?php
require_once('includes/nav.php');
?>
<title>Contact</title>
</head>

<body>
    <main>
        <article>
<<<<<<< Updated upstream
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
                
                </div>
            </section>
            <!-- main-middle -->
            <section>
                <div class="grid-container-middle">
                <form action="" method="post">
                    <div class="main-left">
                    <label for="">Fullname</label><br>
                    <input type="text" name="" placeholder="Please, fill in your full name">
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

                    </form>
                </div>
=======
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

                    </div>
                </section>
                <!-- main-middle -->
                <section>
                    <form action="" method="post">
                        <div class="grid-container-middle">
                            <div class="main-left">
                                <label for="">Fullname</label>
                                <input type="text" placeholder="Please, in your full name">
                                
                            </div>
                            <div class="main-right">
                                <p>text</p>
                            </div>
                        </div>
                    </form>
                </section>
>>>>>>> Stashed changes
            </section>
        </article>
    </main>
    <?php
    require_once('includes/footer.php');
    ?>