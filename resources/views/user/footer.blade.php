<footer class="page-footer bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 py-3 mb-4">
                <h5>Quick Links</h5>
                <ul class="footer-menu list-unstyled">
                    <li><a href="{{url('/')}}" class="text-light">Home</a></li>
                    <li><a href="{{url('/aboutus')}}" class="text-light">About Us</a></li>
                    <li><a href="{{url('/doctors')}}" class="text-light">Doctors</a></li>
                </ul>
            </div>
            <div class="col-md-6 py-3 mb-4">
                <h5>Quick Message/Feedback</h5>
                <form class="contact-form mt-4" action="{{url('/feedback')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <input type="text" id="fullName" class="form-control" placeholder="Full name" name="name">
                            @error('name')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mb-3">
                            <input type="text" id="emailAddress" class="form-control" placeholder="Email address" name="email">
                            @error('email')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" id="number" class="form-control" placeholder="Your number" name="number">
                            @error('number')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <textarea id="message" class="form-control" rows="4" placeholder="Your message" name="message"></textarea>
                            @error('message')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-3 py-3 mb-4">
                <h5>Contact</h5>
                <p class="footer-link mb-2">987654323</p><br>
                <p class="footer-link mb-2">Kausaltar,Bhaktapur</p><br>
                <p class="footer-link mb-2">hospitalonehealth9@gmail.com</p><br>

                <h5 class="mt-4 mb-3">Social Media</h5>
                <div class="footer-sosmed">
                    <a href="#" target="_blank" class="text-light"><span class="mai-logo-facebook-f"></span></a>
                    <a href="#" target="_blank" class="text-light"><span class="mai-logo-twitter"></span></a>
                    <a href="#" target="_blank" class="text-light"><span class="mai-logo-google-plus-g"></span></a>
                    <a href="#" target="_blank" class="text-light"><span class="mai-logo-instagram"></span></a>
                    <a href="#" target="_blank" class="text-light"><span class="mai-logo-linkedin"></span></a>
                </div>
            </div>
        </div>
    </div>

<hr>

<p  class="text-center" id="copyright">Copyright &copy;  All right reserved</p>
</div>
</footer>



