<!--A FOOTER STARTS AAA--><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<footer>
    <div class="container">
        <div class="col-1">
            <h3>Quick Links</h3>
            <div class="f_link"> <a href="#">Home</a> <a href="#">About Us</a> <a href="#">Our Products</a> <a
                    href="#">Contact Us</a> <a href="#">Sitemap</a></div>
        </div>
        <div class="col-2">
            <h3>Our Products</h3>
            <div class="f_link"> <a href="#">Insecticides</a> <a href="#">Fungicides</a> <a href="#">Herbicides</a> <a
                    href="#" style="color:#fff;" class="uu">Bulk Orders</a> </div>
        </div>
        <div class="col-3">
            <h3>Contact Info</h3>
            <div class="f_contact_con">
                <p><i class="fa fa-map-marker fs18 mr8 white"></i> 26-B4, SIDCO Industrial Estate, Pattaravakkam,<br
                        class="visible-lg">
                    <span class="visible-lg-inline ml20"></span>Ambattur, Chennai - 98, Tamil Nadu, India, 600098
                </p>
                <p class="mt10"><i class="fa fa-phone fs12 mr5 white"></i> <a href="#">9597254501</a>, <a
                        href="#">8939205000</a></p>
                <p class="mt10"><i class="fa fa-envelope fs12 mr5 white"></i> <a href="#">info@yourwebsite.com</a><br>
                    <i class="fa fa-envelope fs12 mr5 white"></i> <a href="#">sales@yourwebsite.com</a>
                </p>
                <p class="mt10"><i class="fa fa-user fs12 mr5 white"></i> Contact Person: Kaliyamoorthy.G (Proprietor)</p>
            </div>
        </div>
        <div class="col-4">
            <div class="f_map_con">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.045654477898!2d80.1482670749918!3d13.098541987265508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5263c7b89a5c7f%3A0x1c46a6b6c6f5d5b5!2sSIDCO%20Industrial%20Estate%2C%20Pattaravakkam%2C%20Ambattur%2C%20Chennai%2C%20Tamil%20Nadu%20600098!5e0!3m2!1sen!2sin!4v1647854321234!5m2!1sen!2sin"
                    width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="cs">
        <div class=" container">
            <div class="social_midea_con"> <a href="#" class="trans_eff"><i class="fa fa-facebook"></i></a> <a href="#"
                    class="trans_eff"><i class="fa fa-twitter"></i></a> <a href="#" class="trans_eff"><i
                        class="fa fa-linkedin"></i></a> <a href="#" class="trans_eff"><i class="fa fa-youtube"></i></a> </div>
            <p class="copyright">© 2018, <span class="white">Auditya Crop Care</span>. All rights reserved Managed by
                <a href="https://trade4export.com" target="_blank" style="color: rgb(91, 100, 228);">Trade4Export</a>
            </p>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<p id="back-top"> <a href="#top" class="btn btn-top trans_eff"><i class="fa fa-arrow-up"></i></a></p>
<!-- #EndLibraryItem --><!--A FOOTER ENDS AAAA-->

<script src="Scripts/jquery-1.11.3.min.js"></script>
<script src="Scripts/bootstrap.min.js"></script>
<script src="Scripts/endlessRiver.js"></script>
<script src="Scripts/function.js"></script>

<!-- goes to whatsapp  -->
<script>
    document.getElementById("contactForm").addEventListener("submit", function(e) {
        e.preventDefault();

        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var product = document.getElementById("product").value;
        var quantity = document.getElementById("quantity").value;
        var message = document.getElementById("message").value;

        var whatsappNumber = "919597254501"; // country code ke saath number

        var whatsappMessage =
            "New Bulk Order Inquiry%0A%0A" +
            "Name: " + name + "%0A" +
            "Email: " + email + "%0A" +
            "Phone: " + phone + "%0A" +
            "Product Interest: " + product + "%0A" +
            "Quantity: " + quantity + "%0A%0A" +
            "Message:%0A" + message;

        var whatsappURL = "https://wa.me/" + whatsappNumber + "?text=" + whatsappMessage;

        window.open(whatsappURL, "_blank");
    });
</script>
<!-- Modal -->
<div id="enquiryModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h3>Enquiry Form</h3>

        <form onsubmit="sendWhatsApp(); return false;">
            <label>Name</label>
            <input type="text" id="name" required>

            <label>Phone</label>
            <input type="tel" id="phone" required>

            <label>Message</label>
            <textarea id="message" rows="4" required></textarea>

            <button type="submit" class="submit-btn">Send on WhatsApp</button>
        </form>
    </div>
</div>
<script>
    function openModal() {
        document.getElementById("enquiryModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("enquiryModal").style.display = "none";
    }

    function sendWhatsApp() {
        var name = document.getElementById("name").value;
        var phone = document.getElementById("phone").value;
        var message = document.getElementById("message").value;

        // CHANGE THIS NUMBER
        var whatsappNumber = "919876543210";

        var text =
            "Name: " + name + "%0A" +
            "Phone: " + phone + "%0A" +
            "Message: " + message;

        var url = "https://wa.me/" + whatsappNumber + "?text=" + text;
        window.open(url, "_blank");
    }
</script>

</body>

</html>