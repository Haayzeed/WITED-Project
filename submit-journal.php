<?php
include "includes/header.php";
?>
<div class="row bg-dark text-white introduction">
	<div class="container">
		<div class="row" style="height: 60px">
			<div class="col-6">
				<p>Submit Written Journals</p>
			</div>
			<div class="col-6 text-right">
				<p class="">Home . Submit Journals</p>
			</div>
		</div>
	</div>
</div>

<div class="row  mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<!-- <img src="images/board.jpg" class="rounded" style="width: 100%; height: 250px" > -->
					</div>
					<div class="col-md-12 mt-5 mb-3">
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<h2 class="">Journal Submission</h2>
								<div class="card cardd">
									<div class="card-body">
										<form>
											<fieldset class="border p-2 px-3 mb-3" style=" ">
												<legend class="w-auto" style="">Personal Data</legend>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>First Name</label>
															<input type="text" name="" class="form-control" placeholder="First Name">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Last Name</label>
															<input type="text" name="" class="form-control" placeholder="Last Name">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Email Address</label>
															<input type="text" name="" class="form-control" placeholder="Email Address">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Phone Number</label>
															<input type="text" name="" class="form-control" placeholder="Phone Number">
														</div>
													</div>

												</div>
											</fieldset>

											<fieldset class="border p-2 px-3" style=" ">
												<legend class="w-auto" style="">Journal Info</legend>
												
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Journal Title</label>
															<input type="text" name="" class="form-control" placeholder="Journal Title">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Journal File (.docx or PDF)</label>
															<input type="file" name="" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label>Journal Authors</label>
															<input type="text" name="" class="form-control" placeholder="Journal Authors">
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label>Journal Abstract</label>
															<textarea rows="5" class="form-control" style="resize: none"></textarea>
														</div>
													</div>
													
												</div>
											</fieldset>
											<div class="form-group mt-3">
												<button class="btn btn-dark text-white btn-block">Submit Journal</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php
include "includes/footer.php";
?>