<?php 

    $PageTitle="Mateo's Portfolio - Home";
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
                <div class="col-sm-12 col-md-5 col-lg-3 ms-3 me-lg-5 mt-4">
                    <figure class="figure">
                        <img src="images/profile-pic.jpeg" class="img-fluid rounded my-image mb-2" alt="Responsive image of the author">
                        <figcaption class="figure-caption">I am software developer from Vermont, US.</figcaption>
                    </figure>
                </div>

                <!-- Column 2 -->
                <div class="col-xs-4 col-sm-7 col-md-6 col-lg-7 ms-md-4 mt-5">
                    <h3>Project Spotlight</h3>
                    <ul class="lead custom-list-item">
                        <li><span>Android Mobile App:</span> <a href="https://github.com/MateoRiofrio/ride-app-firebase-kotlin" target="_blank">Bike Ride Tracker</li></a>
                        <li><span>iOS Mobile App:</span> <a href="" target="_blank">Spotify Search</li></a>
                        <li><span>React Native: </span><a href="https://github.com/MateoRiofrio/react-native-set-counter-and-timer" target="_blank">Timer and Set Counter</li></a>
                        <li><span>Website Development:</span> <a href="https://github.com/MateoRiofrio/MateoRiofrio.github.io" target="_blank">This website!</li></a>
                    </ul>
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