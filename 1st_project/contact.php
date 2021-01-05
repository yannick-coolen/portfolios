<?php
require_once('include/nav.php');
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