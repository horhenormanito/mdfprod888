<!-- Contact -->
<div id="contact" class="section md-padding">

	<!-- Container -->
	<div class="container">
	
		<!-- Row -->
		<div class="row">
			
			<!-- Section-header -->
			<div class="section-header text-center">
				<h2 class="title">Get in touch</h2>
			</div>
			<!-- /Section-header -->
			
			<div class="col-md-6">
				<!-- >div id="map"></div-->
				<div class="mapouter">
					<div class="gmap_canvas">
						<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=the%20core%20by%20mdf%20productions&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
						</iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<!-- contact -->
				<div class="col align-center">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<p>(+63)967 289 8891</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col align-center">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<p>info@mdfprod888.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col align-center">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<p>FLC Center, 888 Hernan Cortes St, Mandaue City, 6014 Cebu, Philippines</p>
					</div>
				</div>
				<!-- /contact -->
				
				<!-- contact form -->
				<div class="col align-center">
					<div class="contact">
						<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
					    	Contact Us
						</button>
					</div>
				</div>
				<!-- /contact form -->
				
				
				<!-- Social Media -->
				<div class="access-social">
					<a href="https://www.facebook.com/mdfprod888/" target="_blank" class="facebook"><i class="fa fa-facebook "></i></a>
					<a href="https://www.instagram.com/mdfprod888/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
					<a href="https://www.twitter.com/mdfprod888/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
    			</div>
				<!-- /Social Media -->		
			</div>	

		</div>
		<!-- /Row -->
	</div>
	<!-- /Container -->

</div>
<!-- /Contact -->

<!-- Contact Form Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
            </div>
            
            <img src="./data/img/loader/contact-form-loader.gif" id="contact-form-loader" style="display:none" />
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
                        <p class="error-msg"></p>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                        <p class="error-msg"></p>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                        <p class="error-msg"></p>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm('<?=base_url()?>index.php/MdfProdMailController/doMail')">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<!-- /Contact Form Modal -->
