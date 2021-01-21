<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/career.css')}}">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}
        
        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
          background-color: #555;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          opacity: 0.8;
          position: fixed;
          bottom: 23px;
          right: 28px;
          width: 280px;
        }
        
        /* The popup form - hidden by default */
        .form-popup {
          display: none;
          position: fixed;
          bottom: 0;
          right: 15px;
          border: 3px solid #f1f1f1;
          z-index: 9;
        }
        
        /* Add styles to the form container */
        .form-container {
          max-width: 300px;
          padding: 10px;
          background-color: white;
        }
        
        /* Full-width input fields */
        .form-container input[type=text], .form-container input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          border: none;
          background: #f1f1f1;
        }
        
        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }
        
        /* Set a style for the submit/login button */
        .form-container .btn {
          background-color: #4CAF50;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          margin-bottom:10px;
          opacity: 0.8;
        }
        
        /* Add a red background color to the cancel button */
        .form-container .cancel {
          background-color: red;
        }
        
        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
          opacity: 1;
        }
        </style>
</head>
<body>
    @include('partials.innernavbar')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">CAREER</p>
            <p  class="commontxtsmall">Steer your career in the right direction</p>     
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i>  Home</a>
            </button> 
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-user"></i>  Career</a>
            </button>    
        </div>
    </div>

    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="jobDetailsContainer">
                        <div class="commonTitle" style="text-align: start"><h2>Build your career with us.</h2></div>
                        <p class="joinTeamtxt">Join our amazing team.</p>
                        {{-- <p class="openingTxt text-right"><i class="fas fa-arrow-down"></i> Current Job Openings Details.</p> --}}
                        
                       
                            <div class="jobDescriptionBox mt-4">
                                <div class="row mx-auto vertical-align-center">
                                    <h5>Sales Representative</h5>
                                    <a data-toggle="collapse" href="#details" aria-expanded="false" aria-controls="details">
                                        <i  class="fas fa-eye"></i>
                                    </a>
                                 
                                      <div class="collapse" id="details">
                                        <div class="card card-body">
                                            <p class="jobTitle"><i class="fas fa-user-friends mr-2"></i>Department</p>
                                            <p class="jobTitleName">Sales</p>
                                            <p class="jobTitle"><i class="fas fa-business-time mr-2"></i>Designation</p>
                                            <p class="jobTitleName mr-10">Sales Representative</p>
                                            <p class="jobTitle"><i class="fas fa-book mr-2"></i>Description</p>
                                            <p class="desTopic mr-10">Responsibilities</p>
                                            <ul>
                                                <li>Identify potential clients and sell products/services with smart sales presentations. </li>
                                                <li>Achieve targeted sales and outcomes within a defined time frame. </li>
                                                <li>Establish and maintain positive client and business relationships.</li>
                                                <li>Work and coordinate with team members for the maximization of sales.</li>
                                                <li>Analyze the markets’ potential, track sales, and status reports. </li>
                                                <li>Report management with documentation and relevant updates on customer needs, problems, interests, competitive activities, and potential for new products and services.</li>
                                                <li>Monitor competition and keep track of best practices and promotional trends. </li>
                                                <li>Improve continuously through feedback. Requirements: • Bachelor/ Ongoing degree in business, marketing, economics or related field. </li>
                                            </ul>
                                            <p class="desTopic mr-10">Requirements</p>
                                            <ul>
                                                <li>Bachelor/ Ongoing degree in business, marketing, economics or related field.</li>
                                                <li>Highly motivated and target driven personality.</li>
                                                <li>Excellent interpersonal skills, including the ability to quickly build rapport with both customers and suppliers. Leadership skills preferred.</li>
                                                <li>ime management and organizational skills.</li>
                                                <li>Knowledge of Proposal writing is a plus</li>
                                            </ul>
                                            <p class="jobTitle"><i class="fas fa-user-tie mr-2"></i>Number of Vacancies</p>
                                            <p class="jobTitleName mr-10">2</p>

                                            <button type="button" class="btnCareerSubmit text-center" onclick="openForm()">Apply for this position</button>                                          
                                        </div>
                                      </div>
                                </div>
                            </div>

                            <div class="jobDescriptionBox mt-4">
                                <div class="row mx-auto vertical-align-center">
                                    <h5>Flutter Developer</h5>
                                    <a data-toggle="collapse" href="#details" aria-expanded="false" aria-controls="details">
                                        <i  class="fas fa-eye"></i>
                                    </a>
                                 
                                      <div class="collapse" id="details">
                                        <div class="card card-body">
                                            <p class="jobTitle"><i class="fas fa-user-friends mr-2"></i>Department</p>
                                            <p class="jobTitleName">Sales</p>
                                            <p class="jobTitle"><i class="fas fa-business-time mr-2"></i>Designation</p>
                                            <p class="jobTitleName mr-10">Sales Representative</p>
                                            <p class="jobTitle"><i class="fas fa-book mr-2"></i>Description</p>
                                            <p class="desTopic mr-10">Responsibilities</p>
                                            <ul>
                                                <li>Identify potential clients and sell products/services with smart sales presentations. </li>
                                                <li>Achieve targeted sales and outcomes within a defined time frame. </li>
                                                <li>Establish and maintain positive client and business relationships.</li>
                                                <li>Work and coordinate with team members for the maximization of sales.</li>
                                                <li>Analyze the markets’ potential, track sales, and status reports. </li>
                                                <li>Report management with documentation and relevant updates on customer needs, problems, interests, competitive activities, and potential for new products and services.</li>
                                                <li>Monitor competition and keep track of best practices and promotional trends. </li>
                                                <li>Improve continuously through feedback. Requirements: • Bachelor/ Ongoing degree in business, marketing, economics or related field. </li>
                                            </ul>
                                            <p class="desTopic mr-10">Requirements</p>
                                            <ul>
                                                <li>Bachelor/ Ongoing degree in business, marketing, economics or related field.</li>
                                                <li>Highly motivated and target driven personality.</li>
                                                <li>Excellent interpersonal skills, including the ability to quickly build rapport with both customers and suppliers. Leadership skills preferred.</li>
                                                <li>ime management and organizational skills.</li>
                                                <li>Knowledge of Proposal writing is a plus</li>
                                            </ul>
                                            <p class="jobTitle"><i class="fas fa-user-tie mr-2"></i>Number of Vacancies</p>
                                            <p class="jobTitleName mr-10">2</p>

                                            <button type="button" class="btnCareerSubmit text-center" onclick="openForm()">Apply for this position</button>                                          
                                        </div>
                                      </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="page foldtl">
                        <h4>Job Openings</h4>
                        <ul>
                            <li>Sales Representative</li>
                            <li>Flutter Developer</li>
                            <li>React Developer</li>
                          </ul>  
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class='space1'></div>
    <div class='space1'></div>

    <div class="form-popup" id="careerForm">
        <form action="#" class="form-container">
          <h5>Fill Up the Form</h5>
          <label class="careerFormLabel"><b>Name</b></label>
          <input type="text" placeholder="Enter Your Name" name="name" required>
      
          <label class="careerFormLabel" for="name"><b>Email</b></label>
          <input type="text" placeholder="Enter Your Email" name="email" required>

          <label class="careerFormLabel" for="address"><b>Address</b></label>
          <input type="text" placeholder="Enter Your Address" name="address" required>

          <label class="careerFormLabel" for="number"><b>Phone Number</b></label>
          <input type="text" placeholder="Enter Your Phone Number" name="number" required>

          <label class="careerFormLabel" for="cv"><b>Upload CV</b></label>
          <input type="file" name="cv" id="cv" required>
          <br><br>
        
          <button type="submit" class="finalSubmit">Submit</button>
          <button type="button" class="btnCareerSubmit cancel" onclick="closeForm()">Close</button>
        </form>
      </div>

     <script>
        function openForm() {
          document.getElementById("careerForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("careerForm").style.display = "none";
        }
    </script>
</body>
</html>