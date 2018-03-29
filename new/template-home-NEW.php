<?php                                                                                                                                                                                                                                                               ?><?php
/*
Template Name: Home Page
By Chris Milliano <millianoc@gmail.com> in March 2018
*/
?>

<?php get_header(); ?>


<!-- LANDING PAGE - START -->

<div id="cm_landing-page" class="cm_box">

    <div id="cm_landing__header" class="cm_box">

        <div id="cm_header__logo" class="cm_box">
            <a href="https://atlaslabels.com/" title="Atlas Home">
                <div id="cm_header__logo-image" class="cm_box"></div>
            </a>
        </div>

        <div id="cm_header__header-copy" class="cm_box">
            <h1 id="cm_header-copy__item--1">
                Industry Leader in Customer Service
            </h1>
            <h1 id="cm_header-copy__item--2">
                Our Business is Your Passion
            </h1>
            <h1 id="cm_header-copy__item--3">
                Beverage is Our Business
            </h1>
        </div>
    </div>

    <hr class="cm_hr" />

    <div id="cm_landing__about" class="cm_box">
        <div id="cm_about__copy" class="cm_box">
            <div class="cm_box cm_box__content">
                <h2>ABOUT US</h2>
                <p>
                    Atlas Labels & Packaging began in 1977, with the motto “Strength Through Integrity, Creativity and Customer Service.” We have evolved into a leading national provider of printed packaging materials to the alcoholic and specialty beverage industries.   We provide packaging materials for brewpubs, bottling and canning microbreweries and soda producers, and promotional items for the entire industry.
                </p>
                <div class="cm_box cm_cta">
                    <a href="https://atlaslabels.com/about-atlas-labels/" title="About Us">
                        <i>LEARN MORE</i>
                    </a>
                </div>
            </div>
        </div>
        <div id="cm_about__image" class="cm_box" style="background-image:url('https://atlaslabels.com/wp-content/uploads/2015/08/1-12PackCanCase.jpg')">
            <div class="cm_box cm_box__content">
                <h2>12-PACK CAN BOX PROMO</h2>
                <p>
                    The packaging shift in the craft beer industry is is full
                    swing. With over 23% of the industry volume now in the 12-pack
                    Can Box Promotion in time to kick-off the key summer selling
                    season! Please see all important promotion details by
                    following the link below!
                </p>
                <div class="cm_box cm_cta">
                    <a href="#cm_about__image" title="Some Link">
                        <i>LEARN MORE</i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr class="cm_hr" />

    <div id="cm_landing__products-section" class="cm_box">
        <h2>OUR PRODUCTS</h2>
        <div id="cm_landing__products" class="cm_box">
            <a href="https://atlaslabels.com/products/6-pack-carriers/">
                <div class="cm_box cm_products__product">
                    <div class="cm_box cm_product__cover"></div>
                    <div class="cm_box cm_product__image" style="background-image:url('https://atlaslabels.com/wp-content/uploads/2013/09/6PackHalligan.jpg')"></div>
                    <div class="cm_box cm_product__label">
                        <div class="cm_box cm_product__text">
                            <h5>CARRIERS</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://atlaslabels.com/products/bottle-crowns-and-caps/">
                <div class="cm_box cm_products__product">
                    <div class="cm_box cm_product__cover"></div>
                    <div class="cm_box cm_product__image" style="background-image:url('https://atlaslabels.com/wp-content/uploads/2013/09/crownsStrangerCreek_TH.jpg')"></div>
                    <div class="cm_box cm_product__label">
                        <div class="cm_box cm_product__text">
                            <h5>CROWNS</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://atlaslabels.com/products/can-carriers/">
                <div class="cm_box cm_products__product">
                    <div class="cm_box cm_product__cover"></div>
                    <div class="cm_box cm_product__image" style="background-image:url('https://atlaslabels.com/wp-content/uploads/2015/08/24VarietyPackCanCase.jpg')"></div>
                    <div class="cm_box cm_product__label">
                        <div class="cm_box cm_product__text">
                            <h5>CAN CARRIERS</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://atlaslabels.com/products/cut-and-stack-bottle-labels/">
                <div class="cm_box cm_products__product">
                    <div class="cm_box cm_product__cover"></div>
                    <div class="cm_box cm_product__image" style="background-image:url('https://atlaslabels.com/wp-content/uploads/2013/09/Labels_TH.jpg')"></div>
                    <div class="cm_box cm_product__label">
                        <div class="cm_box cm_product__text">
                            <h5>LABELS</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cm_box cm_cta">
            <a href="https://atlaslabels.com/our-products/" title="Our Products">
                <i>VIEW ALL</i>
            </a>
        </div>
    </div>

    <hr class="cm_hr" />

    <div id="cm_landing__contact-section" class="cm_box">
        <!-- Begin Constant Contact Inline Form Code -->
        <div class="ctct-inline-form" data-form-id="3c77a0a7-e41d-45b7-9b9c-97e1ca643979"></div>
        <!-- End Constant Contact Inline Form Code -->
    </div>

    <hr class="cm_hr" />
</div>

<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "d0140426e814ebc79995c562d31b4680"; </script>
<script id="signupScript" src="https://static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->

<script>

    // Hold info about the available and current header copy to display
    var copyIndex = 1;
    var numCopyObjects = 3;
    var copyObjects = {
        1: "cm_header-copy__item--1",
        2: "cm_header-copy__item--2",
        3: "cm_header-copy__item--3",
    }

    // Handle swapping out copy in the header
    function swapHeaderCopy() {

        // Remove the class giving the indexed copy opacity
        document.getElementById(copyObjects[copyIndex]).classList.remove("header-copy--show");

        // Iterate thru copy objects, and loop at the end of the list
        copyIndex++;
        if (copyIndex > numCopyObjects) { copyIndex = 1; }

        // Add the class to give the newly indexed copy opacity
        document.getElementById(copyObjects[copyIndex]).classList.add("header-copy--show");
    }

    // Show the initial text, start the interval to swap out the text on screens
    // big enough to display the copy
    if (document.documentElement.clientWidth > 768) {
        document.getElementById(copyObjects[copyIndex]).classList.toggle("header-copy--show");
        var headerCopyInterval = setInterval(swapHeaderCopy, 3000);
    }

    // Handle constant contact modal
    function toggleModal() {
        document.getElementById('cm_landing-modal').classList.toggle('cm_modal--open');
    }
</script>
<!-- LANDING PAGE - END -->


<?php get_footer(); ?>
