<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Business Time</h3>
                        <ul class="list-time">
                            <li>Monday - Saturday – 08.00AM to 05.00PM</li>
                            <li>Sunday: <span>Closed</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Social Media</h3>
                        <p>Connect us..</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="footer-widget">
                        <h4>About Xperdo Exports</h4>
                        <p>Xperdo Exports PVT LTD is a futuristic startup that shall reach to a position of India’s No1 export Import company. we are global exporter and importer of variety of agro food products, sea food products, garments, medical equipment’s, Biodegradable & Compostable products etc. based at cochin, Kerala.</p>

                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address : 47/764 H Muscat Tower <br>
                                    P C Road ,Chalikavattom ,Vytilla, Ernakulam ,Kochi , Kerala -682028 </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+91-9074872890">+91-9074872890</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:info@xperdoexports.com">info@xperdoexports.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">All Rights Reserved. &copy; 2023 <a href="#">Xperdo Exports</a>
    </p>
</div>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- MODAL-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-body py-0">
                <div class="d-flex main-content">
                    <div class="bg-image promo-img mr-4" style="background-image: url('images/about-img.jpg');height: 500px;">
                    </div>
                    <!-- <div class="content-text p-4 px-5 align-item-stretch">
                            <div class="text-center">

                                <h3 class="mb-3 line"></h3>
                                <p class="mb-5 description-val"></p>

                            </div>
                        </div> -->
                </div>

            </div>
        </div>
    </div>
</div>
<!---->

<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.superslides.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/inewsticker.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/images-loded.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/baguetteBox.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/custom.js"></script>
</body>
<script>
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");
        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;
            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }
    window.addEventListener("scroll", reveal);
    $(function() {
        const getLastItem = thePath => thePath.substring(thePath.lastIndexOf('/') + 1)
        var pathname = getLastItem(window.location.pathname);

        $('#navbar-menu > ul.nav li a').each(function(e) {
            var $this = $(this);
            if ($(this).attr('href') == pathname) {
                $this.parent().siblings().removeClass('active').end().addClass('active');
            }
        });


        $(".spice_names").click(function() {
            const data = {
                "spice": {
                    "name": "Spices",
                    "description": "Text",
                    "image_url": "images/about-img.jpg"
                },
                "tea": {
                    "name": "Tea",
                    "description": "Text",
                    "image_url": "images/products/Tea.jpg"
                },
                "coffee": {
                    "name": "Coffee",
                    "description": "Text",
                    "image_url": "images/products/coffee.jpg"
                },
                "oil": {
                    "name": "Edible Oil",
                    "description": "Text",
                    "image_url": "images/products/cooking_oil.jpg"
                },
                "cereals": {
                    "name": "Cereals",
                    "description": "Text",
                    "image_url": "images/products/cereals.jpg"
                },
                "nuts": {
                    "name": "Nuts",
                    "description": "Text",
                    "image_url": "images/products/nuts.jpg"
                },
                "garments": {
                    "name": "Garments",
                    "description": "Text",
                    "image_url": "images/products/garments.jpg"
                },
                "fish": {
                    "name": "Dried Sea Food Products",
                    "description": "Text",
                    "image_url": "images/products/dry_fish.jpg"
                },
                "spare_parts": {
                    "name": "Automobile Spare Parts",
                    "description": "Text",
                    "image_url": "images/products/spare_parts.jpg"
                },
                "medical": {
                    "name": "Medical Equipment",
                    "description": "Text",
                    "image_url": "images/products/medical_equipment.jpg"
                }
            }
            let value = $(this).attr("data-name");

            // let value = data.;
            // console.log(data.${`value`});
            // alert($(this).attr("data-name"));

            // $('.description-val').html(data[value].description);
            // $('.line').html(data[value].name);
            $('.bg-image').css({
                'background-image': 'url(' + data[value].image_url + ')'
            });
            $("#exampleModalCenter").modal('show');
        });

    });
</script>

</html>