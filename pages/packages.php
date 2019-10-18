<?php include("partials/_header.php"); ?>

<!-- start: Hero section -->
<div class="hero hero--sm hero--center-content" style="background-image: url('../img/heros/packages-bg.jpg')">
    <!-- you can change the background -->
    <div class="container">
        <div class="content">
            <h1>Our Packages</h1>
        </div>
    </div>
</div>
<!-- end: Hero section -->

<!-- start: breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li>|</li>
            <li><a href="#">Packages</a></li>
        </ul>
    </div>
</div>
<!-- end: breadcrumbs -->

<main>
    <!-- start: page content -->
    <div class="content">

        <div class="container">
            <div class="subpage-content-wrapper">
                <aside class="sidebar sidebar--sm sidebar--left">
                    <!-- form -->
                    <div class="widget form-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Enquiry form</h3>
                        </div>
                        <div class="widget-body">
                            <form class="form form--enquiry" action="." method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="inputPhone" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="inputTravelDate" placeholder="Travel Date">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="inputOfDays" placeholder="No of days">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="requirement" id="textareaRequirement" placeholder="Requirement"></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="inputNoOfAdults" placeholder="No of adults">
                                    </div>
                                    <div class="form-group col-md-12">
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
                    <!-- Categories -->
                    <div class="widget categories-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Categories</h3>
                        </div>
                        <div class="widget-body">
                            <ul class="category-list">
                                <li><a href="#"><i class="raster-icon wildlife"></i>WildLife</a></li>
                                <li><a href="#"><i class="raster-icon ecotours"></i>Ecotours</a></li>
                                <li><a href="#"><i class="raster-icon backpacking"></i>Backpacking</a></li>
                                <li><a href="#"><i class="raster-icon camping"></i>Camping</a></li>
                                <li><a href="#"><i class="raster-icon trekking"></i>Trekking</a></li>
                                <li><a href="#"><i class="raster-icon honeymoon"></i>Honeymoon</a></li>
                                <li><a href="#"><i class="raster-icon biking"></i>Biking</a></li>
                                <li><a href="#"><i class="raster-icon adventure"></i>Adventure</a></li>
                                <li><a href="#"><i class="raster-icon family"></i>Family</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <div class="subpage-content">
                    <div class="upper-area">
                        <p class="mb-0"><strong>356 Packages Available</strong></p>
                        <div>
                            <form class="form form--content-search" action=".">
                                <input type="text" name="sq" placeholder="Search Package">
                                <button type="submit" onClick="javascript:void(0)"><i class="icon icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- packages items list -->
                    <div class="package-items">
                        <!-- package card item -->
                        <div class="card package-item">
                            <div class="row no-gutters package-item-top">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <a href="#"><img class="img-fluid" src="../img/cards/packages-subpage-card.jpg" alt="package"></a>
                                </div>
                                <div class="col-12 col-sm-8 col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Venice, Rome and Milan – 9 Days 8 Nights</h2>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.. <a href="#">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 package-actions">
                                    <div class="price">
                                        <span>Starting From</span>
                                        <span class="value">$127</span>
                                    </div>
                                    <div class="btn">
                                        <a class="cs-btn cs-btn--sm cs-btn--secondary" href="#">Read More</a>
                                        <a class="cs-btn cs-btn--sm cs-btn--primary" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- package card item -->
                        <div class="card package-item">
                            <div class="row no-gutters package-item-top">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <a href="#"><img class="img-fluid" src="../img/cards/packages-subpage-card.jpg" alt="package"></a>
                                </div>
                                <div class="col-12 col-sm-8 col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Venice, Rome and Milan – 9 Days 8 Nights</h2>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.. <a href="#">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 package-actions">
                                    <div class="price">
                                        <span>Starting From</span>
                                        <span class="value">$127</span>
                                    </div>
                                    <div class="btn">
                                        <a class="cs-btn cs-btn--sm cs-btn--secondary" href="#">Read More</a>
                                        <a class="cs-btn cs-btn--sm cs-btn--primary" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- package card item -->
                        <div class="card package-item">
                            <div class="row no-gutters package-item-top">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <a href="#"><img class="img-fluid" src="../img/cards/packages-subpage-card.jpg" alt="package"></a>
                                </div>
                                <div class="col-12 col-sm-8 col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Venice, Rome and Milan – 9 Days 8 Nights</h2>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.. <a href="#">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 package-actions">
                                    <div class="price">
                                        <span>Starting From</span>
                                        <span class="value">$127</span>
                                    </div>
                                    <div class="btn">
                                        <a class="cs-btn cs-btn--sm cs-btn--secondary" href="#">Read More</a>
                                        <a class="cs-btn cs-btn--sm cs-btn--primary" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- package card item -->
                        <div class="card package-item">
                            <div class="row no-gutters package-item-top">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <a href="#"><img class="img-fluid" src="../img/cards/packages-subpage-card.jpg" alt="package"></a>
                                </div>
                                <div class="col-12 col-sm-8 col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Venice, Rome and Milan – 9 Days 8 Nights</h2>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.. <a href="#">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 package-actions">
                                    <div class="price">
                                        <span>Starting From</span>
                                        <span class="value">$127</span>
                                    </div>
                                    <div class="btn">
                                        <a class="cs-btn cs-btn--sm cs-btn--secondary" href="#">Read More</a>
                                        <a class="cs-btn cs-btn--sm cs-btn--primary" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- package card item -->
                        <div class="card package-item">
                            <div class="row no-gutters package-item-top">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <a href="#"><img class="img-fluid" src="../img/cards/packages-subpage-card.jpg" alt="package"></a>
                                </div>
                                <div class="col-12 col-sm-8 col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Venice, Rome and Milan – 9 Days 8 Nights</h2>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.. <a href="#">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 package-actions">
                                    <div class="price">
                                        <span>Starting From</span>
                                        <span class="value">$127</span>
                                    </div>
                                    <div class="btn">
                                        <a class="cs-btn cs-btn--sm cs-btn--secondary" href="#">Read More</a>
                                        <a class="cs-btn cs-btn--sm cs-btn--primary" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- package card item -->
                        <div class="card package-item">
                            <div class="row no-gutters package-item-top">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <a href="#"><img class="img-fluid" src="../img/cards/packages-subpage-card.jpg" alt="package"></a>
                                </div>
                                <div class="col-12 col-sm-8 col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Venice, Rome and Milan – 9 Days 8 Nights</h2>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.. <a href="#">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 package-actions">
                                    <div class="price">
                                        <span>Starting From</span>
                                        <span class="value">$127</span>
                                    </div>
                                    <div class="btn">
                                        <a class="cs-btn cs-btn--sm cs-btn--secondary" href="#">Read More</a>
                                        <a class="cs-btn cs-btn--sm cs-btn--primary" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- package card item -->
                        <div class="card package-item">
                            <div class="row no-gutters package-item-top">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <a href="#"><img class="img-fluid" src="../img/cards/packages-subpage-card.jpg" alt="package"></a>
                                </div>
                                <div class="col-12 col-sm-8 col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Venice, Rome and Milan – 9 Days 8 Nights</h2>
                                        <div class="package-info">
                                            <div><i class="raster-icon duration"></i><span>9 Days - 8 Nights</span></div>
                                            <div><i class="raster-icon city"></i><span>4 Cities</span></div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.. <a href="#">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 package-actions">
                                    <div class="price">
                                        <span>Starting From</span>
                                        <span class="value">$127</span>
                                    </div>
                                    <div class="btn">
                                        <a class="cs-btn cs-btn--sm cs-btn--secondary" href="#">Read More</a>
                                        <a class="cs-btn cs-btn--sm cs-btn--primary" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- pagination -->
                    <div class="pagination">
                        <ul>
                            <li><a class="prev" href="#"><i class="icon icon-step-arrow-left"></i></a></li>
                            <li class="is-active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">4</a></li>
                            <li><a class="next" href="#"><i class="icon icon-step-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- partners - repeated section all of the pages -->
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
