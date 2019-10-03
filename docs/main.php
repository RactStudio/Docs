	<div class="container-fluid">

		<!-- Column Left --->
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
					
				<!-- Left Sidebar -->
				<div rs-include-html="menu-left.php"></div>
				
		</div>

		<!-- Column Content --->
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<div class="rs-content">
			
			<div style="margin-top:-15px;margin-bottom:20px;">
				<h1 class="rs-title text-center" style="font-size:180%;">RactStudio's Products Documentations</h1>
			</div>
						
			<!-- main content -->
			<div class="page jplist" id="ractstudio-docs">

				<!--<><><><><><><><><><><><><> MAIN CONTENT START <><><><><><><><><><><><><>-->

				<!-- jplist top panel -->
				<div class="jplist-panel">
					<div class="row panel panel-default">
								
							<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<div class="row rs-config-box">
							
							<!-- filter by title -->
							<div class="text-filter-box rs-search">

								<!--[if lt IE 10]>
								<div class="jplist-label">Filter by Title:</div>
								<![endif]-->

								<input data-path=".title" type="text" value="" class="form-control" placeholder="Search product by name..." data-control-type="textbox" data-control-name="title-filter" data-control-action="filter"/>
							</div>

							</div>
							</div>
							
							<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
							<div class="row rs-config-box">
							
							<!-- reset button -->
							<button
									type="button"
									class="btn btn-rs-primary"
									data-control-type="reset"
									data-control-name="reset"
									data-control-action="reset" style="min-width:100%;">
								Reset &nbsp;<i class="fa fa-share"></i>
							</button>

							</div>
							</div>
						
							<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
							<div class="row rs-config-box">
							
							<!-- back button button -->
							<button
									class="btn btn-rs-primary"
									type="button"
									data-control-type="back-button"
									data-control-name="back-button"
									data-control-action="back-button" style="min-width:100%;">
								<i class="fa fa-arrow-left"></i> Go Back
							</button>

							</div>
							</div>
							
							<!--
							<div class="col-xs-4 col-sm-2 col-md-2  col-lg-2 hidden">
							<div class="row rs-config-box" style="min-width:100px;">
							
							  <!-- views control 
							  <div 
								 class="jplist-views" 
								 data-control-type="views" 
								 data-control-name="views" 
								 data-control-action="views"
								 data-default="jplist-list-view" style="min-width:100%;">
								 
								 <button type="button" class="jplist-view jplist-list-view" data-type="jplist-list-view"></button>
								 <button type="button" class="jplist-view jplist-grid-view" data-type="jplist-grid-view"></button>
								 <button type="button" class="jplist-view jplist-thumbs-view" data-type="jplist-thumbs-view"></button>
							  </div>	 
						   
							</div>
							</div>
							-->

							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="row rs-config-box">

								<!-- filter dropdown -->
								<div
										class="dropdown filter-dd"
										data-control-type="boot-filter-drop-down"
										data-control-name="category-filter"
										data-control-action="filter">

									<button
											class="btn btn-rs-download"
											type="button"
											data-toggle="dropdown"
											id="filter-dropdown-menu"
											aria-expanded="true" style="min-width:100%;">
										<span data-type="selected-text">Filter by category</span>
										<span class="caret"></span>
									</button>

									<ul class="dropdown-menu" role="menu" aria-labelledby="filter-dropdown-menu" style="min-width:100%;">
									
										<li role="presentation">
											<a role="menuitem" tabindex="-0" href="#" data-path="default" data-default="true">Products by Category: All</a>
										</li>

										<li role="presentation" class="divider"></li>
										
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcshostingcart">Hosting Cart (whmcs order forms)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcsajaxcart">Ajax Cart (whmcs order forms)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcsmisccart">Misc. Cart (whmcs order forms)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcsclientaraetemplates">Client Area Templates (whmcs)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcsadminareatemplates">Admin Area Templates (whmcs)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcshtml5sitetemplates">HTML5 Site Templates (whmcs)</a>
										</li>
										
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcsmodules">Modules (whmcs)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".whmcshooks">Hooks (whmcs)</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".wordpressthemes">WordPress Themes</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".wordpressplugins">WordPress Plugins</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".html5websitetemplates">Website Templates (html5)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".html5ecommercetemplates">Ecommerce Templates (html5)</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".html5admintemplates">Admin Templates (html5)</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".otherproducts">Other Products</a>
										</li>
										
									</ul>
								</div>
							
								</div>
							</div>
									
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="row rs-config-box">

								<!-- sort dropdown -->
								<div
										class="dropdown sort-dd"
										data-control-type="boot-sort-drop-down"
										data-control-name="bootstrap-sort-dropdown"
										data-control-action="sort"
										data-datetime-format="{month}/{day}/{year}"
										data-control-deep-link="false">

									<button
											class="btn btn-rs-download"
											type="button"
											id="sort-dropdown-menu"
											data-toggle="dropdown"
											aria-expanded="true" style="min-width:100%;">
										<span data-type="selected-text">Sort by: None</span>
										<span class="caret"></span>
									</button>

									<ul class="dropdown-menu" role="menu" aria-labelledby="sort-dropdown-menu" style="min-width:100%;">
									
										<li role="presentation">
											<a role="menuitem" tabindex="-0" href="#" data-path="default" data-order="asc" data-type="text" data-default="true">Sort by: None</a>
										</li>

										<li role="presentation" class="divider"></li>
										
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".typewhmcs" data-order="asc" data-type="text">WHMCS Products</a>
										</li>
										
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".typewordpress" data-order="asc" data-type="text">WordPress Products</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".typehtml5" data-order="asc" data-type="text">HTML5 Products</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".typehothers" data-order="asc" data-type="text">Other Products</a>
										</li>
										
										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".daterelease" data-order="asc" data-type="datetime">Release Date / asc</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".daterelease" data-order="desc" data-type="datetime">Release Date / desc</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".dateupdate" data-order="asc" data-type="datetime">Last Update / asc</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".dateupdate" data-order="desc" data-type="datetime">Last Update / desc</a>
										</li>
										
										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".title" data-order="asc" data-type="text">Product Title  / A-Z</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".title" data-order="desc" data-type="text">Product Title / Z-A</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".desc" data-order="asc" data-type="text">Product Description / A-Z</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-path=".desc" data-order="desc" data-type="text">Product Description / Z-A</a>
										</li>
										
									</ul>

								</div>
							
								</div>
							</div>
						
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<div class="row rs-config-box">
							
								<!-- items per page dropdown -->
								<div
										class="dropdown"
										data-control-type="boot-items-per-page-dropdown"
										data-control-name="paging"
										data-control-action="paging">

									<button
											class="btn btn-rs-download"
											type="button"
											data-toggle="dropdown"
											id="dropdown-menu-1"
											aria-expanded="true" style="min-width:100%;">
										<span data-type="selected-text">Products Per Page</span>
										<span class="caret"></span>
									</button>

									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-menu-1" style="min-width:100%;">

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-number="8">8 per page</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-number="16" data-default="true">16 per page</a>
										</li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-number="32">32 per page</a>
										</li>

										<li role="presentation" class="divider"></li>

										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#" data-number="all">View All Products</a>
										</li>
									</ul>
								</div>
								
							</div>
							</div>

							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="row rs-config-box">
							
								<!-- pagination info label -->
								<div
										class="jplist-pagination-info text-center"
										data-type="<strong>Page {current} of {pages}</strong>"
										data-control-type="pagination-info"
										data-control-name="paging"
										data-control-action="paging" style="min-width:100%;">
								</div>

							</div>
							</div>
						
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="row rs-config-box">

								<!-- bootstrap pagination control -->
								<ul
										class="pagination jplist-pagination"
										data-control-type="boot-pagination"
										data-control-name="paging"
										data-control-action="paging"
										data-range="3"
										data-mode="google-like" style="min-width:300px;display:block;margin-left:auto;margin-right:auto;padding-left:20%;">
								</ul>
								
								</div>
							</div>
						
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="row rs-config-box" style="margin-bottom:35px;">
							
								<!-- pagination info label -->
								<div
										class="jplist-pagination-info text-center"
										data-type="<small>{start} - {end} of {all} items</small>"
										data-control-type="pagination-info"
										data-control-name="paging"
										data-control-action="paging" style="min-width:100%;">
								</div>

							</div>
							</div>
						
					</div>

				</div>

				<div class="list row">
					
					<!-- jplist Products List
					<div rs-include-html="products-list.php"></div> -->
					
				<!-- 01 / WHMCS - Hosting Cart (Order Forms) -->
					<!-- item 1 -->
					<div class="list-item">
						<div class="row panel panel-default">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<a href="/advancedhostingcart" title="Advanced Hosting Cart">
									<img class="img-responsive img-rounded" src="/advancedhostingcart/img/HostingCartIcon_Advanced-200x200.png" alt="Advanced Hosting Cart" title="Advanced Hosting Cart"/>
								</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<h3 class="title"><a href="/advancedhostingcart" title="Advanced Hosting Cart">Advanced Hosting Cart</a></h3>
								<p class="desc hidden-xs">Advanced Hosting Cart – WHMCS Order Form Template is a high quality, native, responsive, smart and complete WHMCS order form template, created by experienced WHMCS developers. It loads all order form pages very fast and securely than other similar order form template available on the market today. This order form template is based on WHMCS - "Standard Cart". Plus – we love mobile-first designs – that’s why we used Bootstrap 3, Font Awesome icon, CSS3 and HTML5 techniques with smooth color combination to make sure that your order form would look great on all mobile devices, tablets, full-screen previews and pages with many WHMCS based products and groups.</p>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3 products-meta">
								<p class="typewhmcs" style="font-size:110%;font-weight:600;">WHMCS</p>
								<span class="theme">
									<p class="daterelease">Release: <strong>10/20/2017</strong></p>
									<p class="dateupdate">Update: <strong>09/13/2019</strong></p>
									<p class="whmcshostingcart"><small>Hosting Cart / OrderForm</small></p>
								</span>
								<p class="theme_link">
									<a class="productdemo" href="https://advancedhostingcart.ractstudio.com/" target="_blank" data-toggle="tooltip" data-html="true" data-placement="top" title="live preview link<br/>(new tab)">Live Demo</a><br/>
									<a class="productpurchase" href="https://bit.ly/AdvancedHostingCart" target="_blank" data-toggle="tooltip" data-html="true" data-placement="top" title="purchase link<br/>(new tab)">Buy Now</a>
								</p>
							</div>
						</div>
					</div>

					<!-- item 2 -->
					<div class="list-item">
						<div class="row panel panel-default">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<a href="/fliphostingcart" title="Flip Hosting Cart">
									<img class="img-responsive img-rounded" src="/fliphostingcart/img/HostingCartIcon_Flip-200x200.png" alt="Flip Hosting Cart" title="Flip Hosting Cart"/>
								</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<h3 class="title"><a href="/fliphostingcart" title="Flip Hosting Cart">Flip Hosting Cart</a></h3>
								<p class="desc hidden-xs">Flip Hosting Cart – WHMCS Order Form Template is a high quality, native, responsive, smart and complete WHMCS order form template, created by experienced WHMCS developers. It loads all order form pages very fast and securely than other similar order form template available on the market today. This order form template is based on WHMCS - "Standard Cart". Plus – we love mobile-first designs – that’s why we used Bootstrap 3, Font Awesome icon, CSS3 and HTML5 techniques with smooth color combination to make sure that your order form would look great on all mobile devices, tablets, full-screen previews and pages with many WHMCS based products and groups.</p>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3 products-meta">
								<p class="typewhmcs" style="font-size:110%;font-weight:600;">WHMCS</p>
								<span class="theme">
									<p class="daterelease">Release: <strong>10/04/2018</strong></p>
									<p class="dateupdate">Update: <strong>09/13/2019</strong></p>
									<p class="whmcshostingcart"><small>Hosting Cart / OrderForm</small></p>
								</span>
								<p class="theme_link">
									<a class="productdemo" href="https://fliphostingcart.ractstudio.com/" target="_blank" data-toggle="tooltip" data-html="true" data-placement="top" title="live preview link<br/>(new tab)">Live Demo</a><br/>
									<a class="productpurchase" href="https://bit.ly/FlipHostingCart" target="_blank" data-toggle="tooltip" data-html="true" data-placement="top" title="purchase link<br/>(new tab)">Buy Now</a>
								</p>
							</div>
						</div>
					</div>

					<!-- 02 / WHMCS - Ajax Cart (Order Forms) -->
					<!-- item 1
					<div class="list-item">
						<div class="row panel panel-default">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<a href="/advancedajaxcart" title="Advanced Ajax Cart">
									<img class="img-responsive img-rounded" src="plugins/jpList/img/thumbs/arch-2.jpg" alt="Advanced Ajax Cart" title="Advanced Ajax Cart"/>
								</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<h3 class="title"><a href="/advancedajaxcart" title="Advanced Ajax Cart">Advanced Ajax Cart</a></h3>
								<p class="desc hidden-xs">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements. Historical civilizations are often identified with their surviving architectural achievements.</p>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3 products-meta">
								<p class="typewhmcs" style="font-size:110%;font-weight:600;">WHMCS</p>
								<span class="theme">
									<p class="daterelease">Release: <strong>10/20/2017</strong></p>
									<p class="dateupdate">Update: <strong>11/13/2018</strong></p>
									<p class="whmcsajaxcart"><small>Ajax Cart / OrderForm</small></p>
								</span>
								<p class="theme_link">
									<a class="productdemo" href="https://advancedajaxcart.ractstudio.com/" target="_blank" data-toggle="tooltip" data-html="true" data-placement="top" title="live preview link<br/>(new tab)">Live Demo</a><br/>
									<a class="productpurchase" href="https://go.ractstudio.com/advancedajaxcart" target="_blank" data-toggle="tooltip" data-html="true" data-placement="top" title="purchase link<br/>(new tab)">Buy Now</a>
								</p>
							</div>
						</div>
					</div> -->


					<!-- 03 / WHMCS - Misc. Cart (Order Forms) -->
					<!-- item 1
					<div class="list-item">
						<div class="row panel panel-default">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<a href="/superajaxcart" title="Super Ajax Cart">
									<img class="img-responsive img-rounded" src="plugins/jpList/img/thumbs/arch-2.jpg" alt="Super Ajax Cart" title="Super Ajax Cart"/>
								</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<h3 class="title"><a href="/superajaxcart" title="Super Ajax Cart">Super Ajax Cart</a></h3>
								<p class="desc hidden-xs">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements. Historical civilizations are often identified with their surviving architectural achievements.</p>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3 products-meta">
								<p class="typewhmcs" style="font-size:110%;font-weight:600;">WHMCS</p>
								<span class="theme">
									<p class="daterelease">Release: <strong>10/20/2017</strong></p>
									<p class="dateupdate">Update: <strong>11/13/2018</strong></p>
									<p class="whmcsmisccart"><small>Misc. Cart / OrderForm</small></p>
								</span>
								<p class="theme_link">
									<a class="productdemo" href="https://superajaxcart.ractstudio.com/" target="_blank" data-toggle="tooltip" data-html="true" data-placement="top" title="live preview link<br/>(new tab)">Live Demo</a><br/>
									<a class="productpurchase" href="https://go.ractstudio.com/superajaxcart" target="_blank" data-toggle="tooltip" data-html="true" data-placement="top" title="purchase link<br/>(new tab)">Buy Now</a>
								</p>
							</div>
						</div>
					</div> -->

					<!-- item 2
					<div class="list-item">
						<div class="row panel panel-default">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<a href="/ajaxhostingcart" title="Ajax Hosting Cart">
									<img class="img-responsive img-rounded" src="plugins/jpList/img/thumbs/arch-2.jpg" alt="Ajax Hosting Cart" title="Ajax Hosting Cart"/>
								</a>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<h3 class="title"><a href="/ajaxhostingcart" title="Ajax Hosting Cart">Ajax Hosting Cart</a></h3>
								<p class="desc hidden-xs">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements. Historical civilizations are often identified with their surviving architectural achievements.</p>
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3 products-meta">
								<p class="typewhmcs" style="font-size:110%;font-weight:600;">WHMCS</p>
								<span class="theme">
									<p class="daterelease">Release: <strong>10/20/2017</strong></p>
									<p class="dateupdate">Update: <strong>11/13/2018</strong></p>
									<p class="whmcsmisccart"><small>Misc. Cart / OrderForm</small></p>
								</span>
								<p class="theme_link">
									<a class="productdemo" href="https://ajaxhostingcart.ractstudio.com/" target="_blank" data-toggle="tooltip" data-html="true" data-placement="top" title="live preview link<br/>(new tab)">Live Demo</a><br/>
									<a class="productpurchase" href="https://go.ractstudio.com/ajaxhostingcart" target="_blank" data-toggle="tooltip" data-html="true" data-placement="top" title="purchase link<br/>(new tab)">Buy Now</a>
								</p>
							</div>
						</div>
					</div> -->
					
					<!-- 04 / WHMCS - Client Area Templates
					
					<!-- 05 / WHMCS - Admin Area Templates
					
					<!-- 06 / WHMCS - HTML5 Site Templates
					
					<!-- 07 / WHMCS - Modules
					
					<!-- 08 / WHMCS - Hooks
					
					<!-- 09 / WORDPRESS - WordPress Themes
					
					<!-- 10 / WORDPRESS - WordPress Plugins
					
					<!-- 11 / HTML5 - Website Templates
					
					<!-- 12 / HTML5 - Ecommerce Templates
					
					<!-- 13 / HTML5 - Admin Templates
					
					<!-- 14 / MIX - Other Products                                 ------->
					
					
				</div>
				
			   <!-- no results found -->
			   <div class="jplist-no-results text-center" style="margin:20px;color:rgba(255, 87, 34,0.8);font-size:2.0em;font-weight:400;">
				  <p>No results found</p>
			   </div>

				<!-- jplist top panel -->
				<div class="jplist-panel">
					<div class="row" style="padding:10px;">
						
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="row rs-config-box">
							
								<!-- pagination info label -->
								<div
										class="jplist-pagination-info text-center"
										data-type="<strong>Page {current} of {pages}</strong>"
										data-control-type="pagination-info"
										data-control-name="paging"
										data-control-action="paging" style="min-width:100%;">
								</div>

							</div>
							</div>
						
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="row rs-config-box">

								<!-- bootstrap pagination control -->
								<ul
										class="pagination jplist-pagination"
										data-control-type="boot-pagination"
										data-control-name="paging"
										data-control-action="paging"
										data-range="3"
										data-mode="google-like" style="min-width:300px;display:block;margin-left:auto;margin-right:auto;padding-left:20%;">
								</ul>
								
								</div>
							</div>
						
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="row rs-config-box" style="margin-bottom:35px;">
							
								<!-- pagination info label -->
								<div
										class="jplist-pagination-info text-center"
										data-type="<small>{start} - {end} of {all} items</small>"
										data-control-type="pagination-info"
										data-control-name="paging"
										data-control-action="paging" style="min-width:100%;">
								</div>

							</div>
							</div>
						
					</div>

				</div>
				
				<!--<><><><><><><><><><><><><> MAIN CONTENT END <><><><><><><><><><><><><>-->

			</div>

			</div>
		</div>
			
		<!-- Column Right --->
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
				
				<!-- Right Sidebar -->
				<div rs-include-html="menu-right.php"></div>
				
		</div>

	</div>
