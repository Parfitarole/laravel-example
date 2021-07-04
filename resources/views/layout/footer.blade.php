<footer class="text-center text-lg-start bg-light text-muted mt-4">
    <div class="container text-center text-md-start py-3">
        <div class="row mt-3">
            <div class="col-4">
                <h6 class="fw-bold mb-4">Twitter Clone ™</h6>
                <p class="">This website is a Twitter clone that I made whilst re-familiarising myself with PHP and the Laravel framework. This project is currently a work in progress.</p>
            </div>
            <div class="col-2">
                <h6 class="fw-bold mb-4">Links</h6>
                @if(session('AccountId'))
                    <p><a href="/log-out-action" class="text-reset">Log Out</a></p>
                @elseif(!session('AccountId'))
                    <p><a href="/log-in" class="text-reset">Log In</a></p>
                    <p><a href="/sign-up" class="text-reset">Sign Up</a></p>
                @endif
            </div>
            <div class="col-2">
                <h6 class="fw-bold mb-4">Support</h6>
                <p><a href="/faqs" class="text-reset">FAQs</a></p>
                <p><a href="/contact" class="text-reset">Contact Us</a></p>
                <p><a href="/bug-report" class="text-reset">Report A Bug</a></p>
                <p><a href="/feature-request" class="text-reset">Suggest A Feature</a></p>
            </div>
            <div class="col-4 mb-4">
                <h6 class="fw-bold mb-4">Get In Touch</h6>
                <p><a href="https://www.google.co.uk/maps/place/Braitrim+House,+98+Victoria+Rd,+London+NW10+6NB/@51.5254497,-0.2574974,811m/data=!3m2!1e3!4b1!4m5!3m4!1s0x487611c32e6b3a1d:0xc14e1457ca60f1e3!8m2!3d51.5254497!4d-0.2553034" class="text-reset">98 Victoria Road, North-West London, NW80 0QG</a></p>
                <p><a href="mailto:example@twitterclone.co.uk" class="text-reset">example@twitterclone.dev</a></p>
                <p><a href="tel:07708 898 568" class="text-reset">07708 898 568</a></p>
            </div>
        </div>
    </div>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="/">TwitterClone.dev</a>
    </div>
</footer>
