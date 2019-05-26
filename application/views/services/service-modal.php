<script>
	function unshowDate(){
	  document.getElementById('schedule').style.display ='none';
	}
	function showDate(){
	  document.getElementById('schedule').style.display = 'block';
	}
</script>
<style>
#inputDate{z-index:1500 !important;}
.clsDatePicker {
    z-index: 100000;
}
</style>

<!-- Service Form Modal -->
<div class="modal fade" id="modal-service" role="dialog" data-subtype="">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            
            <img src="./data/img/loader/contact-form-loader.gif" id="form-loader" style="display:none" />
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                	<div class="row">
                		<div class="col-md-6">
                			<!-- Choose Type -->
		                	<div class="form-group">
		                        <label for="inputServiceType">Choose below:</label><br>
								<label class="radio-inline"><input type="radio" name="serviceType" value="0" onclick="showDate();">Session</label>
								<label class="radio-inline"><input type="radio" name="serviceType" value="1" onclick="unshowDate();">Monthly</label>
							</div>
							<!-- /Choose Type -->
							
							<div class="form-group" id="schedule" style="display:none;">
								<label for="inputDate">Choose Date:</label><br>
						        <input placeholder="Selected date" type="text" id="inputDate" class="form-control datepicker">
<!-- 								<input placeholder="Selected date" type="text" id="inputDate" class="form-control datepicker"> -->
							</div>
                		</div>
                		<div class="col-md-6">
                			<div class="form-group">
		                        <label for="inputContactNumber">Contact Number</label>
		                        <input type="email" class="form-control" id="inputContactNumber" placeholder="Enter your contact number"/>
		                        <p class="error-msg"></p>
		                    </div>
                		</div>
                	</div>
					
					<div class="row">
                		<div class="col-md-6">
							<div class="form-group">
		                        <label for="inputName">Name</label>
		                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
		                        <p class="error-msg"></p>
		                    </div>
                		</div>
                		<div class="col-md-6">
		                    <div class="form-group">
		                        <label for="inputEmail">Email</label>
		                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
		                        <p class="error-msg"></p>
		                    </div>
                		</div>
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
                <button type="button" class="btn btn-primary submitBtn" onclick="submitSubscriptionForm('<?=base_url()?>index.php/SubscriptionController/subscribeService')">SUBMIT</button>
            </div>
        </div>
    </div>
</div>

