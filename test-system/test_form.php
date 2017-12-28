<!DOCTYPE html>
<html>
<head>
	<?php  include '../include/meta_include.php' ?>
	<title>Test Form</title>
	<?php  include '../include/css_include.php' ?>
</head>
<body>
	<!--Test Form-->
	<div class="container">
		<form method="" class="m-5" action="">
			<h2>Create Test</h2>
			<div class="form-group">
				<label>Enter Test Name</label>
				<input class="form-control" type="text" name="test_name" placeholder="Test Name">
				<br>
				<div class="row">
				    <div class="col">
				    	<label>Select Test Stream</label>
				    	<select id="inputStream" class="form-control" name="test_stream">
					        <option selected>Choose Stream...</option>
					        <option>MBA-CET</option>
					        <option>MCA</option>
					        <option>MCA-CET</option>
					        <option>NIMCET</option>
					        <option>CAT</option>
				      </select>
				    </div>
				    <div class="col">
				    	<label>Enter Test Subject</label>
				    	<input type="text" class="form-control" name="test_subject" placeholder="Test Subject">
				    </div>
			    </div>
			    <br>
			    <div class="row">
			    	<div class="col-md-4">
			    		<label style="display: block">Negative Marking</label>
					    <label class="custom-control custom-checkbox">
						    <input id="neg-enable" type="checkbox" class="custom-control-input">
						    <span class="custom-control-indicator"></span>
						    <span class="custom-control-description">Enable Negative Marking</span>
						</label>
					</div>
					<div class="col-md-4" id="neg-marking">
						<label>Wrong Answer</label>
						<input type="number" class="form-control" name="on_wrong" placeholder="Marks 0-5">
					</div>
				</div>
				<br>
				<div class="row">
			    	<div class="col-md-4">
			    		<label style="display: block">Test Time</label>
					    <label class="custom-control custom-checkbox">
						    <input id="test-time-enable" type="checkbox" class="custom-control-input">
						    <span class="custom-control-indicator"></span>
						    <span class="custom-control-description">Enable Test Time</span>
						</label>
					</div>
					<div class="col-md-4" id="test-time">
						<label>Time Limit</label>
						<input type="number" class="form-control" name="test_time" placeholder="Time in Minutes">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col">
						<label style="display: block;">Test Visibility</label>
						<label class="custom-control custom-radio">
							<input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Public</span>
						</label>
						<label class="custom-control custom-radio">
							<input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Private</span>
						</label>
					</div>
				</div>
				<br>
				<button class="btn btn-dark" type="submit">Create Test</button>
			</div>
		</form>
	</div>

	<?php include '../include/js_include.php' ?>
	<script>
		window.onload = function() {
		  document.getElementById('neg-marking').style.display = 'none';
		  document.getElementById('test-time').style.display = 'none';
		};

		$('#neg-enable').click(function() {
			$('#neg-marking')[this.checked ? "show" : "hide"]();
		});	
		$('#test-time-enable').click(function() {
			$('#test-time')[this.checked ? "show" : "hide"]();
		});
	</script>
</body>
</html>