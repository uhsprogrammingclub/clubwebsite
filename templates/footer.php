
        <!-- Footer -->
        <footer class = "col-md-12">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © UHS Software Development Club 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
     <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <?php if (isset($script))
            {
                echo "<script src=\"js/$script\"></script>";
            }
            else
            {
                echo "<script src=\"js/announcements.js\"></script>";
            }
        
    ?>

        
    
   

</body>

</html>
