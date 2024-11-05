
			  <!-- Modal -->
              <div class="modal fade" id="clinic<?php echo $row['username']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                        <div class="modal-content" style="width:750px;">
                            <div class="modal-header">
                                <p class="modal-title text-primary"><i class='icon icon-info'></i> Veterinary Clinic's Details</p>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>

							<input type="hidden" class="form-control" name="username" value="<?php echo $row['username']; ?>" readonly />
                            <div class="modal-body">
								<div class="row gx-3 mb-3">
									<div class="col-md-6">
										<label class="small mb-1">Clinic Vet Name</label>
										<input class="form-control" type="text" name="clinic_name" value="<?php echo $row['clinic_name']; ?>" placeholder="Clinic Vet Name" readonly />
									</div>
									<div class="col-md-6">
										<label class="small mb-1">Owner Name</label>
										<input class="form-control" type="text" name="owner_name" value="<?php echo $row['owner_name']; ?>" placeholder="Owner Name" readonly />
									</div>
								</div>
								<div class="row gx-3 mb-3">
									<div class="col-md-6">
										<label class="small mb-1">Email</label>
										<input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Email Address" readonly />
									</div>
									<div class="col-md-6">
										<label class="small mb-1">Tel. No</label>
										<input class="form-control" type="number" name="tel_no" value="<?php echo $row['tel_no']; ?>" placeholder="Tel. No" readonly />
									</div>
								</div>
								<div class="row gx-3 mb-3">
									<div class="col-md-6">
										<label class="small mb-1">Open Time</label>
										<input class="form-control" type="time" name="open_time" value="<?php echo $row['open_time']; ?>" placeholder="Open Time" readonly />
									</div>
									<div class="col-md-6">
										<label class="small mb-1">Close Time</label>
										<input class="form-control" type="time" name="close_time" value="<?php echo $row['close_time']; ?>" placeholder="Close Time" readonly />
									</div>
								</div>
									  
                            </div>
                        </div>
                  </div>
              </div>
              <!-- modal end -->