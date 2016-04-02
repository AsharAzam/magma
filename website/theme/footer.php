<footer class="main-footer align-center">
			
			
			

			<div class="wrapper inline w80 bg--dark" style="position:relative">
				<p class="copyright border--small color--light"> Powered By <b>Magma Tech</b>  –  Copyright 2016 </p>
				<nav class="nav" style="position:absolute;top:0;right:0">
				
				<div class="box mp-w100">
					<a href="https://twitter.com/acmedubai" target="_blank" class="btn btn--social btn--bmarged" title="Follow us on twitter">
						<div class="wrapper wrapper--panel wrapper--valign valign-top">
							<!--[if gt IE 8]><!-->
							<img src="wp-content/themes/immersivegarden/images/ico/ico-twitter.svg" alt="Follow us on twitter" class="ico cell ico--twitter"/>
							<!--<![endif]-->
						</div>
						<div class="wrapper wrapper--panel wrapper--valign btn--social__overlay bg--yellow valign-top">
							<!--[if gt IE 8]><!-->
							<img src="wp-content/themes/immersivegarden/images/ico/ico-twitter-light.svg" alt="Follow us on twitter" class="ico cell ico--twitter"/>
							<!--<![endif]-->
						</div>
					</a>
					<a href="https://www.facebook.com/acmedubai" target="_blank" class="btn btn--social btn--bmarged" title="Follow us on Facebook">
						<div class="wrapper wrapper--panel wrapper--valign valign-top">
							<!--[if gt IE 8]><!-->
							<img src="wp-content/themes/immersivegarden/images/ico/ico-facebook.svg" alt="Follow us on Facebook" class="ico cell ico--facebook"/>
							<!--<![endif]-->
						</div>
						<div class="wrapper wrapper--panel wrapper--valign btn--social__overlay bg--yellow valign-top">
							<!--[if gt IE 8]><!-->
							<img src="wp-content/themes/immersivegarden/images/ico/ico-facebook-light.svg" alt="Follow us on Facebook" class="ico cell ico--facebook"/>
							<!--<![endif]-->
						</div>
					</a>
					<a href="https://www.youtube.com/channel/UC6m4X3lIRJcDodLzD7csB0A" target="_blank" class="btn btn--social btn--bmarged" title="Follow us on Youtube">
						<div class="wrapper wrapper--panel wrapper--valign valign-top">
							<!--[if gt IE 8]><!-->
							<img src="wp-content/themes/immersivegarden/images/ico/ico-youtube.svg" alt="Follow us on Youtube" class="ico cell ico--youtube"/>
							<!--<![endif]-->
						</div>
						<div class="wrapper wrapper--panel wrapper--valign btn--social__overlay bg--yellow valign-top">
							<!--[if gt IE 8]><!-->
							<img src="wp-content/themes/immersivegarden/images/ico/ico-youtube-light.svg" alt="Follow us on Youtube" class="ico cell ico--youtube"/>
							<!--<![endif]-->
						</div>
					</a>

					<a href="https://www.linkedin.com/company/acme-group" target="_blank" class="btn btn--social btn--bmarged" title="Follow us on Linkedin">
						<div class="wrapper wrapper--panel wrapper--valign valign-top">
							<!--[if gt IE 8]><!-->
							<img src="wp-content/themes/immersivegarden/images/ico/ico-linkedin.svg" alt="Follow us on Linkedin" class="ico cell ico--linkedin"/>
							<!--<![endif]-->
						</div>
						<div class="wrapper wrapper--panel wrapper--valign btn--social__overlay bg--yellow valign-top">
							<!--[if gt IE 8]><!-->
							<img src="wp-content/themes/immersivegarden/images/ico/ico-linkedin-light.svg" alt="Follow us on Linkedin" class="ico cell ico--linkedin"/>
							<!--<![endif]-->
						</div>
					</a>	
				</div>

			

				<form style="display:none;" id="newsletter-subscribe" method="post" class="form form--newsletter valign-top mp-w90" action="wp-content/plugins/newsletter/do/subscribe.php" >
					<input type="text" class="wrapper--panel desc color--grey-light js-input-newsletter" placeholder="Newsletter" name="ne" required>
					<input type="submit" class="input input--submit" value="" />
					<p id="newsletter-subscribe__success" class="message message--success align-left" style="display: none;">Your email has been registered</p>
					<p id="newsletter-subscribe__error" class="message message--error align-left" style="display: none;">An error occured</p>
					<p id="newsletter-subscribe__error-mail" class="message message--error align-left" style="display: none;">Your email is incorrect</p>
				</form>
			</nav>		
			</div>
		</footer>
	</div>
</div>

<div id="fake-scroll"></div>
<script src="wp-content/themes/immersivegarden/js/vendors.js"></script>
<script src="wp-content/themes/immersivegarden/js/app.js"></script>
<script >require('initialize');</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60417875-4', 'auto');
  ga('send', 'pageview');

</script>


<style>
	.form--newsletter form {
	  width: 320px;
	  height: 50px;
	  margin-left: 2%;
	}
	.mc4wp-alert {
		font-size: 0.75rem;
	    margin-top: 15px;
	    padding-left: 15px;
	    text-align: left;
	    line-height: normal;
	}
	.mc4wp-alert.mc4wp-error {
		color: red;
	}
	.mc4wp-success {
		color: green;
	}
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
           
            $(".list-item li a").click(function() {
            	var id = $(this).attr('href');
                offset =  $(id).offset().top;
            $('html, body').animate({
                scrollTop: offset
            }, 500);
        });
    })
</script>
</body>
</html>