<footer class="footer">
	<div class="footer-first">
		<div class"col-50">
			<a href="<?php echo home_url(); ?>" class="logo"><img src="/wp-content/uploads/2021/12/vf-favicon.png" alt="vittorio faraco logo"></a>
			<p>Computer engineer-to-be, tech consultant and digital media producer. Here you can find all things related to me and my work.</p>
		</div>
		<div class"col-25">
		</div>
		<div class"col-25">
			<strong>Find me at</strong>
			<a href="https://www.youtube.com/channel/UCvctnHCnd7rMzSZTww46Fjw">YouTube</a>
			<a href="https://twitter.com/vittoriofaraco">Twitter</a>
			<a href="https://linkedin.com/in/vittoriofaraco">LinkedIn</a>
			<a href="https://github.com/vtfrc">GitHub</a>
		</div>
	</div>
	<div class="footer-second">
	  © <?php bloginfo('title'); ?> P.iva 01384150775 - <a href="/privacy-policy">Privacy Policy</a> - <a href="/cookie-policy">Cookie Policy</a>
	</div>
</footer>

<?php wp_footer(); ?>

<script src="/cookiechoices.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function(event) {
cookieChoices.showCookieConsentBar('This website gathers anonymous statistical data about navigation through cookies, respecting your privacy and data.',
'Accept', 'More information', '/cookie-policy');
});
</script>

</body>
</html>
