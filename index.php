<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <title>Personal Information Form</title>
</head>
<body>

<div class="container mt-4">
  <h2>Personal Information Form</h2>
     <form method="POST" action="info.php" target="_blank" enctype="multipart/form-data">


    <!-- Personal Information -->
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name"  >
    </div>

    <div class="mb-3">
      <label for="nameBangla" class="form-label">Name (Bangla)</label>
      <input type="text" class="form-control" id="nameBn" name="nameBn" >
    </div>

    <div class="mb-3">
      <label for="fatherName" class="form-label">Father's Name</label>
      <input type="text" class="form-control" id="fname" name="fname"  >
    </div>

    <div class="mb-3">
      <label for="fatherNameBangla" class="form-label">Father's Name (Bangla)</label>
      <input type="text" class="form-control" id="fnamebn" name="fnamebn" value="" >
    </div>

    <div class="mb-3">
      <label for="motherName" class="form-label">Mother's Name</label>
      <input type="text" class="form-control" id="motherName" name="mname" >
    </div>

    <div class="mb-3">
      <label for="motherNameBangla" class="form-label">Mother's Name (Bangla)</label>
      <input type="text" class="form-control" id="motherNameBangla" name="mnamebn" >
    </div>

    <div class="mb-3">
      <label for="dob" class="form-label">Date of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob" >
    </div>

    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select class="form-select" id="gender" name="gender" value="male">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>

    <!-- Contact Information -->
    <div class="mb-3">
      <label for="nid" class="form-label">National ID (NID)</label>
      <input type="tel" class="form-control" id="nid" name="id" value="284731">
    </div>

    <div class="mb-3">
      <label for="bloodType" class="form-label">Blood Type</label>
      <input type="text" class="form-control" id="bloodType" name="blood" value="AB+">
    </div>

    <div class="mb-3">
      <label for="phoneNumber" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" id="phoneNumber" name="phone" value="017234****" >
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="mdhasa****9@gmail.com">
    </div>

    <div class="mb-3">
      <label for="height" class="form-label">Height </label>
      <input type="text" class="form-control" id="height" name="height" value="5 feet * inches " >
    </div>

    <div class="mb-3">
      <label for="maritalStatus" class="form-label">Marital Status</label>
      <select class="form-select" id="maritalStatus" name="maritalStatus" >
        <option value="single">Single</option>
        <option value="married">Married</option>
        <option value="other">Other</option>
      </select>
    </div>

    <!-- Address Information -->
    <div class="mb-3">
      <label for="village" class="form-label">Village</label>
      <input type="text" class="form-control" id="village" name="village" value="Rahimpur, Harijong , charbhuta.">
    </div>

    <div class="mb-3">
      <label for="post" class="form-label">Post</label>
      <input type="text" class="form-control" id="post" name="post" value="Lalmohan UPO">
    </div>

    <div class="mb-3">
      <label for="zip" class="form-label">ZIP</label>
      <input type="text" class="form-control" id="zip" name="zip" value="8330" >
    </div>

    <div class="mb-3">
      <label for="upazila" class="form-label">Upazila</label>
      <input type="text" class="form-control" id="upazila" name="upazila" value="Lalmohan " >
    </div>

    <div class="mb-3">
      <label for="homeDistrict" class="form-label">Home District</label>
      <select class="form-select" id="homedistric" name="homeDistrict" >
        <option value="Bhola">Bhola</option>
        <option value="Bagerhat">Bagerhat</option>
        <option value="Bandarban">Bandarban</option>
        <option value="Barguna">Barguna</option>
        <option value="Barisal">Barisal</option>
        <option value="Bogra">Bogra</option>
        <option value="Brahmanbaria">Brahmanbaria</option>
        <option value="Chandpur">Chandpur</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Chuadanga">Chuadanga</option>
        <option value="Comilla">Comilla</option>
        <option value="Cox'sBazar">Cox'sBazar</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Faridpur">Faridpur</option>
        <option value="Feni">Feni</option>
        <option value="Gaibandha">Gaibandha</option>
        <option value="Gazipur">Gazipur</option>
        <option value="Gopalganj">Gopalganj</option>
        <option value="Habiganj">Habiganj</option>
        <option value="Jaipurhat">Jaipurhat</option>
        <option value="Jamalpur">Jamalpur</option>
        <option value="Jessore">Jessore</option>
        <option value="Jhalokati">Jhalokati</option>
        <option value="Jhenaidah">Jhenaidah</option>
        <option value="Khagrachari">Khagrachari</option>
        <option value="Khulna">Khulna</option>
        <option value="Kishoreganj">Kishoreganj</option>
        <option value="Kurigram">Kurigram</option>
        <option value="Kushtia">Kushtia</option>
        <option value="Lakshmipur">Lakshmipur</option>
        <option value="Lalmonirhat">Lalmonirhat</option>
        <option value="Madaripur">Madaripur</option>
        <option value="Magura">Magura</option>
        <option value="Manikganj">Manikganj</option>
        <option value="Maulvibazar">Maulvibazar</option>
        <option value="Meherpur">Meherpur</option>
        <option value="Munshiganj">Munshiganj</option>
        <option value="Mymensingh">Mymensingh</option>
        <option value="Naogaon">Naogaon</option>
        <option value="Narail">Narail</option>
        <option value="Narayanganj">Narayanganj</option>
        <option value="Narsingdi">Narsingdi</option>
        <option value="Natore">Natore</option>
        <option value="Nawabganj">Nawabganj</option>
        <option value="Netrokona">Netrokona</option>
        <option value="Nilphamari">Nilphamari</option>
        <option value="Noakhali">Noakhali</option>
        <option value="Pabna">Pabna</option>
        <option value="Panchagarh">Panchagarh</option>
        <option value="Patuakhali">Patuakhali</option>
        <option value="Pirojpur">Pirojpur</option>
        <option value="Rajbari">Rajbari</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Rangamati">Rangamati</option>
        <option value="Rangpur">Rangpur</option>
        <option value="Satkhira">Satkhira</option>
        <option value="Shariatpur">Shariatpur</option>
        <option value="Sherpur">Sherpur</option>
        <option value="Sirajganj">Sirajganj</option>
        <option value="Sunamganj">Sunamganj</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Tangail">Tangail</option>
        <option value="Thakurgaon">Thakurgaon</option>
</select>

      <input style="display: none;" type="text" class="form-control" id="homeDistrict" name="homeDistrct" >

<br><br>
    </div>

    <!-- Education Information (SSC) -->
    <div class="mb-3">
      <label for="sscBoard" class="form-label">SSC Board</label>
      <select class="form-select" id="sscboard" name="sscBoard" >
						  <option value="Barisal">Barisal</option>
						  <option value="Chittagong">Chittagong</option>
						  <option value="Comilla">Comilla</option>
                          <option value="Dhaka">Dhaka</option>
						  <option value="Dinajpur">Dinajpur</option>
						  <option value="Jessore">Jessore</option>
						  <option value="Mymensingh">Mymensingh</option>
                          <option value="Rajshahi">Rajshahi</option>
                          <option value="Sylhet">Sylhet</option>
                          <option value="drasah">Madrasah</option>
						  <option value="Technical">Technical</option>
      </select>
      
    </div>

    <div class="mb-3">
      <label for="sscGroup" class="form-label">SSC Group</label>
      <select class="form-select" id="sscgroup" name="sscGroup" >
	                      <option value="Science">Science</option>
						  <option value="Commerce">Commerce</option>
						  <option value="Humanity">Humanity</option>
                          <option value="Genetmral">General</option>
</select>


    </div>

    <div class="mb-3">
      <label for="sscInstitute" class="form-label">SSC Institute</label>
      <input type="text" class="form-control" id="sscInstitute" name="sscInstitute" value="Lalmohan Hamim Residential School and College ">
    </div>

    <div class="mb-3">
      <label for="sscResult" class="form-label">SSC Result</label>
      <input type="tel" class="form-control" id="sscResult" name="sscResult" value="GPA- 5.00" >
    </div>

    <div class="mb-3">
      <label for="sscYear" class="form-label">SSC Year</label>

   <select class="form-select" id="sscyear" name="sscYear" >
   <option value="0000" selected>Select One</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option>
                          </select>
     
    </div>

    <div class="mb-3">
      <label for="sscRoll" class="form-label">SSC Roll</label>
      <input type="tel" class="form-control" id="sscRoll" name="sscRoll" value="279374" >
    </div>

    <div class="mb-3">
      <label for="sscRegistration" class="form-label">SSC Registration</label>
      <input type="tel" class="form-control" id="sscRegistration" name="sscRegistration" value="1515326956" >
    </div>
<br><br><br>
    <!-- Education Information (HSC) -->
    <div class="mb-3">
      <label for="hscBoard" class="form-label">HSC Board</label>
   <select class="form-select" id="hscboard" name="hscBoard" >
						  <option value="Barisal">Barisal</option>
						  <option value="Chittagong">Chittagong</option>
						  <option value="Comilla">Comilla</option>
                          <option value="Dhaka">Dhaka</option>
						  <option value="Dinajpur">Dinajpur</option>
						  <option value="Jessore">Jessore</option>
						  <option value="Mymensingh">Mymensingh</option>
                          <option value="Rajshahi">Rajshahi</option>
                          <option value="Sylhet">Sylhet</option>
                          <option value="drasah">Madrasah</option>
						  <option value="Technical">Technical</option>
      </select>
      
    </div>

    <div class="mb-3">
      <label for="hscGroup" class="form-label">HSC Group</label>
   <select class="form-select" id="hscgroup" name="hscGroup" >
	                      <option value="Science">Science</option>
						  <option value="Commerce">Commerce</option>
						  <option value="Humanity">Humanity</option>
                          <option value="Genetmral">General</option>
</select>


    </div>

    
    <div class="mb-3">
      <label for="hscInstitute" class="form-label">HSC Institute</label>
      <input type="text" class="form-control" id="hscInstitute" name="hscInstitute" value="Lalmohan shahbazpur college ">
    </div>

    <div class="mb-3">
      <label for="hscResult" class="form-label">HSC Result</label>
      <input type="text" class="form-control" id="hscResult" name="hscResult" value="GPA- 4.60" >
    </div>

    <div class="mb-3">
      <label for="hscYear" class="form-label">HSC Year</label>

   <select class="form-select" id="hscyear" name="hscYear" >
   <option value="0000" selected>Select One</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option>
                          </select>
     
    </div>


    <div class="mb-3">
      <label for="hscRoll" class="form-label">HSC Roll</label>
      <input type="text" class="form-control" id="hscRoll" name="hscRoll" value="114729">
    </div>

    <div class="mb-3">
      <label for="hscRegistration" class="form-label">HSC Registration</label>
      <input type="text" class="form-control" id="hscRegistration" name="hscRegistration" value="27273883" >
    </div>
<br><br>
<center> 
    <button type="submit" style="text-align: center;" class="btn btn-primary">Submit</button></center>
<br> <br>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>