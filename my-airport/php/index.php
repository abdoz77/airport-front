<!DOCTYPE html>
<html>
<head>
	<title>GDC Airways</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Paytone+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../styles/GDC-HomeCSSnew.css">
  <link rel="stylesheet" href="../styles/all.min.css">
</head>

<body>
       
  <!--NavBar-->
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"><img src="../Images/4b5d99c4-2f06-45be-88b2-5e4bb39f9885.png" id="logo"> GDC AIRWAYS</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      </button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><strong>Home</strong></a></li>
					<li><a href="GDC-About.php"><strong>About</strong></a></li>
					<li><a href="GDC-Contacts.php"><strong>Contacts</strong></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="GDC-SignUp.php" ><strong>Sign up </strong><i class="fas fa-user-plus"></i></a></li>
					<li><a href="GDC-Login.php" ><strong>Login </strong><i class="fas fa-user"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
  <!--NavBar End-->

  <!--Heading/Moto-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="content">
					<h1>Your  Experience  Starts  Here!</h1>
				</div>
			</div>
		</div>
	</div>
  <!--Heading/Moto End-->

  <!--Tabs-->
	<div class="container" id="second">
    <!--Tabs Headings-->
    <ul class="nav nav-tabs">
      <li class="active"><a class="tabshead" data-toggle="tab" href="#home"><i class="fas fa-plane"></i> Flights</a></li>
      <li><a class="tabshead" data-toggle="tab" href="#menu1"><i class="far fa-address-book"></i> My Bookings</a></li>
      <li><a class="tabshead" data-toggle="tab" href="#menu2"><i class="far fa-clock"></i> Flight Status</a></li>
    </ul>
    <!--Tabs Headings End-->





    <!--Tabs Content-->
    <div class="tab-content">
      <!--Tab Content Flight-->
      <div id="home" class="tab-pane fade in active">

        <h3 class="lab">Flights</h3>
        <form action="GDC-HomeConn.php" method="POST"> 
          <select name="origin" class="drop" id="ori">
        	 <option value="Origin">Origin</option>
        	 <option value="Aleppo">Aleppo International Airport</option>
        	 <option value="Damascus">Damascus International Airport</option>
        	 <option value="Dubai">Dubai International Airport</option>
        	 <option value="Baghdad">Baghdad International Airport</option>
           <option value="Riyadh">Riyadh International Airport</option>
           <option value="Beirut">Rafic Hariri International Airport</option>
          </select>
          <i class="fas fa-exchange-alt"></i>
          <select name="destination" class="drop" id="dest">
          	<option value="Destination">Destination</option>
          	<option value="Aleppo">Aleppo International Airport</option>
          	<option value="Damascus">Damascus International Airport</option>
          	<option value="Dubai">Dubai International Airport</option>
          	<option value="Baghdad">Baghdad International Airport</option>
            <option value="Riyadh">Riyadh International Airport</option>
            <option value="Beirut">Rafic Hariri International Airport</option>
          </select>
          <input type="number" class="drop" name="passengers" step="1" min="1" max="10" placeholder="Number Of Passengers">
          <span class="lab">Departure:</span>
          <input type="date" name="depart" class="drop" id="depart">
          <span class="lab">Return:</span>
          <input type="date" name="return" class="drop" id="return">
          <!-- <button type="button" name="submit" class="btn btn-default btn-lg">Search Flight</button> -->
          <input type="submit" name="submit" id="flightsButton">
        </form>




<!-- ===============================
     AVAILABLE FLIGHTS SECTION
================================ -->
<div class="available-flights glass-bg">

  <h2 class="section-title">Available Flights</h2>
  <p class="section-subtitle">Browse and book your flight tickets</p>

  <!-- Sub Tabs -->
  <ul class="nav nav-pills flight-tabs">
    <li class="active"><a data-toggle="pill" href="#allFlights">All Flights</a></li>
    <li><a data-toggle="pill" href="#localFlights">Local Flights</a></li>
    <li><a data-toggle="pill" href="#internationalFlights">International Flights</a></li>
  </ul>

  <div class="tab-content">

    <!-- ALL FLIGHTS -->
    <div id="allFlights" class="tab-pane fade in active">
      <div class="flight-card">
        <div class="flight-head">
          <i class="fa-solid fa-plane" id="plane"></i>
          <h4>FCW 8234</h4>
          <span class="badge local">Local</span>
          <span class="badge ontime">On Time</span>
        </div>

        <div class="flight-route">
          Aleppo <span>→</span> Damascus
        </div>

        <div class="flight-info">
          <span><i class="fa-solid fa-plane-departure" id="departure"></i> Departure: <b>10:30</b></span>
          <span><i class="fa-solid fa-plane-arrival" id="arrival"></i> Arrival: <b>11:45</b></span>
          <span><i class="fa-solid fa-door-closed" id="door"></i> Gate: <b>B12</b></span>
          <span><i class="fa-solid fa-terminal" id="terminal"></i> Terminal: <b>T4</b></span>
        </div>

        <div class="flight-footer">
          <span class="price">Price:$89.00</span>
          <button class="btn-book">Book Now</button>
        </div>
      </div>


           <div class="flight-card">
        <div class="flight-head">
          <i class="fa-solid fa-plane" id="plane"></i>
          <h4>EK 203</h4>
          <span class="badge international">International</span>
        </div>

        <div class="flight-route">
          Damascus <span>→</span> Dubai
        </div>

        <div class="flight-info">
          <span><i class="fa-solid fa-plane-departure" id="departure"></i> Departure: <b>10:30</b></span>
          <span><i class="fa-solid fa-plane-arrival" id="arrival"></i> Arrival: <b>11:45</b></span>
          <span><i class="fa-solid fa-door-closed" id="door"></i> Gate: <b>B12</b></span>
          <span><i class="fa-solid fa-terminal" id="terminal"></i> Terminal: <b>T4</b></span>
        </div>

        <div class="flight-footer">
          <span class="price">Price:$320.00</span>
          <button class="btn-book">Book Now</button>
        </div>
      </div>





    </div>

    <!-- LOCAL FLIGHTS -->
    <div id="localFlights" class="tab-pane fade">
      <div class="flight-card">
        <div class="flight-head">
          <i class="fa-solid fa-plane" id="plane"></i>
          <h4>SYR 110</h4>
          <span class="badge local">Local</span>
        </div>

        <div class="flight-route">
          Damascus <span>→</span> Aleppo
        </div>

        <div class="flight-info">
          <span><i class="fa-solid fa-plane-departure" id="departure"></i> Departure: <b>10:30</b></span>
          <span><i class="fa-solid fa-plane-arrival" id="arrival"></i> Arrival: <b>11:45</b></span>
          <span><i class="fa-solid fa-door-closed" id="door"></i> Gate: <b>B12</b></span>
          <span><i class="fa-solid fa-terminal" id="terminal"></i> Terminal: <b>T4</b></span>
        </div>

        <div class="flight-footer">
          <span class="price">Price:$75.00</span>
          <button class="btn-book">Book Now</button>
        </div>
      </div>
    </div>

    <!-- INTERNATIONAL FLIGHTS -->
    <div id="internationalFlights" class="tab-pane fade">
      <div class="flight-card">
        <div class="flight-head">
          <i class="fa-solid fa-plane" id="plane"></i>
          <h4>EK 203</h4>
          <span class="badge international">International</span>
        </div>

        <div class="flight-route">
          Damascus <span>→</span> Dubai
        </div>

        <div class="flight-info">
          <span><i class="fa-solid fa-plane-departure" id="departure"></i> Departure: <b>10:30</b></span>
          <span><i class="fa-solid fa-plane-arrival" id="arrival"></i> Arrival: <b>11:45</b></span>
          <span><i class="fa-solid fa-door-closed" id="door"></i> Gate: <b>B12</b></span>
          <span><i class="fa-solid fa-terminal" id="terminal"></i> Terminal: <b>T4</b></span>
        </div>

        <div class="flight-footer">
          <span class="price">Price:$320.00</span>
          <button class="btn-book">Book Now</button>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- ===============================
     AVAILABLE FLIGHTS SECTION END
================================ -->





      </div>
      <!--Tab Content Flight End-->









      <!--Tab Content My Bookings-->
      <div id="menu1" class="tab-pane fade">
        <table class="bookings-table">
              <thead>
                <tr>
                  <th>Ticket Id</th>
                  <th>Flight Id</th>
                  <th>Route</th>
                  <th>Departure</th>
                  <th>Return</th>
                  <th>Passengers</th>
                  <th>Class</th>
                  <th>Payment</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>BK001</td>
                  <td>FCW 8234</td>
                  <td>Aleppo → Damascus</td>
                  <td>2024-07-15</td>
                  <td>2024-07-20</td>
                  <td>2</td>
                  <td>Economy</td>
                  <td>Paid</td>
                  <td class="status confirmed">Confirmed</td>
                </tr>
                <tr>
                  <td>BK002</td>
                  <td>EK 203</td>
                  <td>Damascus → Dubai</td>
                  <td>2024-08-05</td>
                  <td>2024-08-10</td>
                  <td>1</td>
                  <td>Business</td>
                  <td>Unpaid</td>
                  <td class="status pending">Pending</td>
                </tr>
              </tbody>
      </table>

    	</div>
      <!--Tab Content My Bookings Ends-->









      <!--Tab Content Flight Status-->
      <div id="menu2" class="tab-pane fade">
        <h3 class="lab2">Flight Status</h3>
        <form action="GDC-FlightStatus.php" method="POST">
          <input type="text" name="flightid" placeholder="Flight Id" class="drop2">
          <select name="origin" class="drop2">.
          	<option value="org">Origin</option>
          	<option value="Aleppo">Aleppo International Airport</option>
          	<option value="Damascus">Damascus International Airport</option>
          	<option value="Dubai">Dubai International Airport</option>
          	<option value="Baghdad">Baghdad International Airport</option>
            <option value="Riyadh">Riyadh International Airport</option>
            <option value="Beirut">Rafic Hariri International Airport</option>
          </select>
          <span class="lab2">Date:</span>
          <input type="date" name="depart" class="drop21">
          <input type="submit" name="submit" id="fsButton">
        </form>
      </div>
      <!--Tab Content Flight Status Ends-->



    </div>
    <!--Tab Contents End-->
  </div>
  <!--Tabs End-->

 

  
  <script type="text/javascript" src="../GDC-HomeJSnew.js"></script>
</body>
</html>

<?php
        error_reporting(0);
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $db="gdcairways";
        $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
        if(!$conn)
        {
          echo "Connection was failed".mysqli_connect_error();
        }
        $uname=$_POST['usernameSignUp'];
        $uname=mysqli_real_escape_string($conn,$uname);
        $em=$_POST['emailid'];
        $em=mysqli_real_escape_string($conn,$em);
        $passsign=$_POST['passwordSignUp'];
        $passsign=mysqli_real_escape_string($conn,$passsign);
        $confsign=$_POST['confpassword'];
        $confsign=mysqli_real_escape_string($conn,$confsign);
        $sbtn=$_POST['submit'];

        $unamelg=$_POST['usernameLogin'];
        $unamelg=mysqli_real_escape_string($conn,$unamelg);
        $passlg=$_POST['passwordLogin'];
        $passlg=mysqli_real_escape_string($conn,$passlg);
        $lbtn=$_POST['submit'];
    
        if(!empty($uname) && !empty($em) && !empty($passsign) && !empty($confsign) && $passsign==$confsign && $sbtn=="SUBMIT")
        {
          $sql="Insert into users values('".$uname."','".$em."','".$passsign."')";
          if(mysqli_query($conn,$sql))
          {
            echo "Done";
          }
          else
          {
            echo "Something Went Wrong";
          }
        }

        if(!empty($unamelg) && !empty($passlg) && $lbtn=="LOGIN")
        {
          $sql="select username, password from users";
          if(mysqli_query($conn,$sql))
          {
            $print=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($print))
            {
              if($row['username']==$unamelg && $row['password']==$passlg)
              {
                echo "<script type='text/javascript'>
                      alert('Welcome');
                      </script>";
                $ch=1;
              }
            }
            if($ch!=1)
            {
              echo "<script type='text/javascript'>
                      alert('Invalid Credentials');
                      </script>";
            }
          }
          else
          {
            echo "Something Went Wrong";
          }
        }

?>