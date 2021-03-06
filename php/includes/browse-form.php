<div class="row">
	<div class="col-xs-4" id="browse-form">
 		<!-- Search input-->
<!--
		<form class="form" role="search">
	        <div class="form-group">
			    <div class="input-group">
			      <input type="text" class="form-control" placeholder="Search">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
			      </span>
			    </div>
	        </div>
	    </form>
-->
        <h4>Find Projects: <a href="#" data-toggle="tooltip" data-placement="bottom" title="Search by project name, description and keywords. Leave blank to show all"><span class="glyphicon glyphicon-info-sign"></span></a></h4>
        <div class="input-group">
         <input id="searchinput" class="form-control" placeholder="Search for..." value="" type="search"> <span id="searchclear" class="glyphicon glyphicon-remove-circle"></span>
        <span class="input-group-btn">
           <button id="filter-btn" class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
        </span>
        </div>
	    <h4>Filter by: <a href="#" data-toggle="tooltip" data-placement="bottom" title="You may browse for projects with specific attributes including field of science, project status, intended age group, and many others."><span class="glyphicon glyphicon-info-sign"></span></a></h4>
		<div class="panel-group" id="accordion">
		  <div class="panel panel-default" id="field_of_science">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" href="#collapseOne">
		          Field of Science
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse">
		      <div class="panel-body">
				  <div class="checkbox">
				    <label for="field-of-science-0">
				      <input type="checkbox" name="field_animals" id="field-of-science-0" value="1">
				      Animals
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="field-of-science-1">
				      <input type="checkbox" name="field_archeology" id="field-of-science-1" value="1">
				      Archeology
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="field-of-science-2">
				      <input type="checkbox" name="field_astronomy_space" id="field-of-science-2" value="1">
				      Astronomy & Space
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="field-of-science-3">
				      <input type="checkbox" name="field_awards" id="field-of-science-3" value="1">
				      Awards
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="field-of-science-4">
				      <input type="checkbox" name="field_biology" id="field-of-science-4" value="1">
				      Biology
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="field-of-science-5">
				      <input type="checkbox" name="field_birds" id="field-of-science-5" value="1">
				      Birds
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="field-of-science-6">
				      <input type="checkbox" name="field_chemistry" id="field-of-science-6" value="1">
				      Chemistry
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="field-of-science-7">
				      <input type="checkbox" name="field_climate_weather" id="field-of-science-7" value="1">
				      Climate & Weather
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-8">
				      <input type="checkbox" name="field_computers_technology" id="field-of-science-8" value="1">
				      Computers & Technology
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-9">
				      <input type="checkbox" name="field_crowd_funding" id="field-of-science-9" value="1">
				      Crowd Funding
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-10">
				      <input type="checkbox" name="field_ecology_environment" id="field-of-science-10" value="1">
				      Ecology & Environment
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-11">
				      <input type="checkbox" name="field_education" id="field-of-science-11" value="1">
				      Education
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-12">
				      <input type="checkbox" name="field_food" id="field-of-science-12" value="1">
				      Food
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-13">
				      <input type="checkbox" name="field_geology_earth_science" id="field-of-science-13" value="1">
				      Geology & Earth Science
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-14">
				      <input type="checkbox" name="field_health_medicine" id="field-of-science-14" value="1">
				      Health & Medicine
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-15">
				      <input type="checkbox" name="field_insects" id="field-of-science-15" value="1">
				      Insects
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-16">
				      <input type="checkbox" name="field_nature_outdoors" id="field-of-science-16" value="1">
				      Nature & Outdoors
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-17">
				      <input type="checkbox" name="field_ocean_water" id="field-of-science-17" value="1">
				      Ocean & Water
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-18">
				      <input type="checkbox" name="field_physics" id="field-of-science-18" value="1">
				      Physics
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-19">
				      <input type="checkbox" name="field_psychology" id="field-of-science-19" value="1">
				      Psychology
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-20">
				      <input type="checkbox" name="field_science_policy" id="field-of-science-20" value="1">
				      Science Policy
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-21">
				      <input type="checkbox" name="field_sound" id="field-of-science-21" value="1">
				      Sound
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="field-of-science-22">
				      <input type="checkbox" name="field_transportation" id="field-of-science-22" value="1">
				      Transportation
				    </label>
				  </div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default" id="status">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" href="#collapseTwo">
		          Project Status
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse">
		      <div class="panel-body">
				  <div class="checkbox">
				    <label for="status-0">
				      <input type="checkbox" name="status" id="status-0" value="Pending">
				      Pending
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="status-1">
				      <input type="checkbox" name="status" id="status-1" value="Active">
				      Active
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="status-2">
				      <input type="checkbox" name="status" id="status-2" value="Active but Seasonal">
				      Active but Seasonal
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="status-3">
				      <input type="checkbox" name="status" id="status-3" value="Complete">
				      Complete
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="status-4">
				      <input type="checkbox" name="status" id="status-4" value="Hiatus">
				      Hiatus
				    </label>
					</div>
		      </div>
		    </div>
		  </div>
		  
		  <div class="panel panel-default" id="sponsors">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" href="#collapseThree">
		          Agency Sponsor
		        </a>
		      </h4>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse">
		      <div class="panel-body">
				  <div class="checkbox">
				    <label for="agency-sponsor-0">
				      <input type="checkbox" name="sponsors_blm" id="agency-sponsor-0" value="1">
				      Bureau of Land Management (BLM)
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-1">
				      <input type="checkbox" name="sponsors_dhs" id="agency-sponsor-1" value="1">
				      Department of Homeland Security (DHS)
				    </label>
			      </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-2">
				      <input type="checkbox" name="sponsors_doi" id="agency-sponsor-2" value="1">
				      U.S. Department of the Interior (DOI)
				    </label>
			      </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-3">
				      <input type="checkbox" name="sponsors_epa" id="agency-sponsor-3" value="1">
				      U.S. Environmental Protection Agency (EPA)
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-4">
				      <input type="checkbox" name="sponsors_hhs" id="agency-sponsor-4" value="1">
				      United States Department of Health and Human Services (HHS)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-5">
				      <input type="checkbox" name="sponsors_nara" id="agency-sponsor-5" value="1">
				      National Archives and Records Administration (NARA)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-6">
				      <input type="checkbox" name="sponsors_nasa" id="agency-sponsor-6" value="1">
				      National Aeronautics and Space Administration (NASA)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-7">
				      <input type="checkbox" name="sponsors_nih" id="agency-sponsor-7" value="1">
				      National Institutes of Health (NIH)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-8">
				      <input type="checkbox" name="sponsors_noaa" id="agency-sponsor-8" value="1">
				      National Oceanic and Atmospheric Administration (NOAA)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-9">
				      <input type="checkbox" name="sponsors_nsf" id="agency-sponsor-9" value="1">
				      National Science Foundation (NSF)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-10">
				      <input type="checkbox" name="sponsors_nps" id="agency-sponsor-10" value="1">
				      U.S. National Park Service (NPS)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-11">
				      <input type="checkbox" name="sponsors_ssa" id="agency-sponsor-11" value="1">
				      The United States Social Security Administration (SSA)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-12">
				      <input type="checkbox" name="sponsors_usstate" id="agency-sponsor-12" value="1">
				      U.S Department of State
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-13">
				      <input type="checkbox" name="sponsors_usagriculture" id="agency-sponsor-13" value="1">
				      U.S. Department of Agriculture
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-14">
				      <input type="checkbox" name="sponsors_usaid" id="agency-sponsor-14" value="1">
				      U.S. Agency for International Development (USAID)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-15">
				      <input type="checkbox" name="sponsors_usfs" id="agency-sponsor-15" value="1">
				      U.S. Forest Service (USFS)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-16">
				      <input type="checkbox" name="sponsors_usgs" id="agency-sponsor-16" value="1">
				      U.S. Geological Survey (USGS)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-17">
				      <input type="checkbox" name="sponsors_si" id="agency-sponsor-17" value="1">
				      Smithsonian Institute (SI)
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-18">
				      <input type="checkbox" name="sponsors_legislative" id="agency-sponsor-18" value="1">
				      Other legislative branch agency
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-19">
				      <input type="checkbox" name="sponsors_executive" id="agency-sponsor-19" value="1">
				      Other executive branch agency
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-20">
				      <input type="checkbox" name="sponsors_judicial" id="agency-sponsor-20" value="1">
				      Other judicial branch agency
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-sponsor-21">
				      <input type="checkbox" name="sponsors_independent" id="agency-sponsor-21" value="1">
				      Other Independent agency
				    </label>
                  </div>                  
		      </div>
		    </div>
		  </div>		  

		  <div class="panel panel-default" id="partners">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" href="#collapsePartners">
		          Agency Partner
		        </a>
		      </h4>
		    </div>
		    <div id="collapsePartners" class="panel-collapse collapse">
		      <div class="panel-body">
				  <div class="checkbox">
				    <label for="agency-partner-0">
				      <input type="checkbox" name="partners_state_local_government" id="agency-partner-0" value="1">
				      State or Local Government
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="agency-partner-1">
				      <input type="checkbox" name="partners_formal_nonprofit_ngo" id="agency-partner-1" value="1">
				      Formal Non-Profit/NGO
				    </label>
			      </div>
				  <div class="checkbox">
				    <label for="agency-partner-2">
				      <input type="checkbox" name="partners_community_group" id="agency-partner-2" value="1">
				      Community Group
				    </label>
			      </div>
				  <div class="checkbox">
				    <label for="agency-partner-3">
				      <input type="checkbox" name="partners_college_university" id="agency-partner-3" value="1">
				      College or University
				    </label>
				  </div>
				  <div class="checkbox">
				    <label for="agency-partner-4">
				      <input type="checkbox" name="partners_k12education" id="agency-partner-4" value="1">
				      K-12 Education
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-partner-5">
				      <input type="checkbox" name="partners_museum" id="agency-partner-5" value="1">
				      Museum
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-partner-6">
				      <input type="checkbox" name="partners_forprofit" id="agency-partner-6" value="1">
				      For-Profit
				    </label>
                  </div>
				  <div class="checkbox">
				    <label for="agency-partner-7">
				      <input type="checkbox" name="partners_other" id="agency-partner-7" value="1">
				      Other
				    </label>
                  </div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default" id="geographic_scope">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" href="#collapseGeo">
		          Geographic Scope
		        </a>
		      </h4>
		    </div>
		    <div id="collapseGeo" class="panel-collapse collapse">
		      <div class="panel-body">
				  <div class="checkbox">
				    <label for="geographic-scope-0">
				      <input type="checkbox" name="geographic_scope" id="geographic-scope-0" value="International">
				      International
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="geographic-scope-1">
				      <input type="checkbox" name="geographic_scope" id="geographic-scope-1" value="National">
				      National
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="geographic-scope-2">
				      <input type="checkbox" name="geographic_scope" id="geographic-scope-2" value="Regional">
				      Regional
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="geographic-scope-3">
				      <input type="checkbox" name="geographic_scope" id="geographic-scope-3" value="Local">
				      Local
				    </label>
					</div>
		      </div>
		    </div>
		  </div>

		  <div class="panel panel-default" id="participant_age">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" href="#collapseFour">
		          Participant Age
		        </a>
		      </h4>
		    </div>
		    <div id="collapseFour" class="panel-collapse collapse">
		      <div class="panel-body">
				  <div class="checkbox">
				    <label for="participant-age-0">
				      <input type="checkbox" name="age_public" id="participant-age-0" value="1">
				      General Public
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="participant-age-1">
				      <input type="checkbox" name="age_families" id="participant-age-1" value="1">
				      Families
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="participant-age-2">
				      <input type="checkbox" name="age_elementary" id="participant-age-2" value="1">
				      Elementary School Children
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="participant-age-3">
				      <input type="checkbox" name="age_middle" id="participant-age-3" value="1">
				      Middle School Children
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="participant-age-4">
				      <input type="checkbox" name="age_teens" id="participant-age-4" value="1">
				      Teens
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="participant-age-5">
				      <input type="checkbox" name="age_seniors" id="participant-age-5" value="1">
				      Seniors
				    </label>
					</div>
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default" id="outcomes">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" href="#collapseFive">
		          Intended Outcomes
		        </a>
		      </h4>
		    </div>
		    <div id="collapseFive" class="panel-collapse collapse">
		      <div class="panel-body">
				  <div class="checkbox">
				    <label for="outcomes-0">
				      <input type="checkbox" name="outcomes_research" id="outcomes-0" value="1">
				      Research Advancement
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="outcomes-1">
				      <input type="checkbox" name="outcomes_operational" id="outcomes-1" value="1">
				      Operational Integration or Use
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="outcomes-2">
				      <input type="checkbox" name="outcomes_regulation" id="outcomes-2" value="1">
				      Regulation
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="outcomes-3">
				      <input type="checkbox" name="outcomes_education" id="outcomes-3" value="1">
				      Education
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="outcomes-4">
				      <input type="checkbox" name="outcomes_community" id="outcomes-4" value="1">
				      Community Engagement / Outreach
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="outcomes-5">
				      <input type="checkbox" name="outcomes_policy" id="outcomes-5" value="1">
				      Inform Public Policy
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="outcomes-6">
				      <input type="checkbox" name="outcomes_proofconcept" id="outcomes-6" value="1">
				      Proof of Concept
				    </label>
					</div>
				  <div class="checkbox">
				    <label for="outcomes-7">
				      <input type="checkbox" name="outcomes_other" id="outcomes-7" value="1">
				      Other
				    </label>
					</div>
		      </div>
		    </div>
		  </div>
		</div>
	</div> <!-- end left side -->
	<div class="col-xs-8">
		<div id="browse-map"></div>
		<div><a href="http://inventory.cartodb.com/tables/inventory/public">View data and download options</a></div>
	</div>
</div> <!-- end row -->

<!-- modal window for item details -->
<div class="modal fade" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="modalLabel">hi</h4>
      </div>
      <div class="modal-body">
		<dl class="dl-horizontal" id="m-field">
		  <dt>Field of Science</dt>
		  <dd>
		  	<span class="label label-warning bool-labels" id="m-field_animals">Animals</span>
		  	<span class="label label-warning bool-labels" id="m-field_archeology">Archeology</span>
		  	<span class="label label-warning bool-labels" id="m-field_astronomy_space">Astronomy & Space</span>
		  	<span class="label label-warning bool-labels" id="m-field_awards">Awards</span>
		  	<span class="label label-warning bool-labels" id="m-field_biology">Biology</span>
		  	<span class="label label-warning bool-labels" id="m-field_birds">Birds</span>
		  	<span class="label label-warning bool-labels" id="m-field_chemistry">Chemistry</span>
		  	<span class="label label-warning bool-labels" id="m-field_climate_weather">Climate & Weather</span>
		  	<span class="label label-warning bool-labels" id="m-field_computers_technology">Computers & Technology</span>
		  	<span class="label label-warning bool-labels" id="m-field_crowd_funding">Crowd Funding </span>
		  	<span class="label label-warning bool-labels" id="m-field_ecology_environment">Ecology & Environment</span>
		  	<span class="label label-warning bool-labels" id="m-field_education">Education</span>
		  	<span class="label label-warning bool-labels" id="m-field_food">Food</span>
		  	<span class="label label-warning bool-labels" id="m-field_geology_earth_science">Geology & Earth Science</span>
		  	<span class="label label-warning bool-labels" id="m-field_health_medicine">Health & Medicine</span>
		  	<span class="label label-warning bool-labels" id="m-field_insects">Insects</span>


		  	<span class="label label-warning bool-labels" id="m-field_nature_outdoors">Nature & Outdoors</span>
		  	<span class="label label-warning bool-labels" id="m-field_ocean_water">Ocean & Water</span>
		  	<span class="label label-warning bool-labels" id="m-field_physics">Physics</span>
		  	<span class="label label-warning bool-labels" id="m-field_psychology">Psychology</span>
		  	<span class="label label-warning bool-labels" id="m-field_science_policy">Science Policy</span>
		  	<span class="label label-warning bool-labels" id="m-field_sound">Sound</span>
		  	<span class="label label-warning bool-labels" id="m-field_transportation">Transportation</span>
		  	<span>&nbsp;</span>
		  </dd>
		</dl>		
		<dl class="dl-horizontal" id="m-project_url">
		  <dt>URL</dt>
		  <dd>Text</dd>
		</dl>
		<dl class="dl-horizontal" id="m-project_description">
		  <dt>Project Description</dt>
		  <dd>Text</dd>
		</dl>
		<dl class="dl-horizontal" id="m-keywords">
		  <dt>Keywords</dt>
		  <dd>Text</dd>
		</dl>
		<dl class="dl-horizontal" id="m-status">
		  <dt>Status</dt>
		  <dd>Text</dd>
		</dl>
		<dl class="dl-horizontal" id="m-start_date">
		  <dt>Start Date</dt>
		  <dd>Text</dd>
		</dl>
		<dl class="dl-horizontal" id="m-sponsors">
		  <dt>Agency Sponsors</dt>
		  <dd>
		  	<span class="label label-warning bool-labels" id="m-sponsors_blm">Bureau of Land Management (BLM)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_dhs">Department of Homeland Security (DHS)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_doi">U.S. Department of the Interior (DOI)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_epa">U.S. Environmental Protection Agency (EPA)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_hhs">United States Department of Health and Human Services (HHS)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_nara">National Archives and Records Administration (NARA)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_nasa">National Aeronautics and Space Administration (NASA)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_nih">National Institutes of Health (NIH)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_noaa">National Oceanic and Atmospheric Administration (NOAA)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_nsf">National Science Foundation (NSF)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_nps">U.S. National Park Service (NPS)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_ssa">The United States Social Security Administration (SSA)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_usstate">U.S Department of State</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_usagriculture">U.S. Department of Agriculture</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_usaid">U.S. Agency for International Development (USAID)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_usgs">U.S. Geological Survey (USGS)</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_si">Smithsonian Institute (SI)</span>

		  	<span class="label label-warning bool-labels" id="m-sponsors_legislative">Other legislative branch agency</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_executive">Other executive branch agency</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_judicial">Other judicial branch agency</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_independent">Other Independent agency</span>
		  	<span class="label label-warning bool-labels" id="m-sponsors_usfs">U.S. Forest Service (USFS)</span>
		  	<span>&nbsp;</span>
		  </dd>
		</dl>
		<dl class="dl-horizontal" id="m-partners"> <!--TODO-->
		  <dt>Agency Partner</dt>
		  <dd>
		  	<span class="label label-info bool-labels" id="m-partners_state_local_government">State or Local Government</span>
		  	<span class="label label-info bool-labels" id="m-partners_formal_nonprofit_ngo">Formal Non-Profit/NGO</span>
		  	<span class="label label-info bool-labels" id="m-partners_community_group">Community Group</span>
		  	<span class="label label-info bool-labels" id="m-partners_college_university">College or University</span>
		  	<span class="label label-info bool-labels" id="m-partners_k12education">K-12 Education</span>
		  	<span class="label label-info bool-labels" id="m-partners_forprofit">For-Profit</span>
		  	<span class="label label-info bool-labels" id="m-partners_other">Other</span>		  	
		  	<span>&nbsp;</span>
		  </dd>
		</dl>		
		<dl class="dl-horizontal" id="m-geographic_scope">
		  <dt>Geographic Scope</dt>
		  <dd>Text</dd>
		</dl>
		<dl class="dl-horizontal" id="m-ages"> <!--TODO-->
		  <dt>Participant Age</dt>
		  <dd>
		  	<span class="label label-info bool-labels" id="m-age_public">General Public</span>
		  	<span class="label label-info bool-labels" id="m-age_families">Families</span>
		  	<span class="label label-info bool-labels" id="m-age_elementary">Elementary School</span>
		  	<span class="label label-info bool-labels" id="m-age_middle">Middle School</span>
		  	<span class="label label-info bool-labels" id="m-age_teens">Teens</span>
		  	<span class="label label-info bool-labels" id="m-age_seniors">Seniors</span>
		  	<span>&nbsp;</span>
		  </dd>
		</dl>
		<dl class="dl-horizontal" id="m-outcomes">
		  <dt>Intended Outcomes</dt>
		  <dd>
		  	<span class="label label-warning bool-labels" id="m-outcomes_research">Research Advancement</span>
		  	<span class="label label-warning bool-labels" id="m-outcomes_operational">Operational Integration or Use</span>
		  	<span class="label label-warning bool-labels" id="m-outcomes_regulation">Regulation</span>
		  	<span class="label label-warning bool-labels" id="m-outcomes_education">Education / Outreach</span>
		  	<span class="label label-warning bool-labels" id="m-outcomes_community">Community Engagement</span>
		  	<span class="label label-warning bool-labels" id="m-outcomes_policy">Inform Public Policy</span>
		  	<span class="label label-warning bool-labels" id="m-outcomes_proofconcept">Proof of Concept</span>
		  	<span class="label label-warning bool-labels" id="m-outcomes_other">Other</span>
		  	<span>&nbsp;</span>
		  </dd>
		</dl>
		<dl class="dl-horizontal" id="m-participation_type">
		  <dt>Participation Type</dt>
		  <dd>
		  	<span class="label label-info bool-labels" id="m-age_seniors">Seniors</span>
		  	<span>&nbsp;</span>
		  </dd>
		</dl>
		<dl class="dl-horizontal" id="m-contact-info">
		  <dt>Contact Information</dt>
		  <dd>
		  	<address>
		  		<strong><span id="m-project_contact"></span></strong><br>
		  		<span id="m-affiliation"></span><br>
		  		<span id="m-street_address"></span><br>
		  		<span id="m-street_address_2"></span><br>
		  		<span id="m-city"></span>, <span id="m-state"></span><span id="m-zip"></span><br>
		  		<br>
		  		<span id="m-email"></span>
		  		<span id="m-phone"></span>
		  	</address>
		  </dd>
		</dl>
<!--
		<dl class="dl-horizontal" id="m-label">
		  <dt>Label</dt>
		  <dd>Text</dd>
		</dl>
-->
      </div>
    </div>
  </div>
</div>
