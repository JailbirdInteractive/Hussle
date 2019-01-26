@extends('layouts.layout')


@section('content')

@include('layouts.dash_sidebar')
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner" >
                
                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Post a Job</h3>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Dashboard</a></li>
                            <li>Post a Job</li>
                        </ul>
                    </nav>
                </div>
        
                <!-- Row -->
                <div class="row">
    
                    <!-- Dashboard Box -->
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">
    <form method="POST" action="/postjob">
        @csrf
                            <!-- Headline -->
                            <div class="headline">
                                   
                                <h3><i class="icon-feather-folder-plus"></i> Job Submission Form</h3>
                            </div>
    
                            <div class="content with-padding padding-bottom-10">
                                <div class="row">
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Job Title</h5>
                                            <input type="text" class="with-border" name="jobtitle" required>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Job Type</h5>
                                            <select class="selectpicker with-border" data-size="7" title="Select Job Type" name="jobtype" required>
                                                <option>Full Time</option>
                                                <option>Freelance</option>
                                                <option>Part Time</option>
                                                <option>Internship</option>
                                                <option>Temporary</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Job Category</h5>
                                            <select class="selectpicker with-border" data-size="7" title="Select Category" name="jobcat" required>
                                                <option>Accounting and Finance</option>
                                                <option>Clerical & Data Entry</option>
                                                <option>Counseling</option>
                                                <option>Court Administration</option>
                                                <option>Human Resources</option>
                                                <option>Investigative</option>
                                                <option>IT and Computers</option>
                                                <option>Law Enforcement</option>
                                                <option>Management</option>
                                                <option>Miscellaneous</option>
                                                <option>Public Relations</option>
                                            </select>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Location</h5>
                                            <div class="input-with-icon">
                                                <div id="autocomplete-container">
                                                    <input id="autocomplete-input" class="with-border" type="text" placeholder="Type Address" name="joblocation" required>
                                                </div>
                                                <i class="icon-material-outline-location-on"></i>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Salary</h5>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="input-with-icon">
                                                        <input class="with-border" type="text" placeholder="Min" name="jobpaymin" required>
                                                        <i class="currency">USD</i>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="input-with-icon">
                                                        <input class="with-border" type="text" placeholder="Max" name="jobpaymax" required>
                                                        <i class="currency">USD</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4">
                                        <div class="submit-field">
                                            <h5>Tags <span>(optional)</span>  <i class="help-icon" data-tippy-placement="right" title="Maximum of 10 tags"></i></h5>
                                            <div class="keywords-container">
                                                <div class="keyword-input-container">
                                                    <input type="text" class="keyword-input with-border" placeholder="e.g. job title, responsibilites" name="jobtags"/>
                                                    <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                                </div>
                                                <div class="keywords-list"><!-- keywords go here --></div>
                                                <div class="clearfix"></div>
                                            </div>
    
                                        </div>
                                    </div>
    
                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <h5>Job Description</h5>
                                            <textarea cols="30" rows="5" class="with-border" name="jobdesc" required></textarea>
                                            <div class="uploadButton margin-top-30">
                                                <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
                                                <label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
                                                <span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-xl-12">
                        <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post a Job</a>
                    </div>
                   
                </div>
              
            </form>  
         @if($errors->any())
                    <div class="notification error closeable">
                            <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach    
                            </ul>
                    </div>
                    @endif             
                <!-- Row / End -->
    
                <!-- Footer -->
                <div class="dashboard-footer-spacer"></div>
                <div class="small-footer margin-top-15">
                    <div class="small-footer-copyrights">
                        © 2018 <strong>Hireo</strong>. All Rights Reserved.
                    </div>
                    <ul class="footer-social-links">
                        <li>
                            <a href="#" title="Facebook" data-tippy-placement="top">
                                <i class="icon-brand-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Twitter" data-tippy-placement="top">
                                <i class="icon-brand-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Google Plus" data-tippy-placement="top">
                                <i class="icon-brand-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="LinkedIn" data-tippy-placement="top">
                                <i class="icon-brand-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Footer / End -->
    
            
        
        <!-- Dashboard Content / End -->
    
    
    <!-- Dashboard Container / End -->
    
    <!-- Wrapper / End -->
    
    
    <!-- Scripts
    ================================================== 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/mmenu.min.js"></script>
    <script src="js/tippy.all.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/snackbar.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
    -->
    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() { 
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        }); 
    }); 
    </script>
    
    <!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
    <script src="js/chart.min.js"></script>
    <script>
        Chart.defaults.global.defaultFontFamily = "Nunito";
        Chart.defaults.global.defaultFontColor = '#888';
        Chart.defaults.global.defaultFontSize = '14';
    
        var ctx = document.getElementById('chart').getContext('2d');
    
        var chart = new Chart(ctx, {
            type: 'line',
    
            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                // Information about the dataset
                   datasets: [{
                    label: "Views",
                    backgroundColor: 'rgba(42,65,232,0.08)',
                    borderColor: '#2a41e8',
                    borderWidth: "3",
                    data: [196,132,215,362,210,252],
                    pointRadius: 5,
                    pointHoverRadius:5,
                    pointHitRadius: 10,
                    pointBackgroundColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointBorderWidth: "2",
                }]
            },
    
            // Configuration options
            options: {
    
                layout: {
                  padding: 10,
                  },
    
                legend: { display: false },
                title:  { display: false },
    
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                             borderDash: [6, 10],
                             color: "#d8d8d8",
                             lineWidth: 1,
                        },
                    }],
                    xAxes: [{
                        scaleLabel: { display: false },  
                        gridLines:  { display: false },
                    }],
                },
    
                tooltips: {
                  backgroundColor: '#333',
                  titleFontSize: 13,
                  titleFontColor: '#fff',
                  bodyFontColor: '#fff',
                  bodyFontSize: 13,
                  displayColors: false,
                  xPadding: 10,
                  yPadding: 10,
                  intersect: false
                }
            },
    
    
    });
    
    </script>
    
    
    <!-- Google Autocomplete -->
    <script>
        function initAutocomplete() {
             var options = {
              types: ['(cities)'],
              // componentRestrictions: {country: "us"}
             };
    
             var input = document.getElementById('autocomplete-input');
             var autocomplete = new google.maps.places.Autocomplete(input, options);
    
            if ($('.submit-field')[0]) {
                setTimeout(function(){ 
                    $(".pac-container").prependTo("#autocomplete-container");
                }, 300);
            }
        }
    </script>
    
    <!-- Google API & Maps -->
    <!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
    
    @endsection