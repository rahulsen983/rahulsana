<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" href="style1.css">
	</head>
<body class="">

<header>
        <nav>
             <div class="logo">
                <a href="">BBM</a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
  
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
			<hr>
    </header>
	
	<div class="container">
	<h1 align="center" style="color:red;">Registration Form</h1>
        <form action="action_registration.php" method="POST">
            <label>Name</label>
            <input type="text" name="name">
			
			<label>Age</label>
            <input type="text"  name="age" >
			
			<label> Select Blood Group</label>
            <Select name="blood_group">
				<option>select..</option>
				<option>A+</option>
				<option>A-</option>
				<option>B+</option>
				<option>B-</option>
				<option>AB+</option>
				<option>AB-</option>
				<option>O+</option>
				<option>O-</option>
			</Select>

            <label>City</label>
            <input type="text"  name="city">

            <label>Phone</label>
            <input type="text"  name="phone">

            <button type="submit">Submit</button>
        </form>
    </div>
</body>