<script>
	
</script>

<!-- Service Form Modal -->
<div class="modal fade" id="modal-space-rental" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Space Rental</h4>
            </div>
            
            <img src="./data/img/loader/contact-form-loader.gif" id="sr-form-loader" style="display:none" />
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="srStatusMsg"></p>
                <form role="form">
                	<div class="row">
                		<div class="col-md-6">
							<div class="form-group">
								<label for="srBookDate">Book Date</label><br>
								<input placeholder="Selected date" type="text" id="srBookDate" class="form-control">
								<p class="error-msg"></p>
							</div>
                		</div>
                		<div class="col-md-6">
							<div class="form-group">
                    			<label class="font-normal">Select hours of use</label>
			                    <select class="form-control chosen-select"" tabindex="2" id="srHoursUse">
			                    	<option value="" selected disabled>Choose from options below</option>
				                    <option value="4">4 hours</option>
				                    <option value="6">6 hours</option>
				                    <option value="8">8 hours</option>
				                    <option value="10">10 hours</option>
				                   	<option value="12">12 hours</option>
			                    </select>
			                    <p class="error-msg"></p>
                    		</div>
                		</div>
                	</div>
					
					<div class="row">
                		<div class="col-md-6">
							<div class="form-group">
		                        <label for="inputName">Name</label>
		                        <input type="text" class="form-control" id="srInputName" placeholder="Enter your name"/>
		                        <p class="error-msg"></p>
		                    </div>
		                    <div class="form-group">
		                        <label for="inputContactNumber">Contact Number</label>
		                        <input type="email" class="form-control" id="srInputContactNumber" placeholder="Enter your contact number"/>
		                        <p class="error-msg"></p>
		                    </div>
                		</div>
                		<div class="col-md-6">
		                    <div class="form-group">
		                        <label for="inputEmail">Email</label>
		                        <input type="email" class="form-control" id="srInputEmail" placeholder="Enter your email"/>
		                        <p class="error-msg"></p>
		                    </div>
                		</div>
                	</div>
                	
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="srInputMessage" placeholder="Enter your message"></textarea>
                        <p class="error-msg"></p>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitSpaceRent('<?=base_url()?>index.php/SubscriptionController/spaceRent')">SUBMIT</button>
            </div>
        </div>
    </div>
</div>

