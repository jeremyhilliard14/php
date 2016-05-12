<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="admin-wrapper col-sm-6 col-sm-offset-3">
				<form action="admin_process.php" method="post">
					<div class="form-group">
					    <label for="exampleInputEmail1">Promotion Title</label>
					    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Promo Title">
				  	</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Header Image</label>
					    <input type="text" name="header" class="form-control" id="exampleInputPassword1" placeholder="Path to File">
					</div>
					<div class="form-group">
					    <label for="field3">Header Text</label>
					    <input type="text" name="header_text" class="form-control" id="field3" placeholder="Header Text">
					</div>
					<div class="form-group">
					    <label for="field4">Body Text</label>
					    <input type="text" name="body_text" class="form-control" id="field4" placeholder="Body Text">
					</div>
					<div class="form-group">
					    <label for="field5">Lower Image</label>
					    <input type="text" name="lower_image" class="form-control" id="field5" placeholder="Lower Image">
					</div>
					<div class="form-group">
					    <label for="field6">Lower Header</label>
					    <input type="text" name="lower_header" class="form-control" id="field6" placeholder="Lower Header">
					</div>
					<div class="form-group">
					    <label for="field7">Lower Body</label>
					    <input type="text" name="lower_body" class="form-control" id="field7" placeholder="Lower Body">
					</div>
					<div class="form-group">
					    <label for="field8">Lower Image 2</label>
					    <input type="text" name="lower_image_2" class="form-control" id="field8" placeholder="Lower Image Two">
					</div>
					<div class="form-group">
					    <label for="field9">Lower Header 2</label>
					    <input type="text" name="lower_header_2" class="form-control" id="field9" placeholder="Lower Header Two">
					</div>
					<div class="form-group">
					    <label for="field10">Lower Body 2</label>
					    <input type="text" name="lower_body_2" class="form-control" id="field10" placeholder="Lower Body Two">
					</div>
				  	<!-- <div class="form-group">
				    	<label for="exampleInputFile">File input</label>
				    	<input type="file" id="exampleInputFile">
				    	<p class="help-block">Example block-level help text here.</p>
				  	</div>
				  	<div class="checkbox">
				    	<label>
				      	<input type="checkbox"> Check me out
				    	</label>
				  	</div> -->
			  		<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>