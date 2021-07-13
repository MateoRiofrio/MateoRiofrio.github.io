<?php 

    $PageTitle="Mateo's Portfolio - About";
    include_once('header.php')
?>
    <main class="flex-shrink-0">
        <div class="container">
            <?php 
                include_once('nav.php')
            ?>

            <!-- Row 1 -->
            <div class="row border rounded bg-light">
                <!-- Column 1 -->
                <div class="col-xs-4 col-sm-7 col-md-6 col-lg-7 ms-md-4 mt-4">
                    <h3>About me: </h3>
                    <p class="lead">
                        I was born and grew up in Quito, Ecuador. When I was twelve, I moved to the U.S and have lived in Vermont ever since. 
                        I graduated in the spring semester of 2021 at the University Of Vermont with a 
                        bachelor's degree in computer science. Recently, I have spent some time learning about app development, so I decided
                        to base <a style="text-decoration: none;" href="https://github.com/MateoRiofrio/ride-app-firebase-kotlin">my first app</a> 
                        on one of my hobbies: biking. I have used it to to track a 30-mile ride around the islands of Vermont. Other than that, 
                        I am passionate about rock climbing and hope to begin climbing outdoors soon. 
                    </p>
                </div>
            </div>

            <div class="row border rounded bg-white mb-auto">
                <div class="col-xs-4 col-sm-7 col-md-6 col-lg-7 ms-md-4 mt-5">
                    <h3>About this site:</h3>
                    <p class="lead mb-4">This simple website was made using HTML, PHP, and Bootstrap. Here is the <a style="text-decoration: none;" href="https://github.com/MateoRiofrio/MateoRiofrio.github.io">repo</a>.</p>
                </div>
            </div>
        </div>
    </main>
    
    <?php
        include_once('footer.php')
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>