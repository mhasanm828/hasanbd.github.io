
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $_POST['name'] ?> </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles -->
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <div class="container">
             <center style="padding-top: 100px;"> 
  <img id="previewImage1" src="https://placekitten.com/200/200"  style="height:300px; width: 300px;" class="img-fluid"><br>

              <p> profile picture </p>
              <br>

        <h1 class="mt-4">
          <?php echo $_POST['name'] ?>
        </h1>
        <br>
                      </center>




        
        <h2>Personal Information</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th>Applicant's Name:</th>
                    <td><?php echo $_POST['name'] ?> <br>

                    <?php echo $_POST['nameBn'] ?>
                        </td>
                </tr>
                <tr>
                    <th>Father's Name:</th>
                    <td><?php echo $_POST['fname'] ?>
 <br>
<?php echo $_POST['fnamebn'] ?>
</td>
                </tr>
                <tr>
                    <th>Mother's Name:</th>
                    <td>
<?php echo $_POST['mname'] ?> <br><?php echo $_POST['mnamebn'] ?> </td>
                </tr>
                <tr>
                    <th>Date of Birth:</th>
                    <td><?php echo $_POST['dob'] ?></td>
                </tr>
                                <tr>
                    <th>National ID:</th>
                    <td><?php echo $_POST['id'] ?> </td>
                </tr>

                <tr>
                    <th>Nationality:</th>
                    <td>Bangladeshi</td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td><?php echo $_POST['gender'] ?></td>
                </tr>
                <tr>
                    <th>Religion:</th>
                    <td>Islam</td>
                </tr>
                                <tr>
                    <th>Contact Mobile:</th>
                    <td><?php echo $_POST['phone'] ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo $_POST['email'] ?></td>
                </tr>
                <tr>
                    <th>Bloog Group :</th>
                    <td><?php echo $_POST['blood'] ?> </td>
                </tr>
                        <tr>
                    <th>Body Heigh :</th>
                    <td><?php echo $_POST['height'] ?></td>
                </tr>
                <tr>
                    <th>Marital Status:</th>
                    <td><?php echo $_POST['maritalStatus'] ?></td>
                </tr>

                <tr>
                    <th>Home District:</th>
                    <td><?php echo $_POST['homeDistrict'] ?></td>
                </tr>
            </tbody>
        </table>
   <center>

  <img id="previewImage2" src="https://placekitten.com/200/200"  style="height:80px; width: 300px;" ><br>

              <p>Signature  </p>
              <br>
</center>

            <!---img style="padding-right: 100px;"  id="previewImage2" style="height:300px; width: 80px;"  src="#" width="300 300" alt="Signature" class="img-fluid">
<p>signature</p--->
        <!-- Add the rest of your content here --
<p>address </p>
        <h3>Mailing/Present Address:</h3>
        <!-- Include mailing/present address details -->

<h3>permanent address </h3>
        <table class="table">
            <tbody>
                <tr>
                    <th>Care of:</th>
                    <td>
                        <?php echo $_POST['fname'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Village:</th>
                    <td><?php echo $_POST['village'] ?>,</td>
                </tr>
                <tr>
                    <th>Post:</th>
                    <td><?php echo $_POST['post'] ?></td>
                </tr>
                <tr>
                    <th>ZIP:</th>
                    <td><?php echo $_POST['zip'] ?></td>
                </tr>
                <tr>
                    <th>Upzala:</th>
                    <td><?php echo $_POST['upazila'] ?></td>
                </tr>
                <tr>
                    <th>District:</th>
                    <td><?php echo $_POST['homeDistrict'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    
        
        <!-- Examination Details Table -->
        <h3>Examination Details</h3>
        
        
        <!-- Add the rest of your content here --

        <h3>Mailing/Present Address:</h3>
        <!-- Include mailing/present address details -->
     <!-- Permanent Address Table -->
     <br><br>
        <!---h3>Permanent Address:</h3>
        <table class="table">
            <tbody>
                <tr>
                    <th>Examination</th>
                    <td>SSC </td>
                    <td>HSC</td>
                </tr>
                <tr>
                    <th>Board/Institute</th>
                    <td><?php echo $_POST['sscBoard'] ?></td>
                    <td><?php echo $_POST['hscBoard'] ?></td>

                </tr>
                <tr>
                    <th>Group/Subject/Degree:</th>
                    
                    <td>Science</td>
                    <td>Science</td>
                </tr>
                <tr>
                    <th>Result</th>
                    <td><?php echo $_POST['sscgpa'] ?></td>
                    <td><?php echo $_POST['hscgpa'] ?></td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td><?php echo $_POST['sscyear'] ?></td>
                    <td><?php echo $_POST['hscyear'] ?></td>
                </tr>
                <tr>
                    <th>Roll:</th>
                    <td><?php echo $_POST['sscroll'] ?></td>
                    <td><?php echo $_POST['hscroll'] ?></td>
                </tr>
                   <tr>
                    <th>Registration:</th>
                    <td><?php echo $_POST['sscregi'] ?> </td>
                    <td><?php echo $_POST['hscregi'] ?> </td>
                </tr>
            </tbody>
        </table>
    </div>--->
    
        
        
        
        
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="table-dark">
                <tr>
                    <th>Exam</th>
                    <th>Board</th>
                    <th>Group</th>
                    <th>Institute </th>
                    <th>Reslt</th>
                    <th>Year</th>
                    <th>Roll</th>
                    <th>Registration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>S.S.C</td>
                    <td><?php echo $_POST['sscBoard'] ?></td>
                    <td><?php echo $_POST['sscGroup'] ?></td>
                    <td><?php echo $_POST['sscInstitute'] ?></td>
                    <td><?php echo $_POST['sscResult'] ?></td>
                    <td><?php echo $_POST['sscYear'] ?></td>
                    <td><?php echo $_POST['sscRoll'] ?></td>
                    <td><?php echo $_POST['sscRegistration'] ?></td>
                </tr>
                <tr>
                    <td>H.S.C</td>
                    <td><?php echo $_POST['hscBoard'] ?></td>
                    <td><?php echo $_POST['hscGroup'] ?></td>
                    <td><?php echo $_POST['hscInstitute'] ?></td>
                    <td><?php echo $_POST['hscResult'] ?></td>
                    <td><?php echo $_POST['hscYear'] ?></td>
                    <td><?php echo $_POST['hscRoll'] ?></td>
                    <td><?php echo $_POST['hscRegistration'] ?></td>

                </tr>
            </tbody>
        </table>
    </div>
    
    <div style="text-align: center; padding-bottom: 0px; display: none;">
        <!-- Download Buttons -->
        <h3>Download Pictures</h3>
        <button onclick="downloadPicture('https://placekitten.com/200/200', 'Profile_Picture.jpg')">Download Profile Picture</button>
        <button onclick="downloadPicture('https://placekitten.com/200/100', 'Signature.jpg')">Download Signature</button>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- Your custom scripts -->
    <script>
        function downloadPicture(url, filename) {
            // Create a temporary anchor element
            var a = document.createElement('a');
            a.href = url;
            a.download = filename;

            // Trigger a click event to start the download
            a.click();
        }
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- Your custom scripts -->
    <!DOCTYPE html>
<html>
<head>
    <title>Image Selection</title>
    <style>
      input{
        display: none;
      }
      b{ font-size: 20px;
         text-align: center ;
         padding: 10px;
         background: red;
         border: 2px solid Black  ;
         border-radius: 20px;
         display: flex;
margin-bottom: 20px;
      }

    </style>
</head>
<body>
    <center>
    <label for="image1" class="btn"><b>Profile Select </b> </label>
    <input type="file" id="image1" accept="image/*">
  

    <label for="image2" class="btn btn-parimary"> <b>Signature</b> </label>
    <input type="file" id="image2" accept="image/*">
</center>

 

    <script>
        // Function to display selected image
        function previewImage(input, imgId) {
            var imgElement = document.getElementById(imgId);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    imgElement.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Event listeners for image selection
        document.getElementById("image1").addEventListener("change", function () {
            previewImage(this, "previewImage1");
        });

        document.getElementById("image2").addEventListener("change", function () {
            previewImage(this, "previewImage2");
        });
    </script>
</body>
</html>
</body>
</html>