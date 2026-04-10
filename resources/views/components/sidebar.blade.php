<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-6 justify-content-center" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="{{ route('admin.dashboard') }}">
								<img alt="Logo" src="{{asset('assets/media/logos/Logo-Primer-White-Font.svg')}}" class="h-40px app-sidebar-logo-default pe-5" />
								<img alt="Logo" src="{{asset('assets/media/logos/Logogram.svg')}}" class="h-30px app-sidebar-logo-minimize" />
							</a>
							<!--end::Logo image-->
							<!--begin::Sidebar toggle-->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<img src="{{ asset('icons/menu.svg') }}" alt="">
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
								<!--begin::Scroll wrapper-->
								<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
									
								<!--begin::Menu-->
									<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link {{ $page === "dash" ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
												<span class="menu-icon">
													<i class="bi bi-speedometer2 fs-2"></i>
												</span>
												<span class="menu-title">Dashboards</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item-->
										<div class="menu-item pt-5">
											<!--begin:Menu content-->
											<div class="menu-content">
												<span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
											</div>
											<!--end:Menu content-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion here show">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="bi bi-card-checklist fs-2"></i>
												</span>
												<span class="menu-title">Kelola Menu</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link {{ $page === "menu" ? 'active' : '' }}" href="{{ route('admin.menus') }}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Menu</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link {{ $page === "theme" ? 'active' : '' }}" href="{{ route('admin.themes') }}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tema</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link {{ $page === "category" ? 'active' : '' }}" href="{{ route('admin.categories') }}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Kategori</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link {{ $page === "schedule" ? 'active' : '' }}" href="{{ route('admin.schedules') }}">
												<span class="menu-icon">
													<i class="bi bi-calendar-week fs-2"></i>
												</span>
												<span class="menu-title">Kelola Jadwal</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link {{ $page === "order" ? 'active' : '' }}" href="{{ route('admin.orders') }}">
												<span class="menu-icon">
													<i class="bi bi-cart4 fs-2"></i>
												</span>
												<span class="menu-title">Kelola Pesanan</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
								<!--end::Menu-->
									
									
									
									
								</div>
								<!--end::Scroll wrapper-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->
						<!--begin::Footer-->
						<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
							<!--begin::User menu-->
							<div class="aside-user d-flex py-5">

								@php
									$user = auth()->user();
								@endphp

								<div class="user-info d-flex flex-column ps-lg-5 mw-125px">
									<span 
										class="user-name text-elipsis text-white fw-bold fs-6"
										data-bs-toggle="tooltip" 
										data-bs-custom-class="tooltip-inverse" 
										data-bs-placement="top" 
										title="{{ $user->first_name }}{{ $user->last_name }}">
										{{ $user->first_name }}
										{{ $user->last_name }}
									</span>
									<span 
										class="user-email text-elipsis pb-1 text-white fw-medium fs-8 text-gray-600"  
										data-bs-toggle="tooltip" 
										data-bs-custom-class="tooltip-inverse" 
										data-bs-placement="top" 
										title="{{ $user->email }}">
										{{ $user->email }}
									</span>

									<div class="d-flex align-items-center">
										<span class="bullet bullet-dot bg-success h-4px w-4px me-1"></span>
										<span class="text-success fs-9">Online</span>
									</div>
								</div>

								<button 
									class="btn btn-sm btn-icon btn-flush ms-auto w-35px h-35px" 
									data-kt-menu-trigger="click" 
									data-kt-menu-attach="parent"
									data-kt-menu-placement="right-end">
									<i class="bi bi-sliders fs-4"></i>
								</button>
								<!--begin::User account menu-->
								<div class="menu menu-primary menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Username-->
											<div class="d-flex flex-column mw-150px">
												<div class="fw-bold d-flex align-items-center fs-5 text-elipsis">{{ $user->first_name }}{{ $user->last_name }}</div>
												<span class="fw-semibold text-muted fs-7 text-elipsis">{{ $user->email }}</span>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="{{ route('admin.accounts') }}" class="menu-link px-5">My Profile</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<form method="post" action="{{ route('user.signout') }}" class="menu-item px-5">
										@csrf
										<button class="menu-link px-5">Sign Out</button>
									</form>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::User account menu-->

								
							</div>
							<!--end::User menu-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Sidebar-->