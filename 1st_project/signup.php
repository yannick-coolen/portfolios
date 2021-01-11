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
                <div class="grid-container-middle">
                    <form action="" method="post">
                        <div class="main-left">
                        <label for="">Fullname</label><br>
                        <input type="text" name="" placeholder="Please, fill in your full name">
                        <br><br>
                        <label for="">Password</label><br>
                        <input type="password" name="" placeholder="Enter your password here">
                        <br>
                        <input type="button" value="Submit">
                    </form>
                </div>
            </section>
        </section>
        </article>
    </main>
    <?php
    require_once('includes/footer.php');
    ?>