
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
		data-kt-app-sidebar-hoverable="false" 
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
							<a href="{{route('admin.dashboard')}}" class="d-lg-none">
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
									Detail Kategori
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
													<a href="{{ route('admin.categories') }}" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
													<img src="{{ asset('icons/menu.svg') }}" alt="">
													</a>
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
														<img class="mw-100 mh-200px" alt="image" src="{{asset('assets/media/illustrations/sketchy-1/5.png')}}" />
													</div>
													<!--end::Illustration-->
												</div>
												<!--end::Empty State-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="{{ route('admin.accounts') }}" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
													<i class="ki-duotone ki-arrow-right fs-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													</a>
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
					
				@include('components.sidebar', ["page" => "theme"])

					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">

						<!--begin::Toolbar-->
						<div id="kt_app_toolbar" class="app-toolbar py-3">
							<!--begin::Toolbar container-->
							<div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">

								<!--begin::Title & Breadcrumb-->
								<div 
									data-kt-swapper="true" 
									data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
									data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_toolbar_container'}"
									class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
						
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-none d-md-flex">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Detail Kategori</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->

								</div>
								<!--end::Title & Breadcrumb-->

								<!--begin::Action group-->
								<div class="d-flex align-items-center ms-auto">
									{{-- halo ini disuruh hapus sama radit, katanya export blm ada dan filternya jg gak ada - labubu--}}
								</div>
								<!--end::Action group-->
						
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->

                        @if ($response['status'] === 'success')

                        <div class="d-flex w-100 h-100 p-5 align-items-center justify-content-center flex-column">
                            <div class="d-flex flex-column px-10 py-15 w-100 w-sm-400px border-homade-1 rounded-3 gap-3">
                                
                                <h2>Detail Tema - {{ $response['data']['name'] }}</h2>

                                <form action="{{ route('admin.edit-theme', ['id' => $response['data']['id']] ) }}" method="post" style="display:flex; flex-direction: column; gap:10px;">
                                    @csrf
                                    @method('put')
                                    <label for="name">Nama Tema</label>
                                    <input id="name" class="border-homade-1 px-3 py-2 rounded-2 mb-2" type="text" name="name" value="{{ old('name') ?? $response['data']['name'] }}">
                                    <label for="description">Deskripsi Tema</label>
                                    <textarea id="description" class="border-homade-1 w-100 min-h-50px max-h-100px px-3 py-2 mb-3 rounded-2" name="description" id="">{{ old('description') ?? $response['data']['description'] }}</textarea>

                                    <span>Dibuat Pada: {{ $response['data']['created_at'] }}</span>
                                    @if ($response['data']['deleted_at'])
                                    <span>Dihapus Pada: {{ $response['data']['deleted_at'] }}</span>
                                    @endif
                                    
                                    <button class="py-3 bg-accent text-white fw-semibold rounded-2">Simpan Perubahan</button>
                                </form>
                                
                                <div class="d-flex w-100 gap-3 align-items-stretch">
                                    @if ($response['data']['deleted_at'])
                                    <form class="w-100 py-3 bg-accent rounded-2 d-flex align-items-center justify-content-center" action="{{ route('admin.restore-theme', ['id' => $response['data']['id']] ) }}" method="post" style="display:flex; flex-direction: column; gap:10px;">
                                        @csrf
                                        @method('patch')
                                        <button class="text-white w-100 h-100 fw-semibold ">Kembalikan tema</button>
                                    </form>
                                    @else
                                    <form class="w-100 py-3 bg-accent rounded-2 d-flex align-items-center justify-content-center" action="{{ route('admin.delete-theme', ['id' => $response['data']['id']] ) }}" method="post" style="display:flex; flex-direction: column; gap:10px;">
                                        @csrf
                                        @method('delete')
                                        <button class="text-white w-100 h-100 fw-semibold ">Hapus Data Perubahan</button>
                                    </form>
                                    @endif
                                </div>

                                <a href="{{ route('admin.themes') }}" class="text-accent d-flex align-items-center justify-content-center bg-danger-subtle py-3 fw-semibold rounded-2">Kembali</a>

                            </div>
                        </div>

                        @else
                        <p>Error</p>
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
			<img src="{{ asset('icons/arrow-up.svg') }}" alt="" class="img-white">
		</div>
		<!--end::Scrolltop-->

		<!--begin::Drawers-->
		<!--end::Drawers-->

		<!--begin::Modals-->
		<!--end::Modals-->


		
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
		
		<!--end::Custom Javascript-->
		
	</body>
	<!--end::Body-->
</html>

@if (session()->has('response'))
<script>
    alert('{{ session()->get('response')['message'] }}')
@endif

@if (session()->has('response'))
<script>
    alert('{{ session()->get('response')['message'] }}')
</script>
@endif