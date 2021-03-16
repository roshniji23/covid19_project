
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<style type="text/css">
		.div1{height: 500px; width: 800px; background-color: lightgray; border-radius: 20px; position: relative; top: 200px; left: 30%; padding: 50px;}
		.form-control{width: 400px;}
	</style>
</head>
<body>
	<form action="forget.php" method="post">
<div class="div1">
	<div class="col-md-6">
    <label for="inputEmail4" class="form-label"><h5><b>Email</b></h5></label>
    <input type="email" class="form-control"  name="email">
  </div><br>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label"><h5><b>Registered Contact No.</b></h5></label>
    <input type="text" class="form-control"  name="mobile">
  </div><br>
   <!-- <div class="col-md-6">
    <label for="inputPassword4" class="form-label"><h5><b>Registered D.O.B</b></h5></label>
    <input type="date" class="form-control" id="inputPassword4" name="dob">
  </div><br> -->
<button class="btn btn-primary" type="submit" >S u b m i t</button>

</div>
</form>
</body>
</html>
