		<div class="footer-div padding-bottom-30 ">
			<div class="container container-hr">
				<!-- logo -->
	            <div class="text-center padding-top-30">
	            	<a href="" class="">
		                <img src="<?=base_url('assets/images/square_logo.png')?>" alt="Ken Karlo: Developer" class="logo-dark" height="59" />
		            </a>
	            </div>

				<div class="mt-3 text-center c-dwhite font-13 font-courier">
					&copy; <?=date('Y')?> <?=$siteSetting['website_name']?>
				</div>
			</div>
		</div>

		<!-- bundle -->
		<script>
			var base_url = '<?=base_url();?>';
			var nonce = '<?=$nonce;?>'; 
		</script>
	    <script src="<?=base_url('assets/js/vendor.min.js')?>"></script>
	    <script src="<?=base_url('assets/js/app.min.js')?>"></script>
	    <script src="<?=base_url('assets/js/auth/_dev.js')?>"></script>

	</body>