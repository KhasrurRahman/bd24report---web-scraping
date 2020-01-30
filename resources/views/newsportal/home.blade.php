
	@extends('newsportal.app') @section('title','home') @push('css') @endpush @section('content')
	<main class="content-container" id="content">
		<div class="layout-3-col layout-3-col-0">
			<div class="row main-section">
				<div class="col-sm-12 content-column">
					<div class="single-container bs-vc-content">
						<div class="row vc_row wpb_row vc_row-fluid">
							<div class="bs-vc-wrapper">
								<div class="wpb_column bs-vc-column vc_column_container vc_col-sm-12">
									<div class="bs-vc-wrapper wpb_wrapper">
										<div class="wpb_tabs wpb_content_element" data-interval="0">
											<div class="wpb_wrapper wpb_tour_tabs_wrapper ui-tabs vc_clearfix">
												<div class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix" id="latest">
													<div class="row vc_row vc_inner vc_row-fluid">
														<div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm">
															<div class="bs-vc-wrapper">
																<div class=" bs-hidden-lg bs-hidden-md bs-listing bs-listing-modern-grid-listing-9 bs-listing-single-tab">
																	<div class="listing listing-modern-grid listing-modern-grid-9 clearfix slider-overlay-simple-gr">


																		<div class="mg-col mg-col-1">
																			<article class="post-285211 type-post format-standard has-post-thumbnail listing-item-1 listing-item listing-mg-item listing-mg-9-item listing-mg-type-1 main-term-6">
																				<div class="item-content" style="font-family: SolaimanLipi !important;font-weight: bold !important;">
																					<a class="img-cont" data-bsrjs="{{asset('public/assets/img/E0A6B8E0A79CE0A695-4.jpg')}}" href="" style="background-image: url({{asset('public/assets/img/E0A6B8E0A79CE0A695-4-750x430.jpg')}});" title="সড়ক দুর্ঘটনায় মা-ছেলেসহ ৩ জনের প্রাণহানি"></a>
																					<div class="content-container">
																						<h2 class="title"><a class="post-url post-title" href="">সড়ক দুর্ঘটনায় মা-ছেলেসহ ৩ জনের প্রাণহানি</a></h2>
																					</div>
																				</div>
																			</article>
																		</div>



																		<div class="mg-col mg-col-2">

																			</div>
																			<div class="mg-row mg-row-2 clearfix">
																				<div class="item-4-cont">
																					<article class="post-285189 type-post format-standard has-post-thumbnail listing-item-4 listing-item listing-mg-item listing-mg-9-item listing-mg-type-1 main-term-6">
																						<div class="item-content">
																							<a class="img-cont" data-bsrjs="img/INmAozcA2aSXmgHWGDXM7TA69KRbsx3Bnto5hV4C-357x210.jpeg" href="" style="background-image: url({{asset('public/assets/img/INmAozcA2aSXmgHWGDXM7TA69KRbsx3Bnto5hV4C-279x220.jpg')}});" title="কোটি টাকার রাস্তার কাজ চলছে দায়সারাভাবে"></a>
																							<div class="content-container">
																								<h2 class="title"><a class="post-url post-title" href="">কোটি টাকার রাস্তার কাজ চলছে দায়সারাভাবে</a></h2>
																							</div>
																						</div>
																					</article>
																				</div>
																				<div class="item-5-cont">
																					<article class="post-285181 type-post format-standard has-post-thumbnail listing-item-5 listing-item listing-mg-item listing-mg-9-item listing-mg-type-1 main-term-15">
																						<div class="item-content">
																							<a class="img-cont" data-bsrjs="img/E0A6AEE0A78BE0A6A6E0A6BF-5-357x210.jpg" href="" style="background-image: url({{asset('public/assets/img/E0A6AEE0A78BE0A6A6E0A6BF-5-279x220.jpg')}});" title="নিজের চকচকে উজ্জ্বল ত্বকের রহস্য ফাঁস করলেন মোদি"></a>
																							<div class="content-container">
																								<h2 class="title"><a class="post-url post-title" href="">নিজের চকচকে উজ্জ্বল ত্বকের রহস্য ফাঁস করলেন মোদি</a></h2>
																							</div>
																						</div>
																					</article>
																				</div>


																			</div>
																		</div>
																		<div class="mg-col mg-col-3">
																			<div class="mg-row mg-row-1 clearfix">
																				<div class="item-6-cont"></div>
																			</div>
																			<div class="mg-row mg-row-2 clearfix">
																				<div class="item-7-cont"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row vc_row vc_inner vc_row-fluid">
														<div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-xs">
															<div class="bs-vc-wrapper">
																<div class="bscb-18451 vc_custom_1579587146254 have_bg bs-listing bs-listing-listing-text-2 bs-listing-single-tab">
																	<div class="listing listing-text listing-text-2 clearfix columns-1">

<article class="post-285231 type-post format-standard has-post-thumbnail listing-item listing-item-text listing-item-text-2 main-term-14" style="padding-bottom: 16px !important;background: #86DE86;padding: 15px;
    height: 53px;">
																			<div class="item-inner" style="background: #86de86;">
																				<h2 class="title">সর্বশেষ</h2>
																			</div>
</article>
@foreach($latest as $key=>$latest_data)

@break($key == 9)

																		<article class="post-285231 type-post format-standard has-post-thumbnail listing-item listing-item-text listing-item-text-2 main-term-14" style="height: 50px;border-left: 2px solid;">
																			<div class="item-inner">
																				<h2 class="title" style="padding: 8px"><a class="post-title post-url" href="{{$latest_data['link']}}" >{{$latest_data['text']}}</a></h2>
																			</div>
																		</article>


@endforeach



																	</div>
																</div>
															</div>
														</div>
														<div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-xs">
															<div class="bs-vc-wrapper">
																<div class=" bs-listing bs-listing-listing-mix-4-1 bs-listing-single-tab">
																	<div class="listing listing-mix-4-1 clearfix">
																		<div class="item-inner">
																			<div class="listing listing-classic listing-classic-3 clearfix columns-1 columns-1">

   @foreach($national as $key=>$national_data)
    @break($key == 1)
																				<article class="post-285211 type-post format-standard has-post-thumbnail listing-item listing-item-classic listing-item-classic-3 main-term-6 bsw-7">
																					<div class="item-inner">
																						<div class="featured clearfix">
																							<a class="img-holder" data-bsrjs="{{$national_data['image']}}" href="" style="background-image: url({{$national_data['image']}});" title="{{$national_data['text']}}"></a>
																							<div class="title">
																								<h2 class="title-tag"><a class="post-title post-url" href="{{$national_data['link']}}"><p style="text-align: center">{{$national_data['text']}}</p></a></h2>
																							</div>
																						</div>
																						<div class="listing-inner"></div>
																					</div>
																				</article>

                                                                @endforeach
																			</div>
																			<div class="listing listing-grid listing-grid-1 clearfix columns-2">
    @foreach($politics as $key=>$national_data)
    @break($key == 2)

																				<article class="post-285195 type-post format-standard has-post-thumbnail listing-item listing-item-grid listing-item-grid-1 main-term-15" style="height: 270px">
																					<div class="item-inner">
																						<div class="featured clearfix">
																							<a class="img-holder" data-bsrjs="{{$national_data['image']}}" href="{{$national_data['link']}}" style="background-image: url({{$national_data['image']}});" title="{{$national_data['text']}}"></a>
																						</div>
																						<h2 class="title"><a class="post-title post-url" href="">{{$national_data['text']}}</a></h2>
																					</div>
																				</article>
                                                   @endforeach

																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-xs">
															<div class="bs-vc-wrapper">
																<div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1579689840462">
																	<div class="wpb_wrapper">
																		<a href="" target="_blank"><img alt="rocket" src="{{asset('public/assets/img/dbbl300-x-250-GIF.gif')}}" width="100%"></a>
																	</div>
																</div>
																<div class="wpb_raw_code wpb_content_element wpb_raw_html">
																	<div class="wpb_wrapper">
																		<center>
																			<a href="" target="_blank"><img src="{{asset('public/assets/img/ksrm300-x-250.jpg')}}" width="100%"></a>
																		</center>
																	</div>
																</div>

															</div>
														</div>
													</div>



{{--                                            খেলাধুলা      --}}


													<div class="row vc_row vc_inner vc_row-fluid 111">
														<div class="wpb_column vc_column_container vc_col-sm-9">
															<div class="bs-vc-wrapper">
																<div class="bs-shortcode bs-text bscb-83577 bs_title_halka">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">খেলাধুলা</span></a></h3>
																	<style>
																	.bscb-83577 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-83577 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-83577.bscb-83577.bscb-83577.bscb-83577 .section-heading.sh-t6:before,.bscb-83577.bscb-83577 .section-heading.sh-t6:before,.bscb-83577 .section-heading.sh-t6 > .h-text,.bscb-83577 .section-heading.sh-t6 > .h-text:before,.bscb-83577.bscb-83577.bscb-83577.bscb-83577 .section-heading.sh-t6 > .main-link > .h-text,.bscb-83577.bscb-83577.bscb-83577.bscb-83577 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-83577.bscb-83577 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-83577.bscb-83577 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->
																<div class="bscb-60480 bs-listing bs-listing-listing-thumbnail-1 bs-listing-single-tab">
																	<style>
																	.bscb-60480 .section-heading.sh-t2 a.active,.bscb-60480.bscb-60480 .section-heading.sh-t2 .main-link:first-child:last-child .h-text{color:#444444}.bscb-60480 .section-heading.sh-t2 > .h-text,.bscb-60480 .section-heading.sh-t2 a:hover .h-text,.bscb-60480 .section-heading.sh-t2 a.active .h-text{color:#444444 !important}.bscb-60480.bscb-60480 .section-heading.sh-t2:after{background-color:#444444}

																	</style>
																	<div class="listing listing-thumbnail listing-tb-1 clearfix columns-2">





@foreach($sports as $international_data)

																		<div class="post-284623 type-post format-standard has-post-thumbnail listing-item listing-item-thumbnail listing-item-tb-1 main-term-23">
																			<div class="item-inner clearfix">
																				<div class="featured featured-type-featured-image">
																					<a class="img-holder" data-bsrjs="{{$international_data['image']}}" href="{{$international_data['link']}}" style="background-image: url({{$international_data['image']}});" title="শূন্য হাতে সৌদি থেকে ফিরলেন‌ আরও ২ শতাধিক বাংলাদেশি"></a>
																				</div>
																				<h3 class="title"><a class="post-url post-title" href="{{$international_data['link']}}">{{$international_data['text']}}</a></h3>
																			</div>
																		</div>

@endforeach
																	</div>
																</div>
															</div>
														</div>







														<div class="wpb_column vc_column_container vc_col-sm-3">
															<div class="bs-vc-wrapper">
																<div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1551267527682">
																	<div class="wpb_wrapper">
																		<a class="bsac-link" href="https://www.islamibankbd.com/" itemprop="url" target="_blank"><img alt="vu" class="bsac-image" src="{{asset('public/assets/img/IBBL.jpg')}}" width="100%"></a>
																	</div>
																</div>
																<div class="wpb_text_column wpb_content_element vc_custom_1579524185818 bs-vc-block">
																	<div class="wpb_wrapper">
																		<p><img alt="Mujib Borso" class="size-medium wp-image-283590 aligncenter" height="176" sizes="(max-width: 300px) 100vw, 300px" src="{{asset('public/assets/img/Mujib_Borso20200109170230-300x176.jpg')}}" title="Mujib Borso" width="300"><br></p>
																		<div class=''>
																			<div class="hurrytimer-cdt__inner hurrytimer-timer"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

{{--                                                --}}
{{--                                                --}}
{{--													<div class="row vc_row vc_inner vc_row-fluid">--}}
{{--														<div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--															<div class="bs-vc-wrapper">--}}
{{--																<div class="wpb_text_column wpb_content_element bs-vc-block">--}}
{{--																	<div class="wpb_wrapper">--}}
{{--																		<p></p>--}}
{{--																		<center>--}}
{{--																			<a class="bsac-link" href="" rel="noopener noreferrer" target="_blank"><img alt="ad 4" class="bsac-image" src="{{asset('public/assets/img/rbl.jpg')}}"></a>--}}
{{--																		</center>--}}
{{--																		<p></p>--}}
{{--																	</div>--}}
{{--																</div>--}}
{{--															</div>--}}
{{--														</div>--}}
{{--														<div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--															<div class="bs-vc-wrapper">--}}
{{--																<div class="wpb_text_column wpb_content_element bs-vc-block">--}}
{{--																	<div class="wpb_wrapper">--}}
{{--																		<p></p>--}}
{{--																		<center>--}}
{{--																			<a class="bsac-link" href="" rel="noopener noreferrer" target="_blank"><img alt="ad 3" class="bsac-image" src="{{asset('public/assets/img/sibl.gif')}}" style="border: 2px solid red;" width="300px"></a>--}}
{{--																		</center>--}}
{{--																		<p></p>--}}
{{--																	</div>--}}
{{--																</div>--}}
{{--															</div>--}}
{{--														</div>--}}
{{--														<div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--															<div class="bs-vc-wrapper">--}}
{{--																<div class="wpb_text_column wpb_content_element bs-vc-block">--}}
{{--																	<div class="wpb_wrapper">--}}
{{--																		<p></p>--}}
{{--																		<center>--}}
{{--																			<a href=""><img alt="Al-Arafa" src="{{asset('public/assets/img/al-arafa.gif')}}" style="border: 2px solid green;"></a>--}}
{{--																		</center>--}}
{{--																		<p></p>--}}
{{--																	</div>--}}
{{--																</div>--}}
{{--															</div>--}}
{{--														</div>--}}
{{--														<div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--															<div class="bs-vc-wrapper">--}}
{{--																<div class="wpb_text_column wpb_content_element bs-vc-block">--}}
{{--																	<div class="wpb_wrapper">--}}
{{--																		<p></p>--}}
{{--																		<center>--}}
{{--																			<a class="bsac-link" href="" rel="noopener noreferrer" target="_blank"><img alt="ad 2" class="bsac-image" src="{{asset('public/assets/img/icb.jpg')}}" style="border: 2px solid blue;"></a>--}}
{{--																		</center>--}}
{{--																		<p></p>--}}
{{--																	</div>--}}
{{--																</div>--}}
{{--															</div>--}}
{{--														</div>--}}



													</div>





{{--                                                    জাতীয়--}}


													<div class="row vc_row vc_inner vc_row-fluid vc_custom_1563450508610 vc_row-has-fill">
														<div class="wpb_column vc_column_container vc_col-sm-9">
															<div class="bs-vc-wrapper vc_custom_1563450412187">
																<div class="bs-shortcode bs-text bscb-88331 padding15right">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">জাতীয়</span></a></h3>
																	<style>
																	.bscb-88331 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-88331 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-88331.bscb-88331.bscb-88331.bscb-88331 .section-heading.sh-t6:before,.bscb-88331.bscb-88331 .section-heading.sh-t6:before,.bscb-88331 .section-heading.sh-t6 > .h-text,.bscb-88331 .section-heading.sh-t6 > .h-text:before,.bscb-88331.bscb-88331.bscb-88331.bscb-88331 .section-heading.sh-t6 > .main-link > .h-text,.bscb-88331.bscb-88331.bscb-88331.bscb-88331 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-88331.bscb-88331 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-88331.bscb-88331 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->
																<div class=" bs-listing bs-listing-modern-grid-listing-6 bs-listing-single-tab marginbottom5px">
																	<div class="listing listing-modern-grid listing-modern-grid-6 clearfix slider-overlay-simple-gr bsw-10">

                                                                         @foreach($national as $key=>$national_data)

        @if($key+1 == 3)
         @break
         @endif
																		<div class="mg-col mg-col-1">
																			<div class="post-285211 type-post format-standard has-post-thumbnail listing-item-1 listing-item listing-mg-item listing-mg-6-item listing-mg-type-1 main-term-6">
																				<div class="item-content">
																					<a class="img-cont" data-bsrjs="{{$national_data['image']}}" href="{{$national_data['link']}}" style="background-image: url({{$national_data['image']}});" title="সড়ক দুর্ঘটনায় মা-ছেলেসহ ৩ জনের প্রাণহানি"></a>
																					<div class="content-container">
																						<h3 class="title"><a class="post-url post-title" href="{{$national_data['link']}}">{{$national_data['text']}}</a></h3>
																					</div>
																				</div>
																			</div>
																		</div>


@endforeach


																	</div>
																</div>


																<div class="vc_custom_1579809020278 bs-listing bs-listing-modern-grid-listing-3 bs-listing-single-tab marginbottom5px">
																	<div class="listing listing-modern-grid listing-modern-grid-3 clearfix slider-overlay-simple-gr columns-4">



    @foreach($national as $key=>$national_data)

@if($key+1 == 9)
@break
@endif
																		<div class="post-285191 type-post format-standard has-post-thumbnail listing-item-1 listing-item listing-mg-item listing-mg-3-item main-term-30 bsw-250">
																			<div class="item-content">
																				<a class="img-cont" href="{{$national_data['link']}}" style="background-image: url({{$national_data['image']}});" title="পদ্মা সেতুর মতো দৃশ্যমান হচ্ছে চট্টগ্রাম-কক্সবাজার রেলপথ"></a>
																				<div class="content-container">
																					<h3 class="title"><a class="post-title post-url" href="">{{$national_data['text']}}</a></h3>
																				</div>
																			</div>
																		</div>


                                                                  @endforeach


																	</div>
																</div>
															</div>
														</div>




{{--ভিন্ন খবর--}}

														<div class="bg1111 wpb_column vc_column_container vc_col-sm-3">
															<div class="bs-vc-wrapper vc_custom_1563450421074">
																<div class="bs-shortcode bs-text bscb-86603 bs_title_halka">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">ভিন্ন খবর</span></a></h3>
                                                                    <style>
																	.bscb-86603 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-86603 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-86603.bscb-86603.bscb-86603.bscb-86603 .section-heading.sh-t6:before,.bscb-86603.bscb-86603 .section-heading.sh-t6:before,.bscb-86603 .section-heading.sh-t6 > .h-text,.bscb-86603 .section-heading.sh-t6 > .h-text:before,.bscb-86603.bscb-86603.bscb-86603.bscb-86603 .section-heading.sh-t6 > .main-link > .h-text,.bscb-86603.bscb-86603.bscb-86603.bscb-86603 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-86603.bscb-86603 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-86603.bscb-86603 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->
																<div class=" bs-listing bs-listing-listing-thumbnail-1 bs-listing-single-tab">
																	<div class="listing listing-thumbnail listing-tb-1 clearfix columns-1">

@foreach($different_news as $key=>$latest_data )

																		<div class="post-283839 type-post format-standard has-post-thumbnail listing-item listing-item-thumbnail listing-item-tb-1 main-term-23" style="height: 53px">
																			<div class="item-inner clearfix">

																				<h3 class="title"><a class="post-url post-title" href="{{$latest_data['link']}}">{{$latest_data['text']}}</a></h3>
																			</div>
																		</div>

{{--    @break($key == 16)--}}
@endforeach

																	</div>
																</div>
															</div>
														</div>
													</div>






													<div class="row vc_row vc_inner vc_row-fluid vc_custom_1565252288956 vc_row-has-fill">
														<div class="wpb_column vc_column_container vc_col-sm-9 vc_hidden-md vc_hidden-sm vc_hidden-xs">
															<div class="bs-vc-wrapper vc_custom_1565253505651">
																<div class="bs-shortcode bs-text bscb-66651 bs-hidden-md bs-hidden-sm padding15right">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">আন্তর্জাতিক</span></a></h3>
																	<style>
																	.bscb-66651 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-66651 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-66651.bscb-66651.bscb-66651.bscb-66651 .section-heading.sh-t6:before,.bscb-66651.bscb-66651 .section-heading.sh-t6:before,.bscb-66651 .section-heading.sh-t6 > .h-text,.bscb-66651 .section-heading.sh-t6 > .h-text:before,.bscb-66651.bscb-66651.bscb-66651.bscb-66651 .section-heading.sh-t6 > .main-link > .h-text,.bscb-66651.bscb-66651.bscb-66651.bscb-66651 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-66651.bscb-66651 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-66651.bscb-66651 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->
															</div>
														</div>


														<div class="bgblack wpb_column vc_column_container vc_col-sm-3 vc_hidden-md vc_hidden-sm vc_hidden-xs">
															<div class="bs-vc-wrapper vc_custom_1565253515313">
																<div class="bs-shortcode bs-text bscb-72340 bs-hidden-md bs-hidden-sm bs_title_halka1">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">অনন্য</span></a></h3>
																	<style>
																	.bscb-72340 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-72340 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-72340.bscb-72340.bscb-72340.bscb-72340 .section-heading.sh-t6:before,.bscb-72340.bscb-72340 .section-heading.sh-t6:before,.bscb-72340 .section-heading.sh-t6 > .h-text,.bscb-72340 .section-heading.sh-t6 > .h-text:before,.bscb-72340.bscb-72340.bscb-72340.bscb-72340 .section-heading.sh-t6 > .main-link > .h-text,.bscb-72340.bscb-72340.bscb-72340.bscb-72340 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-72340.bscb-72340 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-72340.bscb-72340 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->
															</div>
														</div>
													</div>


{{--আন্তর্জাতিক--}}

													<div class="row vc_row vc_inner vc_row-fluid vc_custom_1565252297700 vc_row-has-fill">
														<div class="wpb_column vc_column_container vc_col-sm-3">
															<div class="bs-vc-wrapper vc_custom_1563450412187">
																<div class="bs-shortcode bs-text bscb-39957 bs-hidden-lg padding15right">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">আন্তর্জাতিক</span></a></h3>
																	<style>
																	.bscb-39957 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-39957 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-39957.bscb-39957.bscb-39957.bscb-39957 .section-heading.sh-t6:before,.bscb-39957.bscb-39957 .section-heading.sh-t6:before,.bscb-39957 .section-heading.sh-t6 > .h-text,.bscb-39957 .section-heading.sh-t6 > .h-text:before,.bscb-39957.bscb-39957.bscb-39957.bscb-39957 .section-heading.sh-t6 > .main-link > .h-text,.bscb-39957.bscb-39957.bscb-39957.bscb-39957 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-39957.bscb-39957 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-39957.bscb-39957 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->

  @foreach($international_all  as $key=>$international_all_data)

                          @if($key+1 == 3)
                            @break
                            @endif
																<div class=" bs-listing bs-listing-listing-grid-1 bs-listing-single-tab" style="margin-bottom: -16px;">
																	<div class="listing listing-grid listing-grid-1 clearfix columns-1">


																		<div class="post-285233 type-post format-standard has-post-thumbnail listing-item listing-item-grid listing-item-grid-1 main-term-15">
																			<div class="item-inner">
																				<div class="featured clearfix">
																					<a class="img-holder" data-bsrjs="{{$international_all_data['image']}}" href="{{$international_all_data['link']}}" style="background-image: url({{$international_all_data['image']}});" title="{{$international_all_data['text']}}"></a>
																				</div>
																				<h3 class="title"><a class="post-title post-url" href="{{$international_all_data['link']}}">{{$international_all_data['text']}}</a></h3>
																			</div>
																		</div>


																	</div>
																</div>


                                                        @endforeach


															</div>
														</div>




														<div class="wpb_column vc_column_container vc_col-sm-6">
															<div class="bs-vc-wrapper vc_custom_1565251332062">
																<div class=" bs-listing bs-listing-listing-thumbnail-1 bs-listing-single-tab">
																	<div class="listing listing-thumbnail listing-tb-1 clearfix columns-2">

@foreach($international_all  as $key=>$international_all_data)
    @break($key == 10)

																		<div class="post-285215 type-post format-standard has-post-thumbnail listing-item listing-item-thumbnail listing-item-tb-1 main-term-15">
																			<div class="item-inner clearfix">
																				<div class="featured featured-type-featured-image">
																					<a class="img-holder" data-bsrjs="img/125-7-210x136.jpg" href="{{$international_all_data['link']}}" style="background-image: url({{$international_all_data['image']}});" title="{{$international_all_data['text']}}"></a>
																				</div>
																				<h3 class="title"><a class="post-url post-title" href="{{$international_all_data['link']}}">{{$international_all_data['text']}}</a></h3>
																			</div>
																		</div>


                    @endforeach


																	</div>
																</div>
															</div>
														</div>
														<div class="bgblack wpb_column vc_column_container vc_col-sm-3">
															<div class="bs-vc-wrapper vc_custom_1565252627444">
																<div class="bs-shortcode bs-text bscb-36668 bs-hidden-lg bs_title_halka2">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">অনন্য</span></a></h3>
																	<style>
																	.bscb-36668 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-36668 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-36668.bscb-36668.bscb-36668.bscb-36668 .section-heading.sh-t6:before,.bscb-36668.bscb-36668 .section-heading.sh-t6:before,.bscb-36668 .section-heading.sh-t6 > .h-text,.bscb-36668 .section-heading.sh-t6 > .h-text:before,.bscb-36668.bscb-36668.bscb-36668.bscb-36668 .section-heading.sh-t6 > .main-link > .h-text,.bscb-36668.bscb-36668.bscb-36668.bscb-36668 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-36668.bscb-36668 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-36668.bscb-36668 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->
																<div class="vc_custom_1565252111353 bs-listing bs-listing-listing-thumbnail-1 bs-listing-single-tab">
																	<div class="listing listing-thumbnail listing-tb-1 clearfix columns-1">


@foreach($other as $key=>$best_reading_data)

                            @break($key == 8)

																		<div class="post-285133 type-post format-standard has-post-thumbnail listing-item listing-item-thumbnail listing-item-tb-1 main-term-15" style="height: 49px">
																			<div class="item-inner clearfix">
																				<h3 class="title"><a class="post-url post-title" href="{{$best_reading_data['link']}}">{{$best_reading_data['text']}}&hellip;</a></h3>
																			</div>
																		</div>


@endforeach



																	</div>
																</div>
															</div>
														</div>
													</div>





{{--িশেষ প্রতিবেদন--}}



													<div class="row vc_row vc_inner vc_row-fluid vc_custom_1565252288956 vc_row-has-fill">
														<div class="wpb_column vc_column_container vc_col-sm-9 vc_hidden-md vc_hidden-sm vc_hidden-xs">
															<div class="bs-vc-wrapper vc_custom_1565253505651">
																<div class="bs-shortcode bs-text bscb-66651 bs-hidden-md bs-hidden-sm padding15right">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">বিশেষ-প্রতিবেদন</span></a></h3>
																	<style>
																	.bscb-66651 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-66651 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-66651.bscb-66651.bscb-66651.bscb-66651 .section-heading.sh-t6:before,.bscb-66651.bscb-66651 .section-heading.sh-t6:before,.bscb-66651 .section-heading.sh-t6 > .h-text,.bscb-66651 .section-heading.sh-t6 > .h-text:before,.bscb-66651.bscb-66651.bscb-66651.bscb-66651 .section-heading.sh-t6 > .main-link > .h-text,.bscb-66651.bscb-66651.bscb-66651.bscb-66651 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-66651.bscb-66651 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-66651.bscb-66651 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->
															</div>
														</div>


														<div class="bgblack wpb_column vc_column_container vc_col-sm-3 vc_hidden-md vc_hidden-sm vc_hidden-xs">
															<div class="bs-vc-wrapper vc_custom_1565253515313">
																<div class="bs-shortcode bs-text bscb-72340 bs-hidden-md bs-hidden-sm bs_title_halka1">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">লাইফ স্টাইল</span></a></h3>
																	<style>
																	.bscb-72340 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-72340 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-72340.bscb-72340.bscb-72340.bscb-72340 .section-heading.sh-t6:before,.bscb-72340.bscb-72340 .section-heading.sh-t6:before,.bscb-72340 .section-heading.sh-t6 > .h-text,.bscb-72340 .section-heading.sh-t6 > .h-text:before,.bscb-72340.bscb-72340.bscb-72340.bscb-72340 .section-heading.sh-t6 > .main-link > .h-text,.bscb-72340.bscb-72340.bscb-72340.bscb-72340 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-72340.bscb-72340 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-72340.bscb-72340 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->
															</div>
														</div>
													</div>


{{--িশেষ প্রতিবেদন--}}

													<div class="row vc_row vc_inner vc_row-fluid vc_custom_1565252297700 vc_row-has-fill">
														<div class="wpb_column vc_column_container vc_col-sm-3">
															<div class="bs-vc-wrapper vc_custom_1563450412187">
																<div class="bs-shortcode bs-text bscb-39957 bs-hidden-lg padding15right">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">বিশেষ-প্রতিবেদন</span></a></h3>
																	<style>
																	.bscb-39957 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-39957 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-39957.bscb-39957.bscb-39957.bscb-39957 .section-heading.sh-t6:before,.bscb-39957.bscb-39957 .section-heading.sh-t6:before,.bscb-39957 .section-heading.sh-t6 > .h-text,.bscb-39957 .section-heading.sh-t6 > .h-text:before,.bscb-39957.bscb-39957.bscb-39957.bscb-39957 .section-heading.sh-t6 > .main-link > .h-text,.bscb-39957.bscb-39957.bscb-39957.bscb-39957 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-39957.bscb-39957 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-39957.bscb-39957 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->

        @foreach($special_report  as $key=>$international_all_data)

                          @if($key+1 == 3)
                            @break
                            @endif
																<div class=" bs-listing bs-listing-listing-grid-1 bs-listing-single-tab" style="margin-bottom: -16px;">
																	<div class="listing listing-grid listing-grid-1 clearfix columns-1">


																		<div class="post-285233 type-post format-standard has-post-thumbnail listing-item listing-item-grid listing-item-grid-1 main-term-15" sty>
																			<div class="item-inner">
																				<div class="featured clearfix">
																					<a class="img-holder" data-bsrjs="{{$international_all_data['image']}}" href="{{$international_all_data['link']}}" style="background-image: url({{$international_all_data['image']}});" title="{{$international_all_data['text']}}"></a>
																				</div>
																				<h3 class="title" style="padding: 5.5px"><a class="post-title post-url" href="{{$international_all_data['link']}}" >{{$international_all_data['text']}}</a></h3>
																			</div>
																		</div>


																	</div>
																</div>


                                                        @endforeach


															</div>
														</div>




														<div class="wpb_column vc_column_container vc_col-sm-6">
															<div class="bs-vc-wrapper vc_custom_1565251332062">
																<div class=" bs-listing bs-listing-listing-thumbnail-1 bs-listing-single-tab">
																	<div class="listing listing-thumbnail listing-tb-1 clearfix columns-2">

@foreach($special_report  as $international_all_data)

																		<div class="post-285215 type-post format-standard has-post-thumbnail listing-item listing-item-thumbnail listing-item-tb-1 main-term-15">
																			<div class="item-inner clearfix">
																				<div class="featured featured-type-featured-image">
																					<a class="img-holder" data-bsrjs="img/125-7-210x136.jpg" href="{{$international_all_data['link']}}" style="background-image: url({{$international_all_data['image']}});" title="{{$international_all_data['text']}}"></a>
																				</div>
																				<h3 class="title"><a class="post-url post-title" href="{{$international_all_data['link']}}">{{$international_all_data['text']}}</a></h3>
																			</div>
																		</div>


                    @endforeach


																	</div>
																</div>
															</div>
														</div>
														<div class="bgblack wpb_column vc_column_container vc_col-sm-3">
															<div class="bs-vc-wrapper vc_custom_1565252627444">
																<div class="bs-shortcode bs-text bscb-36668 bs-hidden-lg bs_title_halka2">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">লাইফ স্টাইল</span></a></h3>
																	<style>
																	.bscb-36668 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-36668 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-36668.bscb-36668.bscb-36668.bscb-36668 .section-heading.sh-t6:before,.bscb-36668.bscb-36668 .section-heading.sh-t6:before,.bscb-36668 .section-heading.sh-t6 > .h-text,.bscb-36668 .section-heading.sh-t6 > .h-text:before,.bscb-36668.bscb-36668.bscb-36668.bscb-36668 .section-heading.sh-t6 > .main-link > .h-text,.bscb-36668.bscb-36668.bscb-36668.bscb-36668 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-36668.bscb-36668 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-36668.bscb-36668 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->
																<div class="vc_custom_1565252111353 bs-listing bs-listing-listing-thumbnail-1 bs-listing-single-tab">
																	<div class="listing listing-thumbnail listing-tb-1 clearfix columns-1">


@foreach($lifestyle as $key=>$best_reading_data)

                            @break($key == 8)

																		<div class="post-285133 type-post format-standard has-post-thumbnail listing-item listing-item-thumbnail listing-item-tb-1 main-term-15" style="height: 49px">
																			<div class="item-inner clearfix">
																				<h3 class="title"><a class="post-url post-title" href="{{$best_reading_data['link']}}">{{$best_reading_data['text']}}&hellip;</a></h3>
																			</div>
																		</div>


@endforeach



																	</div>
																</div>
															</div>
														</div>
													</div>








      {{--স্বাস্থ্য--}}
													<div class="row vc_row vc_inner vc_row-fluid">
														<div class="wpb_column vc_column_container vc_col-sm-12">
															<div class="bs-vc-wrapper">
																<div class="bs-shortcode bs-text bscb-47505 vc_custom_1572432420884">
																	<h3 class="section-heading sh-t6 sh-s13"><a href=""><span class="h-text">স্বাস্থ্য</span></a></h3>
																	<style>
																	.bscb-47505 .section-heading.sh-t6 .other-link:hover .h-text,.bscb-47505 .section-heading.sh-t6 .other-link.active .h-text{color:#444444}.bscb-47505.bscb-47505.bscb-47505.bscb-47505 .section-heading.sh-t6:before,.bscb-47505.bscb-47505 .section-heading.sh-t6:before,.bscb-47505 .section-heading.sh-t6 > .h-text,.bscb-47505 .section-heading.sh-t6 > .h-text:before,.bscb-47505.bscb-47505.bscb-47505.bscb-47505 .section-heading.sh-t6 > .main-link > .h-text,.bscb-47505.bscb-47505.bscb-47505.bscb-47505 .section-heading.sh-t6 > .main-link > .h-text:before,.bscb-47505.bscb-47505 .section-heading.sh-t6 > a:first-child:last-child > .h-text,.bscb-47505.bscb-47505 .section-heading.sh-t6 > a:first-child:last-child > .h-text:before{background-color:#444444}

																	</style>
																	<div class="bs-text-content"></div>
																</div><!-- .bs-text -->
															</div>
														</div>
													</div>
													<div class="row vc_row vc_inner vc_row-fluid vc_custom_1560879013986 vc_row-has-fill">
														<div class="wpb_column vc_column_container vc_col-sm-12">
															<div class="bs-vc-wrapper">
																<div class=" bs-listing bs-listing-modern-grid-listing-3 bs-listing-single-tab">
																	<div class="listing listing-modern-grid listing-modern-grid-3 clearfix slider-overlay-simple-gr columns-4">



                                                                        @foreach($health as $key=>$sports_data)
                                                                            @if($key == 8)
                                                                                @break
                                                                            @endif
																		<div class="post-285227 type-post format-standard has-post-thumbnail listing-item-1 listing-item listing-mg-item listing-mg-3-item main-term-149 bsw-300">
																			<div class="item-content">
																				<a class="img-cont" href="{{$sports_data['link']}}" style="background-image: url({{$sports_data['image']}});" title="মাত্র ৭টি কাজ করলে সারাদিন ভরপুর এনার্জি পাবেন"></a>
																				<div class="content-container">
																					<h3 class="title"><a class="post-title post-url" href="{{$sports_data['link']}}">{{$sports_data['text']}}</a></h3>
																				</div>
																			</div>
																		</div>



                                                                @endforeach





																	</div>
																</div>
																<div class="vc_empty_space" style="height: 12px">
																	<span class="vc_empty_space_inner"></span>
																</div>
															</div>
														</div>
													</div>







												</div>

												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column bs-vc-column vc_column_container vc_col-sm-12">
										<div class="bs-vc-wrapper wpb_wrapper"></div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- .content-column -->
				</div><!-- .main-section -->
			</div>
		</div>
	</main><!-- main -->
	@endsection @push('js') @endpush
</body>
</html>
