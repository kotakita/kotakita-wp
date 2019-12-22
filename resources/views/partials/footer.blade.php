<p class="pull-right">
  <a class="btn btn-lg btn-default" href="#" role="button">
    <span class="iconic iconic-arrow-right-angle-thick-left-top-line" title="Back up to top" aria-hidden="true">
      @include('icons.arrow-upward')
    </span>
  </a>
</p>

<div id="footer" class="container-fluid" style="background-color:#263a45;">

	<footer>
		<div class="col-sm-6 col-md-8 main-section">
			<div class="row">
				<div class="col-md-5">
					<img class="img-responsive" src="@asset('images/foot_logo.png')" style="width:300px;">
					<!-- <p style="color:white;opacity:0.8;padding:5px 0;">A City for All</p> -->
					<hr class="featurette-divider">
          <p>Keep up with Kota Kita by joining our <a href="http://eepurl.com/bqLZNb" target="_blank">email list</a>.</p>

          <!-- <div id="mc_embed_signup">
            <form action="https://kotakita.us11.list-manage.com/subscribe/post?u=a664bca7dfc8dbf2eae52eb1d&amp;id=42a2ca8713" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
              <label for="mce-EMAIL">Subscribe to our mailing list</label>
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a664bca7dfc8dbf2eae52eb1d_42a2ca8713" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
            </form>
          </div> -->


					<div id="social-icons">
            <a href="https://www.instagram.com/kotakitaorg/" target="_blank">
              {{-- <span class="fab fa-instagram fa-lg" title="social instagram" aria-hidden="true"></span> --}}
              <span style="display: block; width: 24px; height: 24px;">
              @include('icons.instagram')
              </span>
            </a>
            <a href="http://www.facebook.com/solo.kota.kita" target="_blank">
              {{-- <span class="fab fa-facebook fa-lg" title="social facebook" aria-hidden="true"></span> --}}
              <span style="display: block; width: 24px; height: 24px;">
              @include('icons.facebook')
              </span>
            </a>
            <a href="https://twitter.com/kotakitaorg" target="_blank">
              {{-- <span class="fab fa-twitter fa-lg" title="social twitter" aria-hidden="true"></span> --}}
              <span style="display: block; width: 24px; height: 24px;">
              @include('icons.twitter')
              </span>
            </a>
            <a href="https://www.youtube.com/channel/UC7h8eMsspsYvUFm9j7U932g" target="_blank">
              {{-- <span class="fab fa-youtube fa-lg" title="social youtube" aria-hidden="true"></span> --}}
              <span style="display: block; width: 24px; height: 24px;">
              @include('icons.youtube')
              </span>
            </a>
            <a href="https://www.flickr.com/photos/solo-kota-kita" target="_blank">
              {{-- <span class="fab fa-flickr fa-lg" title="camera slr" aria-hidden="true"></span> --}}
              <span style="display: block; width: 24px; height: 24px;">
              @include('icons.flickr')
              </span>
            </a>
					</div>
					<hr class="featurette-divider">
					<h5>&copy; 2018 Yayasan Kota Kita</h5>
				</div>
				<div class="col-md-7">
          <a class="twitter-timeline" data-height="480" data-theme="light" data-link-color="#2B7BB9" data-dnt="true" href="https://twitter.com/kotakitaorg?ref_src=twsrc%5Etfw">Tweets by kotakitaorg</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					{{-- <a class="twitter-timeline" data-height="480" data-theme="light" data-link-color="#2B7BB9" href="https://twitter.com/kotakitaorg?ref_src=twsrc%5Etfw">Tweets by kotakitaorg</a> --}}
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4 sub-section">
      <!-- <h3>&copy; 2015 Yayasan Kota Kita</h3> -->
			<p><a href="get-involved">Donate</a></p>
			<p><a href="get-involved#intern">Volunteer or Intern</a></p>
			<p><a href="get-involved#urban-social-forum">Urban Social Forum</a></p>
			<p><a href="partners">Our Partners</a></p>
			<p><a href="library">Our Documents &amp; Reports</a></p>
			<p><a href="about-us.html#contact">Contact Us</a></p>
		</div>
<!-- 		<div class="col-md-6">
			<div class="btn-group btn-group-justified" role="group" aria-label="...">
				<a class="btn btn-default" href="#" role="button"><span class="iconic iconic-envelope-closed iconic-md" title="envelope closed" aria-hidden="true"></span> Join our email list</a>
				<a href="http://www.facebook.com/solo.kota.kita" target="_blank" role="button" class="btn btn-primary"><span class="iconic iconic-social-facebook iconic-md" title="social facebook" aria-hidden="true"></span></a>
				<a href="http://www.facebook.com/solo.kota.kita" target="_blank" role="button" class="btn btn-primary"><span class="iconic iconic-social-twitter iconic-md" title="social twitter" aria-hidden="true"></span></a>
				<a href="https://www.flickr.com/photos/solo-kota-kita" target="_blank" role="button" class="btn btn-primary"><span class="iconic iconic-camera-slr iconic-md" title="camera slr" aria-hidden="true"></span></a>
			</div>
		</div> -->
  </footer>
  {{-- <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div> --}}
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
