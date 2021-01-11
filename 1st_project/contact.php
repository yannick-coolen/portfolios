<?php
require_once('includes/nav.php');
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
            </section>
        </article>
    </main>
    <?php
    require_once('includes/footer.php');
    ?>