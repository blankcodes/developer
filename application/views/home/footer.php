		
		<div id="loader" class="loader-div" hidden>
            <div class="loader-wrapper">
                <img src="<?=base_url('assets/images/loader.gif')?>" width="120" heigth="120">
            </div>
        </div>
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
	    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
	    <!-- <script src="<?=base_url('assets/js/app.min.js')?>"></script> -->
 	   	<script src="<?=base_url('assets/js/auth/_dev.js')?>"></script>
		<script src="<?=base_url()?>assets/js/auth/_app.js"></script>
		<script src="<?=base_url()?>assets/js/aos.js"></script>
		<script>
  			AOS.init();
		</script>
	</body>