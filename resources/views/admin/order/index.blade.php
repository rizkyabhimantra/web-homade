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
									Kelola Pemesanan
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
											<a class="menu-link" href="{{ route('admin.schedules') }}">
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
											<a class="menu-link active" href="{{ route('admin.orders') }}">
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
						<div class="d-flex flex-column flex-column-fluid px-10">

							<div class="d-flex align-items-stretch gap-3 mb-5 w-100 flex-wrap">
								<a href="{{ route('admin.add-order-page') }}" class="flex-shrink-0 bg-accent text-nowrap text-white py-4 px-5 rounded-2 fw-bold">Tambahkan Transaksi</a>

								<form action="{{ route('admin.export-orders', [ 'filter_by' => 'yearly', 'category' => 'kitchen']) }}" method="post">
									@csrf
									<button class="flex-shrink-0 bg-accent text-white py-4 px-5 rounded-2 fw-bold text-nowrap">Data Export</button>
								</form>

								<select onchange="applyFilter()" id="filterCategory" class="flex-shrink-0 border-grey-1 outline-0 bg-transparent py-2 px-2 rounded-2 fw-bold">
									<option value="">Semua Kategori</option>
									<option value="order" {{ request('category') == 'order' ? 'selected' : '' }}>Order</option>
									<option value="pre-order" {{ request('category') == 'pre-order' ? 'selected' : '' }}>Pre-Order</option>
								</select>
								
								<select onchange="applyFilter()" id="filterStatus" class="flex-shrink-0 border-grey-1 outline-0 bg-transparent py-2 px-2 rounded-2 fw-bold">
									<option value="">Semua Status</option>
									<option value="waiting_for_invoice" {{ request('status') == 'waiting_for_invoice' ? 'selected' : '' }}>Waiting for Invoice</option>
									<option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
									<option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }}>Paid</option>
									<option value="success" {{ request('status') == 'success' ? 'selected' : '' }}>Success</option>
								</select>

								<input type="text" class="flex-grow-1 min-w-150px border-grey-1 px-3 rounded-2 py-4 fw-bold" id="searchInput" placeholder="cari pesanan...">
							</div>

							@if ($response['status'] === 'success')
								<div class="overflow-scroll">
									<table class="table table-striped rounded-3 flex-shrink-0 w-max overflow-scroll">
										<thead>
											<tr>
												<th scope="col" class="text-nowrap">ID Transaksi</th>
												<th scope="col" class="text-nowrap">Nama Pengguna</th>
												<th scope="col" class="text-nowrap">Total Harga</th>
												<th scope="col" class="text-nowrap">Kategori</th>
												<th scope="col" class="text-nowrap">Status</th>
												<th scope="col" class="text-nowrap">Tanggal Pengiriman</th>
												<th scope="col" class="text-nowrap">Detail Pemesanan</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($response['data']['orders'] as $order)
												<tr>
													<td class="text-nowrap">{{ $order['id'] }}</td>
													<td class="text-nowrap">{{ $order['user']['first_name'] }}</td>
													<td class="text-nowrap">{{ number_format($order['total_price'], 0, ',', '.') }}</td>
													<td class="text-nowrap">{{ $order['category'] }}</td>
													<td class="text-nowrap">{{ $order['status'] }}</td>
													<td class="text-nowrap">{{ $order['delivery_at'] }}</td>
													<td class="text-nowrap"><a href="{{ route('admin.detail-order', ['id' => $order['id']]) }}">Detail</a></td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>

								<div class="d-flex align-items-center justify-content-between w-100">
									<select name="limit" onchange="window.location.href='?limit=' + this.value" class="h-100 border-grey-1 outline-0 bg-transparent fs-4 py-2 px-2 rounded-2">
										@foreach ([4, 8, 12, 16] as $limit)
											<option value="{{ $limit }}" {{ request('limit') == $limit ? 'selected' : '' }}>
												{{ $limit }}
											</option>
										@endforeach
									</select>

									@php
										$pagination = $response['data']['pagination'] ?? null;
										$currentPage = $pagination['current_page'] ?? 1;
										$lastPage = $pagination['last_page'] ?? 1;

										$window = 1;
										$start = max(2, $currentPage - $window);
										$end = min($lastPage - 1, $currentPage + $window);
									@endphp

									@if($pagination && $lastPage > 1)
									<div class="d-flex h-100 gap-2">
										
										<a href="{{ $currentPage > 1 ? request()->fullUrlWithQuery(['page' => $currentPage - 1]) : '#' }}" 
										class="text-decoration-none text-dark h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center {{ $currentPage <= 1 ? 'opacity-50 pe-none' : '' }}">
											<img src="{{ asset('icons/caret-arrow-left.svg') }}" alt="Prev" class="h-90">
										</a>

										<a href="{{ request()->fullUrlWithQuery(['page' => 1]) }}" 
										class="text-decoration-none h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold {{ $currentPage == 1 ? 'bg-accent text-white' : 'text-dark' }}">
											1
										</a>

										@if($start > 2)
											<div class="h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold cursor-default">
												...
											</div>
										@endif

										@for ($i = $start; $i <= $end; $i++)
											<a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}" 
											class="text-decoration-none h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold {{ $currentPage == $i ? 'bg-accent text-white' : 'text-dark' }}">
												{{ $i }}
											</a>
										@endfor

										@if($end < $lastPage - 1)
											<div class="h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold cursor-default">
												...
											</div>
										@endif

										<a href="{{ request()->fullUrlWithQuery(['page' => $lastPage]) }}" 
										class="text-decoration-none h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold {{ $currentPage == $lastPage ? 'bg-accent text-white' : 'text-dark' }}">
											{{ $lastPage }}
										</a>

										<a href="{{ $currentPage < $lastPage ? request()->fullUrlWithQuery(['page' => $currentPage + 1]) : '#' }}" 
										class="text-decoration-none text-dark h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center {{ $currentPage >= $lastPage ? 'opacity-50 pe-none' : '' }}">
											<img src="{{ asset('icons/caret-arrow-right.svg') }}" alt="Next" class="h-90">
										</a>

									</div>
									@endif

								</div>

							@else
								{{ $response['message'] }}
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
			document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('searchInput');
                const urlParams = new URLSearchParams(window.location.search);

                if (urlParams.has('search')) {
                    searchInput.value = urlParams.get('search');
                }

                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        const query = this.value.trim();

                        if (query) {
                            urlParams.set('search', query);
                        } else {
                            urlParams.delete('search');
                        }

                        urlParams.set('page', 1);

                        window.location.search = urlParams.toString();
                    }
                });
            });
            
		</script>

		<script>
			function applyFilter() {
				const category = document.getElementById('filterCategory').value;
				const status = document.getElementById('filterStatus').value;
				const params = new URLSearchParams(window.location.search);

				if (category) params.set('category', category);
				else params.delete('category');

				if (status) params.set('status', status);
				else params.delete('status');

				params.delete('page');

				window.location.href = '?' + params.toString();
			}
		</script>
		<!--end::Custom Javascript-->
		
	</body>
	<!--end::Body-->
</html>