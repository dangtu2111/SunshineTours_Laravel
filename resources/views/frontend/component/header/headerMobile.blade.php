<header class="mkdf-mobile-header">
	<div class="mkdf-mobile-header-inner">
		<div class="mkdf-mobile-header-holder">
			<div class="mkdf-grid">
				<div class="mkdf-vertical-align-containers">
					<div class="mkdf-position-left">
						<div class="mkdf-position-left-inner">
							<div class="mkdf-mobile-logo-wrapper">
								<a
									itemprop="url"
									href="index.html"
									style="height: 38px">
									<img
										loading="lazy"
										itemprop="image"
										src="{{asset('frontend\img\logo\logo06.png')}}"
										width="144"
										height="77"
										alt="Mobile Logo" />
								</a>
							</div>
						</div>
					</div>
					<div class="mkdf-position-right">
						<!--
         -->
						<div class="mkdf-position-right-inner">
							<div
								class="mkdf-mobile-menu-opener mkdf-mobile-menu-opener-predefined">
								<a href="javascript:void(0)">
									<h5 class="mkdf-mobile-menu-text">Menu</h5>
									<span class="mkdf-mobile-menu-icon">
										<span class="mkdf-hm-lines"><span
												class="mkdf-hm-line mkdf-line-1"></span><span
												class="mkdf-hm-line mkdf-line-2"></span><span
												class="mkdf-hm-line mkdf-line-3"></span></span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<nav class="mkdf-mobile-nav" role="navigation" aria-label="Mobile Menu">
			<div class="mkdf-grid">
				<ul id="menu-standard" class="">
					<li
						id="mobile-menu-item-626"
						class="menu-item menu-item-type-custom menu-item-object-custom  {{ request()->routeIs('index') ? 'mkdf-active-item current-menu-ancestor' : '' }} current-menu-parent menu-item-has-children  has_sub">
						<a href="{{route('index')}}" class="current mkdf-mobile-no-link"><span>SaigonTours</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
						
					</li>
					<li
						id="mobile-menu-item-627"
						class="{{ request()->routeIs('booking') ? 'mkdf-active-item current-menu-ancestor' : '' }}  menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has_sub">
						<a href="{{route('booking')}}" class="mkdf-mobile-no-link"><span>Book Now</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
						
					</li>
					<!-- <li
						id="mobile-menu-item-628"
						class="{{ request()->routeIs('FAQ') ? 'mkdf-active-item current-menu-ancestor' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has_sub">
						<a href="{{route('FAQ')}}" class="mkdf-mobile-no-link"><span>FAQ</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
						
					</li> -->
					<li
						id="mobile-menu-item-629"
						class="{{ request()->routeIs('gallery') ? 'mkdf-active-item current-menu-ancestor' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has_sub">
						<a href="{{route('gallery')}}" class="mkdf-mobile-no-link"><span>Gallery</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
						
					</li>
					<li
						id="mobile-menu-item-630"
						class="{{ request()->routeIs('about') ? 'mkdf-active-item current-menu-ancestor' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has_sub">
						<a href="{{route('about')}}" class="mkdf-mobile-no-link"><span>About Us</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
						
					</li>
					<!-- <li
						id="mobile-menu-item-1817"
						class="{{ request()->routeIs('blog') ? 'mkdf-active-item current-menu-ancestor' : '' }} menu-item menu-item-type-post_type menu-item-object-page">
						<a href="{{route('blog')}}" class=""><span>	Blog</span></a>
					</li> -->
				</ul>
			</div>
		</nav>
	</div>
</header>