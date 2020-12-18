        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>
        <footer>
            <p>Copyright &copy; 
                <?php $mydate = getdate(date("U"));
                    echo $mydate["year"]; 
                ?>
            </p>
        </footer>
        <script src="js/app.js"></script>
    </body>
</html>