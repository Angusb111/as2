<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<!---BODY------------------------------------------------>
<body class="d-flex flex-column grow-1 justify-content-stretch">
	<!--Header-->
	<?php include 'pghead.php'; ?>
	<!--main-->
	<form id="repair-booking" class="container-fluid grow-1">
		<main class="row" style="background-color:var(--cost-section-color)">
			<!------------------------------------------------------------------------------>
			<!--Customer Detail-->
			<div class="formbox col-12 col-md-12 col-lg-4 container py-4" style="background-color: var(--customer-detail-color); min-height: 20vh">
				<h4>Customer Details</h4>
				<!--Customer type-->
				<div class="row">
					<fieldset class="border border-primary col-12 col-lg-11">
						<legend class="col-11 float-none w-auto">Customer type *</legend>
						<div>
							<label class="col-12 col-md-12 col-lg-4">Customer</label>
							<input type="radio" id="customerType" name="customer-type" value="customer" checked>
						</div>
						<div>
							<label class="col-12 col-md-12 col-lg-4">Business</label>
							<input type="radio" id="businessType" name="customer-type" value="business" required>
						</div>
					</fieldset>
				</div>
				<!--Details-->
				<div class="row mt-2">
					<label class="col-12 col-md-12 col-lg-4">Title *</label>
					<select id="title" class="col-12 col-md-12 col-lg-7" required>
					  <option></option>
					  <option value="Mr">Mr</option>
					  <option value="Mrs">Mrs</option>
					  <option value="Ms">Ms</option>
					  <option value="Miss">Miss</option>
					  <option value="Dr">Dr</option>
					</select>
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">First Name *</label>
					<input class="col-12 col-md-12 col-lg-7" type="text" id="fname" required maxlength="16">
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">Last Name *</label>
					<input class="col-12 col-md-12 col-lg-7" type="text" id="lname" required maxlength="16">
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">Street *</label>
					<input class="col-12 col-md-12 col-lg-7" type="text" id="street" required>
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">Suburb *</label>
					<input class="col-12 col-md-12 col-lg-7" type="text" id="suburb" required>
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">City *</label>
					<input class="col-12 col-md-12 col-lg-7" type="text" id="city" required>
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">Postcode</label>
					<input class="col-12 col-md-12 col-lg-7" type="text" id="post" minlength="4" maxlength="4">
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">Phone *</label>
					<input class="col-12 col-md-12 col-lg-7" type="text" id="phone" required>
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">Email *</label>
					<input class="col-12 col-md-12 col-lg-7" type="text" id="email" required>
				</div>
			</div>
			<!------------------------------------------------------------------------------>
			<!--Repair Detail-->
			<div class="formbox col-12 col-md-12 col-lg-4 m-0 pl-3 container py-4" style="background-color: var(--repair-detail-color); min-height: 20vh">
				<h4>Repair Details</h4>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">Purchase Date *</label>
					<input class="col-12 col-md-12 col-lg-7" type="date" id="purchaseDate" required>
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">Repair Date *</label>
					<input class="col-12 col-md-12 col-lg-7" type="date" id="repairDate" required>
				</div>
				<!--Under Warranty-->
				<div class="row">
					<fieldset class="border border-primary col-12 col-lg-11  mb-3">
						<legend class="col-11 float-none w-auto">Under Warranty</legend>
						<div>
							<label class="col-12 col-md-12 col-lg-4">Warranty</label>
							<input type="checkbox" id="warranty">
						</div>
					</fieldset>
				</div>
				<!--Other details-->
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">IMEI *</label>
					<input class="col-12 col-md-12 col-lg-7" type="text" id="imei" required minlength="15" maxlength="17">
				</div>
				<div class="row mt-2">
					<label class="col-12 col-md-12 col-lg-4">Make *</label>
					<select id="make" class="col-12 col-md-12 col-lg-7" required>
					  <option></option>
						<option value="Apple">Apple</option>
	          <option value="LG">LG</option>
	          <option value="Motorola">Motorola</option>
	          <option value="Nokia">Nokia</option>
	          <option value="Samsung">Samsung</option>
	          <option value="Sony">Sony</option>
	          <option value="Other">Other</option>
					</select>
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">Model *</label>
					<input class="col-12 col-md-12 col-lg-7" type="text" id="model" required>
				</div>
				<div class="row mt-2">
					<label class="col-12 col-md-12 col-lg-4">Fault *</label>
					<select id="fault" class="col-12 col-md-12 col-lg-7" required>
						<option></option>
						<option value="Battery">Battery</option>
            <option value="Charging">Charging</option>
            <option value="Screen">Screen</option>
            <option value="SD-Storage">SD-Storage</option>
            <option value="Software">Software</option>
            <option value="Other">Other</option>
					</select>
				</div>
				<div class="row mt-1">
					<label class="col-12 col-md-12 col-lg-4">Description *</label>
					<textarea name="name" rows="4" cols="18" id="desc" placeholder="A short description..." required></textarea>
				</div>
				<div class="row mt-1">
					<input type='file' style="color:var(--text-color)"/>
				</div>
				<div class="row">
					<img class="col-12 col-md-6 col-lg-4" id="myImg" src="#" alt=""/>
				</div>
			</div>
			<!------------------------------------------------------------------------------>
			<div class="formbox col-12 col-md-12 col-lg-4 m-0 p-0 h-100 container">
				<!--Courtesy Phone Detail-->
				<div class="py-4" style="background-color: var(--courtesy-phone-color); min-height: 30vh">
					<h4 class="ms-3">Courtesy Phone</h4>
					<!--Item types-->
					<div class="row mt-2 g-0">
						<label class="col-12 col-md-12 col-lg-4">Item Type </label>
						<select class="col-12 col-md-12 col-lg-7 g-0" id="itemList">
						  <option value="iPhone" selected>iPhone</option>
						  <option value="otherPhone">Other Phones</option>
						  <option value="charger">Charger</option>
						</select>
					</div>
					<!--Two buttons: Add, Remove-->
					<div class="row mt-2 g-0">
						<div class="col-5 text-center">
							<button class="btn-border btn-warning p-1 w-50" id="addBtn">ADD</button>
						</div>
						<div class="col-5 text-center pe-0">
							<button class="btn-border btn-danger p-1 w-50" id="removeBtn">REMOVE</button>
						</div>
					</div>
					<!--Table of added Courtesy items-->
					<div class="row mt-2 ms-3 me-3 bg-white">
						<table class="table table-bordered" id="borrowItems">
							<tr>
								<td>Item</td>
								<td>Cost</td>
							</tr>
						</table>
					</div>
				</div>
				<!--Cost Section-->
				<div class="grow-5 py-4 container" style="background-color: var(--cost-section-color);">
					<h4 class="ms-3">Cost</h4>
					<div class="row mt-2 g-0">
						<label class="col-12 col-md-12 col-lg-4">Bond ($)</label>
						<input class="col-12 col-md-12 col-lg-7" type="number" id="bond" value="0.00" readonly>
					</div>
					<div class="row mt-1 g-0">
						<label class="col-12 col-md-12 col-lg-4">Service Fee ($)</label>
						<input class="col-12 col-md-12 col-lg-7 g-0" type="number" id="serviceFee" value="85.00" readonly>
					</div>
					<div class="row mt-1 g-0">
						<label class="col-12 col-md-12 col-lg-4">Total ($)</label>
						<input class="col-12 col-md-12 col-lg-7 g-0" type="number" id="totalFee" value="0.00" readonly>
					</div>
					<div class="row mt-1 g-0">
						<label class="col-12 col-md-12 col-lg-4">GST ($)</label>
						<input class="col-12 col-md-12 col-lg-7 g-0" type="number" id="GST" value="0.00" readonly>
					</div>
					<div class="row mt-1 g-0">
						<label class="col-12 col-md-12 col-lg-4">Total + GST ($)</label>
						<input class="col-12 col-md-12 col-lg-7 g-0" type="number" id="totalPlusGST" value="0.00" readonly>
					</div>
				</div>
			</div>
			<!--Button Section-->
			<div class="col-12 text-center pt-3 " style="background-color: var(--cost-section-color); min-height: 10vh">
				<button type="button" class="btn me-3 text-dark bg-white border border-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="loadModal()">SUBMIT</button>
				<input type="reset" class="btn me-3 text-dark bg-white border border-dark" style="width: 5em;" value="RESET">
				<a class="btn me-3 text-dark bg-white border border-dark" style="width: 5em;" type="button" name="button" style="text-decoration:none; color:black;" href="faqs.php">FAQ</a>
			</div>
			<!-- Modal -->
		</main>
	</form>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style="background-color:var(--header-color)">
					<h5 class="modal-title" id="exampleModalLabel" style="color:var(--title-color)">Confirm Information</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="background-color:var(--main-color)">
					<div class="row d-flex justify-content-between border-bottom border-dark w-100 g-0">
						<div class="col-12 col-md-12 col-lg-4 mt-3 mx-5" style="width:fit-content">
							<h4 class="fw-bold">Your Details</h4>
							<p>
							Name: 		<span id="namem"></span><br>
							Address: <br>	<span id="addressm"></span><br>
							Phone:		<span id="phonem"></span><br>
							E-Mail:		<span id="emailm"></span><br>
							Customer Type: <span id="customerTypeVarm"></span></p>
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-4 mt-3 mx-5" style=" width:fit-content">
						<h4 class="fw-bold">Repair Details</h4>
						<p>Purchase Date: <span id="purchaseDatem"></span><br>
						Repair Date: <span id="repairDatem"></span><br>
						Under Warranty: <span id="warrantym"></span><br>
						Phone Make: <span id="makem"></span><br>
						Phone Model: <span id="modelm"></span><br>
						IMEI Number: <span id="imeim"></span><br>
						Fault Category: <span id="faultm"></span><br>
						Fault Description: <span id="descm"></span></p>
					</div>
					<div class="row d-flex justify-content-between g-0">
						<div class="col-12 col-md-12 col-lg-4 mt-3 mx-5" style=" width:fit-content">
							<h4 class="fw-bold">Courtesy Loan Device Details</h4>
							<div class="row mt-2 ms-3 me-3 bg-white">
								<table class="table table-bordered" id="borrowItemsm">
									<tr>
										<td>Item</td>
										<td>Cost</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer" style="background-color:var(--header-color)">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<input type="submit" form="repair-booking" class="btn me-3 text-dark bg-white border border-dark" style="width: 5em;" value="Confirm">
				</div>
			</div>
		</div>
	</div>
	<!--insert Bootstrap JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<!--insert JQUERY-->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="js/formhandler.js"></script>
	<script src="js/genmodal.js"></script>
	<script src="js/uploadimage.js"></script>
	<?php include 'footer.php'; ?>
	<!--S$^w6KJewP1G2L%CYgVR-->
</body>
</html>
