<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.9
Purchase: https://1.envato.market/Vm7VRE
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	@include('components.header')
	<head>
		<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<!--end::Head-->



	<!--begin::Body-->
	<body 
		id="kt_app_body" 
		data-kt-app-layout="dark-sidebar" 
		data-kt-app-header-fixed="true" 
		data-kt-app-sidebar-enabled="true" 
		data-kt-app-sidebar-fixed="true" 
		data-kt-app-sidebar-hoverable="true" 
		data-kt-app-sidebar-push-header="true" 
		data-kt-app-sidebar-push-toolbar="true" 
		data-kt-app-sidebar-push-footer="true" 

		data-kt-app-toolbar-enabled="true" 
		data-kt-app-toolbar-fixed="true"
		data-kt-app-toolbar-fixed-mobile="true"

		class="app-default">
		
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div 
					id="kt_app_header" 
					class="app-header" 
					data-kt-sticky="true" 
					data-kt-sticky-activate="{default: true, lg: true}" 
					data-kt-sticky-name="app-header-minimize" 
					data-kt-sticky-offset="{default: '200px', lg: '0'}" 
					data-kt-sticky-animation="false">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::Sidebar mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<img src="{{ asset('icons/menu.svg') }}" alt="">
							</div>
						</div>
						<!--end::Sidebar mobile toggle-->

						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="{{ route('admin.dashboard') }}" class="d-lg-none">
								<img alt="Logo" src="{{asset('assets/media/logos/Logo-Primer.svg')}}" class="h-35px" />
							</a>
						</div>
						<!--end::Mobile logo-->

						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">


							<!--begin::Title-->
							<div 
								data-kt-swapper="true" 
								data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
								data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}"
								class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
								<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
									Kategori
								</h1>
							</div>
							<!--end::Title-->

							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
								<!--begin::Notifications-->
								<div class="app-navbar-item ms-1 ms-md-4">
									<!--begin::Menu Icon-->
									<div 
										class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative" 
										data-kt-menu-trigger="click" 
										data-kt-menu-attach="parent" 
										data-kt-menu-placement="bottom-end" 
										id="kt_menu_item_wow">
										<i class="bi bi-bell-fill fs-4"></i>
										<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
									</div>
									<!--end::Menu Icon-->

									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column w-325px w-lg-375px " data-kt-menu="true" id="kt_menu_notifications">
										<!--begin::Heading-->
										<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
											<!--begin::Title-->
											<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications 
											<span class="fs-8 opacity-75 ps-3">(99+)</span></h3>
											<!--end::Title-->
											<!--begin::Tabs-->
											<div class="hover-scroll-x">
												<div class="d-grid">
													<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9  flex-nowrap text-nowrap">
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab"
																href="#kt_topbar_notifications_1">Approval (99+)</a>
														</li>
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
																href="#kt_topbar_notifications_2">PICA (0)</a>
														</li>
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
																href="#kt_topbar_notifications_3">PICA Verification (5)</a>
														</li>
													</ul>
												</div>
											</div>
											<!--end::Tabs-->
										</div>
										<!--end::Heading-->

										<!--begin::Tab content-->
										<div class="tab-content">









											<!--begin::Tab panel-->
											<div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y h-325px my-5 px-4">
													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-search fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Kelola Menu</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for approval</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-shield-plus fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Pengelolaan Kecelakaan Kerja Pengelolaan Kecelakaan Kerja</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Ask for revision</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-exclamation-triangle fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Risk Containment Audit</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Ask for revision</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-journal-medical fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Golden Rules HSE</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Ask for revision</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-journal-medical fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Golden Rules HSE</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for approval</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

												</div>
												<!--end::Items-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
													<i class="ki-duotone ki-arrow-right fs-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->

											<!--begin::Tab panel-->
											<div class="tab-pane fade" id="kt_topbar_notifications_2" role="tabpanel">
												<!--begin::Empty State-->
												<div class="d-flex flex-column px-9 my-5 h-325px">
													<!--begin::Section-->
													<div class="pt-10 pb-0">
														<!--begin::Title-->
														<h3 class="text-gray-900 text-center fw-bold">Belum ada pemberitahuan saat ini!</h3>
														<!--end::Title-->
														<!--begin::Text-->
														<div class="text-center text-gray-600 fw-semibold pt-1">Anda sudah mendapatkan informasi terbaru!</div>
														<!--end::Text-->
													</div>
													<!--end::Section-->
													<!--begin::Illustration-->
													<div class="text-center px-4">
														<img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/5.png" />
													</div>
													<!--end::Illustration-->
												</div>
												<!--end::Empty State-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
													<i class="ki-duotone ki-arrow-right fs-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->

											<!--begin::Tab panel-->
											<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y h-325px my-5 px-4">
													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-search fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Inspeksi K3L</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for verification</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-shield-plus fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Pengelolaan Kecelakaan Kerja Pengelolaan Kecelakaan Kerja</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for verification</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-exclamation-triangle fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Risk Containment Audit</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for verification</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-journal-medical fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Golden Rules HSE</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for verification</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-journal-medical fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Golden Rules HSE</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for verification</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->
												</div>
												<!--end::Items-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
													<i class="ki-duotone ki-arrow-right fs-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->











										</div>
										<!--end::Tab content-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Notifications-->

								<!--begin::Theme mode-->
								<div class="app-navbar-item ms-1 ms-md-4">
									<!--begin::Menu toggle-->
									<div
										class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" 
										data-kt-menu-trigger="click" 
										data-kt-menu-attach="parent" 
										data-kt-menu-placement="bottom-end">
										<i class="bi bi-sun-fill theme-light-show fs-3"></i>
										<i class="bi bi-moon-fill theme-dark-show fs-4"></i>
								</div>
									<!--begin::Menu toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="bi bi-sun-fill fs-3"></i>
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="bi bi-moon-fill fs-4"></i>
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="bi bi-pc-display fs-4"></i>
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Theme mode-->

							</div>
							<!--end::Navbar-->


						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
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
											<a class="menu-link" href="{{ route('admin.dashboard') }}">
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
													<a class="menu-link" href="{{ route('admin.menus') }}">
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
													<a class="menu-link" href="{{ route('admin.themes') }}">
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
													<a class="menu-link" href="{{ route('admin.categories') }}">
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
											<a class="menu-link active" href="{{ route('admin.schedules') }}">
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
											<a class="menu-link" href="{{ route('admin.orders') }}">
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
								<div class="symbol symbol-50px d-none d-lg-inline-block">
									<img src="{{asset('assets/media/avatars/300-3.jpg')}}" class="rounded-3" alt="user" />
								</div>

								<div class="user-info d-flex flex-column ps-lg-5 mw-125px">
									<span 
										class="user-name text-elipsis text-white fw-bold fs-6"
										data-bs-toggle="tooltip" 
										data-bs-custom-class="tooltip-inverse" 
										data-bs-placement="top" 
										title="Robert Fox">
										Robert Fox
									</span>
									<span 
										class="user-email text-elipsis pb-1 text-white fw-medium fs-8 text-gray-600"  
										data-bs-toggle="tooltip" 
										data-bs-custom-class="tooltip-inverse" 
										data-bs-placement="top" 
										title="robert@email.co">
										robert@email.co
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
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="{{asset('assets/media/avatars/300-3.jpg')}}" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column mw-150px">
												<div class="fw-bold d-flex align-items-center fs-5 text-elipsis">Robert Fox</div>
												<span class="fw-semibold text-muted fs-7 text-elipsis">robert@kt.com</span>
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

					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid px-6">

                        
                            @if(isset($response['status']) && $response['status'] === 'success')

                            @php
                                $data = $response['data'];
                                $menus = $data['menus'] ?? [];
                                $schedules = $data['schedules'] ?? [];
                                
                                // Mapping jadwal agar mudah diakses berdasarkan tanggal (DD-MM-YYYY)
                                $mappedSchedules = [];
                                foreach($schedules as $key => $schedule) {
                                    $mappedSchedules[$schedule['date']] = $schedule['menus'];
                                }

                                // Generate 5 Hari (Senin - Jumat) dari startOfWeek
                                $days = [];
                                if(isset($data['start_of_week'])) {
                                    $start_of_week = \Carbon\Carbon::parse($data['start_of_week']);
                                    for ($i = 0; $i < 5; $i++) {
                                        $date = $start_of_week->copy()->addDays($i);
                                        $days[] = [
                                            // Menggunakan format bahasa indonesia jika app locale sudah di set, atau fallback ke format standar
                                            'day_name' => $date->translatedFormat('l'), 
                                            'date_formatted' => $date->translatedFormat('d F Y'),
                                            'date_key' => $date->format('d-m-Y'),
                                        ];
                                    }
                                    }
                            @endphp

                            <style>
                                /* Custom Styling untuk Slot Menu */
                                .slot-empty {
                                    border: 2px dashed #dee2e6;
                                    border-radius: 8px;
                                    background-color: #f8f9fa;
                                    transition: all 0.2s;
                                    cursor: pointer;
                                    min-height: 120px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                }
                                .slot-empty:hover {
                                    background-color: #e9ecef;
                                    border-color: #adb5bd;
                                }
                                
                                .slot-filled {
                                    position: relative;
                                    border-radius: 8px;
                                    overflow: hidden;
                                    border: 1px solid #dee2e6;
                                    min-height: 120px;
                                }
                                .slot-filled img {
                                    width: 100%;
                                    height: 120px;
                                    object-fit: cover;
                                }
                                .slot-overlay {
                                    position: absolute;
                                    top: 0; left: 0; right: 0; bottom: 0;
                                    background: rgba(0,0,0,0.7);
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    justify-content: center;
                                    opacity: 0;
                                    transition: opacity 0.3s ease;
                                    gap: 10px;
                                }
                                .slot-filled:hover .slot-overlay {
                                    opacity: 1;
                                }
                                .menu-title-badge {
                                    position: absolute;
                                    bottom: 0;
                                    left: 0;
                                    right: 0;
                                    background: rgba(0,0,0,0.6);
                                    color: white;
                                    padding: 4px 8px;
                                    font-size: 0.8rem;
                                    text-align: center;
                                    white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                }
                            </style>

                            <div class="container-fluid py-4">

                                <form action="{{ route('admin.add-or-update-schedules') }}" method="POST">
                                    @csrf
                                    
                                    <div class="d-flex flex-wrap w-100 justify-content-between align-items-center mb-4">
                                        <div>
                                            <h3 class="fw-bold"><i class="bi bi-calendar-week text-primary"></i> Jadwal Menu Catering</h3>
                                            <p class="text-muted mb-0">Kelola menu mingguan (Senin - Jum'at)</p>
                                            <input type="hidden" name="start_of_week" value={{ $data['start_of_week'] }}>
                                            <input type="hidden" name="end_of_week" value={{ $data['end_of_week'] }}>
                                        </div>
                                        
                                        <div class="d-flex align-items-center flex-column w-100 w-sm-auto flex-sm-row gap-3 mt-3 mt-md-0">
                                            <div class="btn-group w-100 shadow-sm">
                                                <a href="?week={{ request('week', $data['current_week']) - 1 }}" class="btn btn-outline-secondary"><i class="bi bi-chevron-left"></i></a>
                                                <span class="btn w-100 text-nowrap btn-light border-secondary text-dark fw-bold" style="pointer-events: none;">
                                                    Minggu ke-{{ request('week', $data['current_week']) }}
                                                </span>
                                                <a href="?week={{ request('week', $data['current_week']) + 1 }}" class="btn btn-outline-secondary"><i class="bi bi-chevron-right"></i></a>
                                            </div>
                                            
                                            <button type="submit" class="btn-primary-homade rounded-2 d-flex align-items-center justify-content-center bg-accent shadow-sm px-4 w-100 text-nowrap">
                                                <i class="bi bi-save me-1 text-white"></i> Simpan Perubahan
                                            </button>
                                        </div>
                                    </div>

                                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 g-3">
                                        @foreach($days as $day)
                                            @php
                                                // Ambil menu untuk hari ini, maksimal 2 slot
                                                $dayMenus = $mappedSchedules[$day['date_key']] ?? [];
                                                $slots = [
                                                    $dayMenus[0] ?? null,
                                                    $dayMenus[1] ?? null
                                                ];
                                            @endphp
                                            
                                            <div class="col">
                                                <div class=" h-100 border-grey-1 rounded-3">
                                                    <div class="card-header px-3 pb-2 pt-3">
                                                        <h6 class="fw-bold mb-1">{{ $day['day_name'] }}</h6>
                                                        <small class="text-muted">{{ $day['date_formatted'] }}</small>
                                                    </div>
                                                    <div class="card-body p-2 d-flex flex-column gap-2" id="container-{{ $day['date_key'] }}">
                                                        
                                                        @foreach($slots as $index => $menu)
                                                            <div id="slot-{{ $day['date_key'] }}-{{ $index }}">
                                                                @if($menu)
                                                                    <div class="slot-filled border-grey-1">
                                                                        <input type="hidden" name="schedules[{{ $day['date_key']}}][]" value="{{ $menu['id'] }}">
                                                                        
                                                                        <img src="{{ $menu['image_url'] }}" loading="lazy" alt="Menu" onerror="this.src='https://placehold.co/300x200?text=No+Image'">
                                                                        <div class="menu-title-badge">{{ $menu['name'] }}</div>
                                                                        
                                                                        <div class="slot-overlay">
                                                                            <button type="button" class="btn btn-sm btn-light w-75 rounded-3" onclick="openMenuModal('{{ $day['date_key'] }}', {{ $index }})">
                                                                                <i class="bi bi-arrow-repeat"></i> Ganti
                                                                            </button>
                                                                            <button type="button" class="btn-primary-homade w-75 rounded-3 text-white" onclick="removeMenu('{{ $day['date_key'] }}', {{ $index }})">
                                                                                <i class="bi bi-trash text-white"></i> Hapus
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="slot-empty border-grey-1" onclick="openMenuModal('{{ $day['date_key'] }}', {{ $index }})">
                                                                        <span class="text-muted small fw-bold"><i class="bi bi-plus-circle"></i> Tambah Menu</span>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </form>
                                <form action="{{ route('admin.export-schedules') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn-primary-homade rounded-2 shadow-sm px-4">
                                                <i class="bi bi-save me-1 text-white"></i> Export Data
                                            </button>
                                </form>
                            </div>

                            <div class="modal fade" id="menuSelectionModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content border-0 shadow">
                                        <div class="modal-header bg-accent text-white border-0">
                                            <h5 class="modal-title text-white"></i>Pilih Menu</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-light">
                                            <div class="input-group mb-4 shadow-sm">
                                                <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                                                <input type="text" id="searchMenuInput" class="form-control border-start-0" placeholder="Cari nama menu...">
                                            </div>

                                            <div class="row row-cols-1 row-cols-md-3 g-3" id="menuListContainer">
                                                </div>
                                            
                                            <div id="emptyMenuState" class="text-center py-5 d-none">
                                                <i class="bi bi-inbox text-muted fs-1"></i>
                                                <p class="mt-2 text-muted">Menu tidak ditemukan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if(session()->has('response'))
                                @php
                                    $sessResponse = session('response');
                                    $statusCode = $sessResponse['status_code'] ?? 200;
                                    $statusMsg = $sessResponse['message'] ?? 'Pemberitahuan Sistem';
                                    $statusType = $sessResponse['status'] ?? 'success'; 
                                    
                                    // Logika warna dan icon berdasarkan status code
                                    $themeClass = 'text-success';
                                    $iconClass = 'bi-check-circle-fill';
                                    
                                    if($statusCode == 500) {
                                        $themeClass = 'text-danger';
                                        $iconClass = 'bi-x-circle-fill';
                                    } elseif($statusCode != 200 && $statusCode != 201) {
                                        $themeClass = 'text-warning';
                                        $iconClass = 'bi-exclamation-triangle-fill';
                                    }
                                @endphp

                                <div class="modal fade" id="sessionAlertModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-dialog-centered">
                                        <div class="modal-content border-0 shadow-lg text-center p-3">
                                            <div class="modal-body py-4">
                                                <i class="bi {{ $iconClass }} {{ $themeClass }}" style="font-size: 3rem;"></i>
                                                <h5 class="fw-bold mt-3 mb-1">Peringatan</h5>
                                                <p class="text-muted small mb-4">{{ $statusMsg }}</p>
                                                <button type="button" class="btn btn-outline-dark btn-sm rounded-pill px-4" data-bs-dismiss="modal">Tutup Pemberitahuan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif


                            <script>
                                // 1. Simpan data menu dari backend ke dalam variable JS
                                const rawMenus = @json($menus);
                                
                                // State untuk mencatat slot mana yang sedang di-edit
                                let activeTargetDate = null;
                                let activeTargetSlotIndex = null;
                                
                                // Inisialisasi Modal Bootstrap
                                let menuModalInstance;

                                document.addEventListener("DOMContentLoaded", function() {
                                    menuModalInstance = new bootstrap.Modal(document.getElementById('menuSelectionModal'));

                                    // Cek dan tampilkan Pop-out Global Session jika ada
                                    const sessionModalEl = document.getElementById('sessionAlertModal');
                                    if(sessionModalEl) {
                                        const sessionModal = new bootstrap.Modal(sessionModalEl);
                                        sessionModal.show();
                                    }

                                    // Listener Search Engine (Client-side)
                                    document.getElementById('searchMenuInput').addEventListener('input', function(e) {
                                        renderMenuList(e.target.value);
                                    });
                                });

                                // Fungsi membuka modal untuk suatu slot
                                function openMenuModal(dateKey, slotIndex) {
                                    activeTargetDate = dateKey;
                                    activeTargetSlotIndex = slotIndex;
                                    
                                    document.getElementById('searchMenuInput').value = ''; // Reset search
                                    renderMenuList(); // Render semua menu
                                    menuModalInstance.show();
                                }

                                // Fungsi merender list menu di dalam modal (dengan fitur filter)
                                function renderMenuList(keyword = '') {
                                    const container = document.getElementById('menuListContainer');
                                    const emptyState = document.getElementById('emptyMenuState');
                                    container.innerHTML = '';
                                    
                                    const filteredMenus = rawMenus.filter(m => m.name.toLowerCase().includes(keyword.toLowerCase()));
                                    
                                    if(filteredMenus.length === 0) {
                                        emptyState.classList.remove('d-none');
                                    } else {
                                        emptyState.classList.add('d-none');
                                        
                                        filteredMenus.forEach(menu => {
                                            // Gunakan loading="lazy" untuk performa gambar!
                                            const card = `
                                                <div class="col">
                                                    <div class="card h-100 border-0 shadow-sm" style="cursor: pointer;" onclick="selectMenu('${menu.id}')">
                                                        <img src="${menu.image_url}" loading="lazy" class="card-img-top" alt="${menu.name}" style="height: 120px; object-fit: cover;" onerror="this.src='https://placehold.co/300x200?text=No+Image'">
                                                        <div class="card-body p-2 text-center">
                                                            <h6 class="card-title text-truncate mb-0" style="font-size: 0.85rem;" title="${menu.name}">${menu.name}</h6>
                                                            <span class="badge bg-light text-dark border mt-1">${menu.theme}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            `;
                                            container.innerHTML += card;
                                        });
                                    }
                                }

                                // Fungsi saat menu diklik di dalam modal -> Isi slot yang kosong/diganti
                                function selectMenu(menuId) {
                                    const selectedMenu = rawMenus.find(m => m.id === menuId);
                                    if(!selectedMenu) return;

                                    const targetDivId = `slot-${activeTargetDate}-${activeTargetSlotIndex}`;
                                    const targetDiv = document.getElementById(targetDivId);

                                    // Buat HTML untuk slot yang terisi beserta Hidden Input-nya
                                    const filledHtml = `
                                        <div class="slot-filled shadow-sm">
                                            <input type="hidden" name="schedules[${activeTargetDate}][]" value="${selectedMenu.id}">
                                            <img src="${selectedMenu.image_url}" loading="lazy" alt="${selectedMenu.name}" onerror="this.src='https://placehold.co/300x200?text=No+Image'">
                                            <div class="menu-title-badge">${selectedMenu.name}</div>
                                            <div class="slot-overlay">
                                                <button type="button" class="btn btn-sm btn-light w-75 rounded-pill" onclick="openMenuModal('${activeTargetDate}', ${activeTargetSlotIndex})">
                                                    <i class="bi bi-arrow-repeat"></i> Ganti
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger w-75 rounded-pill" onclick="removeMenu('${activeTargetDate}', ${activeTargetSlotIndex})">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </div>
                                        </div>
                                    `;

                                    targetDiv.innerHTML = filledHtml;
                                    menuModalInstance.hide();
                                }

                                // Fungsi menghapus menu dari slot (Kembali ke mode "Tambah Menu")
                                function removeMenu(dateKey, slotIndex) {
                                    const targetDivId = `slot-${dateKey}-${slotIndex}`;
                                    const targetDiv = document.getElementById(targetDivId);
                                    
                                    const emptyHtml = `
                                        <div class="slot-empty shadow-sm" onclick="openMenuModal('${dateKey}', ${slotIndex})">
                                            <span class="text-muted small fw-bold"><i class="bi bi-plus-circle"></i> Tambah Menu</span>
                                        </div>
                                    `;
                                    
                                    targetDiv.innerHTML = emptyHtml;
                                }
                            </script>

                            @else
                                <div class="alert alert-danger shadow-sm border-0 d-flex align-items-center m-4">
                                    <i class="bi bi-exclamation-triangle-fill fs-3 me-3"></i>
                                    <div>
                                        <strong>Gagal Memuat Jadwal!</strong> Pastikan response API sukses (Status 200).
                                    </div>
                                </div>
                            @endif
							
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2025&copy;</span>
									<span class="text-gray-800">Homade Kreatif Teknologi</span>
								</div>
								<!--end::Copyright-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->

			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->


		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
		
		<script>var hostUrl = "assets/";</script>

		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->

		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/jstree/jstree.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->

		<!--begin::Custom Javascript(used for this page only)-->
		<script>
			"use strict";

			let exportButton;

			function initCustomDatatable(tableId, columns, columnDefs, dataSource) {

				const tableElement = document.querySelector(tableId);
				if (!tableElement) return;

				const datatable = $(tableElement).DataTable({
					data: dataSource,
					info: true,
					order: [],
					pageLength: 5,
					lengthMenu: [
						[5, 10, 25, 50, 100],
						[5, 10, 25, 50, 100]
					],
					language: {
						lengthMenu: "_MENU_",
						info: "Showing _START_ to _END_ of _TOTAL_ entries",
						infoEmpty: "No entries available",
						infoFiltered: "(filtered from _MAX_ total entries)"
					},
					columns: columns,
					columnDefs: columnDefs,
					drawCallback: function () {
						KTMenu.createInstances();
					}
				});

				// ==========================
				// Checkbox Logic (Scoped)
				// ==========================

				const table = $(tableElement);

				// AUTO FOCUS SEARCH (tambahan)
				setTimeout(() => {
					const searchInput = document.querySelector(`[data-kt-filter="search"][data-table-target="${tableId}"]`);
					searchInput?.focus();
				}, 100);
			}

			function exportDatatableToExcel(tableId, filename = 'Export Excel') {
				const table = $(tableId).DataTable();

				if (!exportButton) {
					exportButton = new $.fn.dataTable.Buttons(table, {
						buttons: [{
							extend: 'excelHtml5',
							title: filename,
							exportOptions: {
								// columns: ':not(:last-child)'
								columns: [0,1]
							}
						}]
					});
				}

				table.button(0).trigger();
			}

			KTUtil.onDOMContentLoaded(function () {

				const data1 = [
					{
						idKategori: "KT-072025-0001",
						kategori: "Sapi",
					},
					{
						idKategori: "KT-072025-0002",
						kategori: "Ayam",
					},
				];
				const columns1 = [
					{ data: "idKategori" },
					{ data: "kategori" },
					{ data: null, 
					  orderable: false, 
					  className: 'text-end',
						render: function () {
							return `<button
										class="btn btn-secondary btn-active-light-primary btn-sm" 
										data-kt-menu-trigger="click"
										data-kt-menu-placement="bottom-end" 
										data-kt-menu-flip="top-end">
										Aksi
										<i class="bi bi-chevron-down fs-8 ms-1"></i>
									</button>
									<!--begin::Menu-->
									<div
										class="menu menu-primary menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg menu-state-color fw-bold fs-7 min-w-125px w-auto py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">
												Lihat Detail
											</a>
										</div>
										<!--end::Menu item-->
										
										<div class="separator my-2"></div>
										
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link menu-link-delete px-3">
												Hapus
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->`;
						}
					}
				];
				const columnDefs1 = [];

				initCustomDatatable('#kt_datatable_example', columns1, columnDefs1, data1);

				// handle export excel
				document.getElementById('btnExportExcel')?.addEventListener('click', function () {
					exportDatatableToExcel('#kt_datatable_example', 'Daftar Kategori');
				});

				// handle Search Datatable
				document.querySelectorAll('[data-kt-filter="search"]').forEach(function (searchInput) {

					const tableSelector = searchInput.getAttribute('data-table-target');
					if (!tableSelector) return;

					const table = document.querySelector(tableSelector);
					if (!table) return;

					const datatable = $(table).DataTable();

					searchInput.addEventListener('keyup', function () {
						datatable.search(this.value).draw();
					});

				});
			});
		</script>
		<!--end::Custom Javascript-->
		
	</body>
	<!--end::Body-->
</html>
