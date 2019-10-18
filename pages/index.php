<?php include("partials/_header.php"); ?>

<!-- start: Hero section -->
<div class="hero hero--lg" style="background-image: url('../img/heros/hero-bg.jpg')">
    <!-- you can change the background -->
    <div class="container">
        <div class="content">
            <h1>Discover great places in London</h1>
            <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events.</p>

            <ul class="hero__services-list">
                <li>
                    <a href="#">
                        <img src="../img/tour-graphics.png" alt="Tour Service">
                        <span>Tour</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../img/flight-graphics.png" alt="Tour Service">
                        <span>Flight</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../img/car-rental-graphics.png" alt="Tour Service">
                        <span>Car Rental</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../img/hotel-graphics.png" alt="Tour Service">
                        <span>Hotel</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end: Hero section -->

<main>
    <!-- start: page content -->
    <div class="content">

        <!-- explorer section with form -->
        <section class="block block--has-bg block--explorer" style="background-image: url('../img/explore-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 block__left-content">
                        <div>
                            <h2 class="block__title block__title--sm">Explore the world with us</h2>
                            <p class="block__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                            <a class="cs-btn cs-btn--primary" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">

                        <form class="form form--explore" action="." method="POST">
                            <div class="form-row">
                                <div class="form-group col-12 mb-0">
                                    <h2 class="form__title">Explore the world with us</h2>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputEmail" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputTravelDate" placeholder="Travel Date">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputOfDays" placeholder="No of days">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="requirement" id="textareaRequirement" placeholder="Requirement"></textarea>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputNoOfAdults" placeholder="No of adults">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputNoOfKids" placeholder="No of kids">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <button class="cs-btn cs-btn--has-icon cs-btn--primary cs-btn--fullwidth"><i class="icon icon-search"></i><span>Search</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- goals section -->
        <section class="block block--lg block--goals">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block__header block__header--has-paragraph">
                            <h2 class="block__title block__title--lg block__title--center mb-0">Good reasons to visit Europe</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        </div>

                        <div class="row goals-items">
                            <div class="col-12 col-xs-12 col-md-12 col-lg-3">
                                <a href="#" class="goal-card">
                                    <div class="featured-image">
                                        <h2>New York</h2>
                                        <img class="img-fluid" src="../img/cards/goal-card-sm.jpg" alt="goal title">
                                    </div>
                                    <div class="item-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    </div>
                                </a>
                                <a href="#" class="goal-card">
                                    <div class="featured-image">
                                        <h2>New York</h2>
                                        <img class="img-fluid" src="../img/cards/goal-card-sm.jpg" alt="goal title">
                                    </div>
                                    <div class="item-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    </div>
                                </a>
                            </div>
                            <!-- main item -->
                            <div class="col-12 col-xs-12 col-md-12 col-lg-6">
                                <a href="#" class="goal-card">
                                    <div class="featured-image">
                                        <h2>Maldives</h2>
                                        <img class="img-fluid" src="../img/cards/goal-card-lg.jpg" alt="goal title">
                                    </div>
                                    <div class="item-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-xs-12 col-md-12 col-lg-3">
                                <a href="#" class="goal-card">
                                    <div class="featured-image">
                                        <h2>New York</h2>
                                        <img class="img-fluid" src="../img/cards/goal-card-sm.jpg" alt="goal title">
                                    </div>
                                    <div class="item-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    </div>
                                </a>
                                <a href="#" class="goal-card">
                                    <div class="featured-image">
                                        <h2>New York</h2>
                                        <img class="img-fluid" src="../img/cards/goal-card-sm.jpg" alt="goal title">
                                    </div>
                                    <div class="item-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- packages section -->
        <section class="block block--lg block--packages pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block__header block__header--has-paragraph">
                            <h2 class="block__title block__title--lg block__title--center mb-0">Popular Packages</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        </div>

                        <div class="row packages-list">
                            <!-- first-row -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card package-card">
                                    <a href="#"><img class="card-img-top" src="../img/cards/package-img.jpg" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Venice, Rome and Milan <br> – 9 Days 8 Nights</a></h5>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <div class="package-review">
                                            <!-- Here will be the ratings plugin instead of the image -->
                                            <img src="../img/rating-img.png" alt="Reviews">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card package-card">
                                    <a href="#"><img class="card-img-top" src="../img/cards/package-img.jpg" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Venice, Rome and Milan <br> – 9 Days 8 Nights</a></h5>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <div class="package-review">
                                            <!-- Here will be the ratings plugin instead of the image -->
                                            <img src="../img/rating-img.png" alt="Reviews">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card package-card">
                                    <a href="#"><img class="card-img-top" src="../img/cards/package-img.jpg" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Venice, Rome and Milan <br> – 9 Days 8 Nights</a></h5>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <div class="package-review">
                                            <!-- Here will be the ratings plugin instead of the image -->
                                            <img src="../img/rating-img.png" alt="Reviews">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card package-card">
                                    <a href="#"><img class="card-img-top" src="../img/cards/package-img.jpg" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Venice, Rome and Milan <br> – 9 Days 8 Nights</a></h5>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <div class="package-review">
                                            <!-- Here will be the ratings plugin instead of the image -->
                                            <img src="../img/rating-img.png" alt="Reviews">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- second-row -->
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card package-card">
                                    <a href="#"><img class="card-img-top" src="../img/cards/package-img.jpg" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Venice, Rome and Milan <br> – 9 Days 8 Nights</a></h5>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <div class="package-review">
                                            <!-- Here will be the ratings plugin instead of the image -->
                                            <img src="../img/rating-img.png" alt="Reviews">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card package-card">
                                    <a href="#"><img class="card-img-top" src="../img/cards/package-img.jpg" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Venice, Rome and Milan <br> – 9 Days 8 Nights</a></h5>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <div class="package-review">
                                            <!-- Here will be the ratings plugin instead of the image -->
                                            <img src="../img/rating-img.png" alt="Reviews">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card package-card">
                                    <a href="#"><img class="card-img-top" src="../img/cards/package-img.jpg" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Venice, Rome and Milan <br> – 9 Days 8 Nights</a></h5>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <div class="package-review">
                                            <!-- Here will be the ratings plugin instead of the image -->
                                            <img src="../img/rating-img.png" alt="Reviews">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card package-card">
                                    <a href="#"><img class="card-img-top" src="../img/cards/package-img.jpg" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#">Venice, Rome and Milan <br> – 9 Days 8 Nights</a></h5>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <div class="package-review">
                                            <!-- Here will be the ratings plugin instead of the image -->
                                            <img src="../img/rating-img.png" alt="Reviews">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- travelling section -->
        <section class="block block--xl block--has-bg block--travelling" style="background-image: url('../img/travelling-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h2 class="block__title block__title--sm block__title--light">Travelling Highlights</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <a class="cs-btn cs-btn--primary" href="#">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- clients section -->
        <section class="block block--lg block--clients">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block__header">
                            <h2 class="block__title block__title--lg block__title--center">What our clients say about us</h2>
                        </div>
                        <div class="content">
                            <div class="row client-list">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="client-card">
                                        <div class="header">
                                            <img class="img-fluid rounded-circle" src="../img/client-avatar.jpg" alt="client">
                                            <h3>Emily Schneider</h3>
                                            <h4>Newark - USA</h4>
                                        </div>
                                        <div class="body">
                                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="client-card">
                                        <div class="header">
                                            <img class="img-fluid rounded-circle" src="../img/client-avatar.jpg" alt="client">
                                            <h3>Emily Schneider</h3>
                                            <h4>Newark - USA</h4>
                                        </div>
                                        <div class="body">
                                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="client-card">
                                        <div class="header">
                                            <img class="img-fluid rounded-circle" src="../img/client-avatar.jpg" alt="client">
                                            <h3>Emily Schneider</h3>
                                            <h4>Newark - USA</h4>
                                        </div>
                                        <div class="body">
                                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="client-card">
                                        <div class="header">
                                            <img class="img-fluid rounded-circle" src="../img/client-avatar.jpg" alt="client">
                                            <h3>Emily Schneider</h3>
                                            <h4>Newark - USA</h4>
                                        </div>
                                        <div class="body">
                                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- partners -->
        <div class="block block--partners">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="partners">
                            <a href="#"><img class="img-fluid" src="../img/partners/01.png" alt="partner 1"></a>
                            <a href="#"><img class="img-fluid" src="../img/partners/02.png" alt="partner 2"></a>
                            <a href="#"><img class="img-fluid" src="../img/partners/03.png" alt="partner 3"></a>
                            <a href="#"><img class="img-fluid" src="../img/partners/04.png" alt="partner 4"></a>
                            <a href="#"><img class="img-fluid" src="../img/partners/05.png" alt="partner 5"></a>
                            <a href="#"><img class="img-fluid" src="../img/partners/06.png" alt="partner 6"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end: page content -->
</main>

<?php include("partials/_footer.php");
