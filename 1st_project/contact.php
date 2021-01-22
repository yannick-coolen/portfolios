<?php
require_once('includes/nav.php');
require_once('includes/config/config.php');
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
                        <label for="">Fullname</label><br>
                        <input type="text" placeholder="Please, in your full name">
                        <br><br>
                        <label for="">Fullname</label><br>
                        <input type="text" placeholder="Please, in your full name">
                        <br><br>
                        <label for="">Fullname</label><br>
                        <input type="text" placeholder="Please, in your full name">
    
                    </form>
                </section>
            </section>
        </article>
    </main>
    <?php
    require_once('includes/footer.php');
    ?>