@extends('layouts.layout')
@section('content')

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<div class="sidebar-container">
				
				<!-- Location -->
				<div class="sidebar-widget">
					<h3>Location</h3>
					<div class="input-with-icon">
						<div id="autocomplete-container">
							<input id="autocomplete-input" type="text" placeholder="Location">
						</div>
						<i class="icon-material-outline-location-on"></i>
					</div>
				</div>

				
				<!-- Keywords -->
				<div class="sidebar-widget">
					<h3>Keywords</h3>
					<div class="keywords-container">
						<div class="keyword-input-container">
							<input type="text" class="keyword-input" placeholder="e.g. job title"/>
							<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
						</div>
						<div class="keywords-list"><!-- keywords go here --></div>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Category</h3>
					<select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" >
						<option>Admin Support</option>
						<option>Customer Service</option>
						<option>Data Analytics</option>
						<option>Design & Creative</option>
						<option>Legal</option>
						<option>Software Developing</option>
						<option>IT & Networking</option>
						<option>Writing</option>
						<option>Translation</option>
						<option>Sales & Marketing</option>
					</select>
				</div>
				
				<!-- Job Types -->
				<div class="sidebar-widget">
					<h3>Job Type</h3>

					<div class="switches-list">
						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Freelance</label>
						</div>

						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Full Time</label>
						</div>

						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Part Time</label>
						</div>

						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Internship</label>
						</div>
						<div class="switch-container">
							<label class="switch"><input type="checkbox"><span class="switch-button"></span> Temporary</label>
						</div>
					</div>

				</div>

				<!-- Salary -->
				<div class="sidebar-widget">
					<h3>Salary</h3>
					<div class="margin-top-55"></div>

					<!-- Range Slider -->
					<input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="1500" data-slider-max="15000" data-slider-step="100" data-slider-value="[1500,15000]"/>
				</div>

				<!-- Tags -->
				<div class="sidebar-widget">
					<h3>Tags</h3>

					<div class="tags-container">
						<div class="tag">
							<input type="checkbox" id="tag1"/>
							<label for="tag1">front-end dev</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag2"/>
							<label for="tag2">angular</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag3"/>
							<label for="tag3">react</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag4"/>
							<label for="tag4">vue js</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag5"/>
							<label for="tag5">web apps</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag6"/>
							<label for="tag6">design</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag7"/>
							<label for="tag7">wordpress</label>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

			</div>
		</div>
		<div class="col-xl-9 col-lg-8 content-left-offset">

			<h3 class="page-title">Search Results</h3>

			<div class="notify-box margin-top-15">
				<div class="switch-container">
					<label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label>
				</div>

				<div class="sort-by">
					<span>Sort by:</span>
					<select class="selectpicker hide-tick">
						<option>Relevance</option>
						<option>Newest</option>
						<option>Oldest</option>
						<option>Random</option>
					</select>
				</div>
			</div>

			<div class="listings-container margin-top-35">
                @foreach($jobs as $job)
                <!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/h-logo.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
						<h4 class="job-listing-company">{{$job->user->name}}<span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
                        <h3 class="job-listing-title">{{$job->jobtitle}}</h3>
                        <p class="job-listing-text">{{$job->jobdesc}}</p>
						</div>

						<!-- Bookmark -->
						<span class="bookmark-icon"></span>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<ul>
                        <li><i class="icon-material-outline-location-on"></i> {{$job->joblocation}}</li>
                        <li><i class="icon-material-outline-business-center"></i> {{$job->jobtype}}</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i>{{$job->jobpaymin}}-{{$job->jobpaymax}}</li>
							<li><i class="icon-material-outline-access-time"></i>{{$job->created_at}}</li>
						</ul>
					</div>
				</a>		




                @endforeach
				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-01.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Hexagon <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
							<h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
							<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
						</div>

						<!-- Bookmark -->
						<span class="bookmark-icon"></span>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>		

				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-02.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Coffee</h4>
							<h3 class="job-listing-title">Barista and Cashier</h3>
							<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
						</div>

						<!-- Bookmark -->
						<span class="bookmark-icon"></span>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>
				

				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-03.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">King <span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
							<h3 class="job-listing-title">Restaurant General Manager</h3>
							<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
						</div>

						<!-- Bookmark -->
						<span class="bookmark-icon"></span>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>

				<!-- Job Listing -->
				<a href="single-job-page.html" class="job-listing">

					<!-- Job Listing Details -->
					<div class="job-listing-details">
						<!-- Logo -->
						<div class="job-listing-company-logo">
							<img src="images/company-logo-04.png" alt="">
						</div>

						<!-- Details -->
						<div class="job-listing-description">
							<h4 class="job-listing-company">Mates</h4>
							<h3 class="job-listing-title">Administrative Assistant</h3>
							<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
						</div>

						<!-- Bookmark -->
						<span class="bookmark-icon"></span>
					</div>

					<!-- Job Listing Footer -->
					<div class="job-listing-footer">
						<ul>
							<li><i class="icon-material-outline-location-on"></i> San Francissco</li>
							<li><i class="icon-material-outline-business-center"></i> Full Time</li>
							<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
							<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
						</ul>
					</div>
				</a>


				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<!-- Pagination -->
						<div class="pagination-container margin-top-30 margin-bottom-60">
							<nav class="pagination">
								<ul>
									<li class="pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li><a href="#" class="current-page">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li class="pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<!-- Pagination / End -->

			</div>

		</div>
	</div>
</div>





@endsection