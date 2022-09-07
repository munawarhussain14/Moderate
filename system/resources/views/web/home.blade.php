@extends("web.layouts.app")

@section("scripts")
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset("assets/admin/plugins/chart.js/Chart.min.js")}}"></script>
<script>
  $(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode = 'index'
  var intersect = true

  var $visitorsChart = $('#visitors-chart')
  // eslint-disable-next-line no-unused-vars
  var visitorsChart = new Chart($visitorsChart, {
    data: {
      labels: [
        '2009-10', 
        '2010-11', 
        '2011-12', 
        '2012-13', 
        '2013-14', 
        '2014-15', 
        '2015-16',
        '2016-17',
        '2017-18',
        '2018-19',
        '2019-20',
        '2020-21',
      ],
      datasets: [{
        type: 'line',
        data: [
          563,
          589,
          655,
          678,
          786,
          713,
          850,
          2176,
          1919,
          2183,
          3248,
          5083    
      ],
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        pointBorderColor: '#007bff',
        pointBackgroundColor: '#007bff',
        fill: false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
      {
        type: 'line',
        data: [
          520,
          525,
          590,
          620,
          640,
          1351,
          799,
          2100,
          2570,
          4100,
          5200,
          3450
        ],
        backgroundColor: 'tansparent',
        borderColor: '#ced4da',
        pointBorderColor: '#ced4da',
        pointBackgroundColor: '#ced4da',
        fill: false
        // pointHoverBackgroundColor: '#ced4da',
        // pointHoverBorderColor    : '#ced4da'
      }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,
            suggestedMax: 200
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  });

  var $visitorsChart1 = $('#visitors-chart1')
  // eslint-disable-next-line no-unused-vars
  var visitorsChart1 = new Chart($visitorsChart1, {
    data: {
      labels: [
        '2015-16',
        '2016-17',
        '2017-18',
        '2018-19',
        '2019-20',
        '2020-21',
      ],
      datasets: [{
        type: 'line',
        data: [
          20.7,
          22.5,
          26.8,
          27.9,
          29.2,
          40.2   
      ],
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        pointBorderColor: '#007bff',
        pointBackgroundColor: '#007bff',
        fill: false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,
            suggestedMax: 50
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  });
    $('#announcement').modal("show");
});
</script>
@endsection

@section("body")

@include("web.layouts.modal")

<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url({{asset('assets/images/slider-main/bg1.jpg')}})">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft">Government of Khyber Pakhtunkhwa</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">welcome to KP Minerals</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="https://portal.kpminerals.gov.pk" class="slider btn btn-primary">Mining Cadastre Portal</a>
                    <a href="https://kpdgmm.gov.pk" class="slider btn btn-primary border">Mineral Auction Portal</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{asset('assets/images/slider-main/bg2.jpg')}})">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                {{-- <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2> --}}
                <h3 class="slide-title" data-animation-in="fadeIn">KP Minerals is Committed and is</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Serving for Excellance</h3>
                <p data-animation-in="slideInRight">
                    <a href="{{url('library/rules-and-policies')}}" class="slider btn btn-primary border">Rules and Policy</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{asset('assets/images/slider-main/bg3.jpg')}})">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title" data-animation-in="slideInDown">KP Minerals</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn">Exploring new Frontiers</h3>
                {{-- <p class="slider-description lead" data-animation-in="slideInRight">Towards Sustainable Mining</p> --}}
                <div data-animation-in="slideInLeft">
                    <a href="{{url("library/geological-reports")}}" class="slider btn btn-primary" aria-label="contact-with-us">Geological Report</a>
                    {{-- <a href="about.html" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn more</a> --}}
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">Find your mineral title on KP mining cadastre Map</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="https://portal.kpminerals.gov.pk/Portal/CustomHtml.aspx?PageID=81961213-ed59-460b-ae4f-985a38b8bba2">Map Portal</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
        <div class="col-lg-9">
          <h3 class="column-title">Chief Minister Khyber Pakhtunkhwa</h3>
          <p class="text-justify">Throughout the evolution of our system, facilitating our citizens has always been the core mandate of our government where needs and concerns of the citizens have been given utmost priority regardless of the socio-economic conditions that have prevailed. Supporting the same vision, we believe in facilitating our citizens by considering their valuable participation through consultation and involvement by giving weight to their suggestions.
Khyber Pakhtunkhwa is blessed with varieties of natural resources, as each district is famous for its signature minerals. With the merger of new districts, new frontiers has been opened for the investment in KP’s Mineral Sector.
The KP’s Minerals Team has been instructed to to bring in all the help needed to Investor and play a vital role in starting new ventures. I welcome you all to Khyber Pakhtunkhwa and wishes you best of luck and thank you for taking interest in KP’s Minerals sector investment.</p>
        </div><!-- Col end -->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
            <img loading="lazy" src="{{asset('assets/images/heads/mahmood-khan.jpg')}}" class="img-fluid" alt="team-img">
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">Mahmood Khan</h3>
            <p class="ts-designation">Chief Minister Khyber Pakhtunkhwa</p>
            <!-- <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p> -->
            <div class="team-social-icons">
              <a target="_blank" href="https://m.facebook.com/IMMahmoodKhan"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="https://twitter.com/immahmoodkhan"><i class="fab fa-twitter"></i></a>
              {{-- <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a> --}}
            </div>
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 3 end -->
      </div>

    </div><!-- Content row end -->

  </div><!-- Container end -->

  <div class="container">
    <div class="row">

    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
            <div class="ts-team-wrapper">
            <div class="team-img-wrapper">
                <img loading="lazy" src="{{asset('assets/images/heads/arif-ahmadzai.jpg')}}" class="img-fluid" alt="team-img">
            </div>
            <div class="ts-team-content-classic">
                <h3 class="ts-name">Arif Ahmad Zai</h3>
                <p class="ts-designation">Adviser to Chief Minister Khyber Pakhtunkhwa for Minerals Development</p>
                <!-- <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p> -->
                <div class="team-social-icons">
                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                {{-- <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a> --}}
                </div>
                <!--/ social-icons-->
            </div>
            </div>
        <!--/ Team wrapper 3 end -->
      </div>


    <div class="col-lg-9">
          <h3 class="column-title">Adviser to Chief Minister Khyber Pakhtunkhwa for Minerals Development</h3>
          <p class="text-justify">Under the visionary leadership of Prime Minister Imran Khan and the guidance of Chief Minister Mahmood Khan, In my department, a new regime has been introduced which ensures transparency and ease of doing business through effective implementation of the legal and regulatory framework. The overall goals can be expressed in terms of broad-based development, growth, poverty reduction and significant improvement in governance culture of the province and country. In the end, I would like to thank all the stakeholders, mine owners association, members of the mineral working group and academia for their constant feed backs to improve the mining sector of Khyber Pakhtunkhwa.</p>

          <p class="text-justify">This change in the system has been resulted in increase in interest of investors in mineral sector of Khyber Pakhtunkhwa. Special provisions has been made in Law to facilitate both local and international investors. In order to maintain and protect mineral sector investments, a comprehensive critical review of mining and related rules and regulations is in progress. As mining have a major impact on environment, I urge the mining sector to take advantage of the technological jump toward facilitating modern mining including much improved environmental stewardship of Khyber Pakhtunkhwa mineral resources.</p>

        </div><!-- Col end -->



    </div><!-- Content row end -->

  </div><!-- Container end -->

    <div class="container">
    <div class="row">
        <div class="col-lg-9">
          <h3 class="column-title">Secratary Minerals Development Department Khyber Pakhtunkhwa</h3>
          <p class="text-justify">Current Government is keen to ensure the provision of equitable opportunities and an enabling business environment for both local, international and foreign direct investments. At the heart of such initiatives, the Minerals Development Department (MDD) is playing a commendable role by introducing a simplification of procedures and the introduction of technology by deploying a Mining Cadastre Portal to bring investors one step closer to the mineral resources of Khyber Pakhtunkhwa. The Mining Cadastre Portal provides an e-Government platform for all stakeholders in the mineral sector to engage directly with the MDD. The aim of the Portal is to ensure international standards of transparency with an emphasis on improving the ease of doing business in Khyber Pakhtunkhwa.</p>
<p class="text-justify">Minerals Development Department is committed to introduce international best practices in field of mineral exploration and development of the mineral resources. I am hopeful that by adopting top notch technologies and enabling an investment friendly environment will enhance Investors’ confidence in the mining sector of the Khyber Pakhtunkhwa. I, reiterate that the vibrant and dynamic team of Minerals Development Department will provide best extension services to the mining aspirant at their door steps.
</p>
        </div><!-- Col end -->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
            <img loading="lazy" src="{{asset('assets/images/heads/hamayun-khan.jpeg')}}" class="img-fluid" alt="team-img">
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">Hamayun Khan</h3>
            <p class="ts-designation">Secratary Minerals Developed Department</p>
            <!-- <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p> -->
            <div class="team-social-icons">
            </div>
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 3 end -->
      </div>

    </div><!-- Content row end -->

  </div>
  <!-- Container end -->

<section class="no-padding" style="background: lightgray;">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
          <div class="subscribe-call-to-acton">
              <h3>Our Vision</h3>
              <p class="text-justify">
                Minerals Development Department has a clear vision for Khyber Pakhtunkhwa. Through rigorous reform attitude in the legal framework by updating polices & laws to international standards and improving capacity building of the departments human resources, Minerals Development Department is committed to participate in the socio-economic uplift of the province.
              </p>
          </div>
        </div><!-- Col end -->

        <div class="col-md-6">
          <div style="height:100%;" class="ts-newsletter row align-items-center">
              <div class="col-md-12 newsletter-introtext">
                <h4 class="text-white mb-0">Our Mission</h4>
                <p class="text-white text-justify">
                  Minerals Department pledges to maintain transparency and insure ease of doing business for the investors interested in mineral sector of KP. KP Minerals Department has made it is mission to bring in the mineral sector to main stream business platform while enabling KP’s people to benefit from these natural resource by partaking their fair share in the improvement of their life style and thereafter improving their province economic stature.
                </p>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<br/>

  <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="ts-intro text-center">
              <h2 class="into-title">Revenue of Minerals Department</h2>
              <h3 class="into-sub-title">Revenue Achievement of Minerals Development Department</h3>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="d-flex">
                  <p class="d-flex flex-column">
                    {{-- <span class="text-bold text-lg">820</span> --}}
                    <span>Revenue in <b>Millions</b></span>
                  {{-- </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p> --}}
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> 
                    Achieved
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Target
                  </span>
                </div>
        </div>
        <div class="col-lg-12">
          <div class="ts-intro text-center">
              <p>Minerals Development Department is struggling hard since last decade to improve revenue generation and boost economic activity. Resultant to continuous legal and institutional reform has paved way to touch the un-precedented revenue figure of 5.0 billion in the FY 2021.</p>
              <a class="btn btn-primary" href="{{url('library/rules-and-policies')}}">Policy and Rules</a>
            </div><!-- Intro box end -->
        </div><!-- Container end -->
    </div>
  </div>
</section>

<section id="facts" class="container" style="padding-top:0;">
  <div class="row">
    <div class="col-6">
      <br>
      <br>
        <div class="ts-intro text-center">
          {{-- <h2 class="into-title">Revenue of Minerals Department</h2> --}}
        <h3 class="into-sub-title text-center">Annual Growth Rate</h3>
    </div>
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col-12">
              <div class="ts-facts-content text-center">
                <h2 class="ts-facts-num" style="color:grey; font-size:50px;"><span>20.13</span>%</h2>
                <p class="ts-facts-title font-italic">For Last 12 Years</p>
              </div>
        </div>
        <div class="col-12">
              <div class="ts-facts-content text-center">
                <h2 class="ts-facts-num" style="color:grey; font-size:50px;"><span>56.50</span>%</h2>
                <p class="ts-facts-title font-italic">For Last Financial Year (2020-21)</p>
              </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                {{-- <img loading="lazy" src="{{asset('assets/images/icon-image/fact1.png')}}" alt="facts-img"> --}}
                <i class="fas fa-drafting-compass report-icon"></i>
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="15377">0</span></h2>
                <h3 class="ts-facts-title">Mineral Title Processed</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <i class="fas fa-pen-fancy report-icon"></i>
                {{-- <img loading="lazy" src="{{asset('assets/images/icon-image/fact2.png')}}" alt="facts-img"> --}}
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="2900">0</span>+</h2>
                <h3 class="ts-facts-title">Granted Mineral Titles</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <i class="fas fa-hard-hat report-icon"></i>
                {{-- <img loading="lazy" src="{{asset('assets/images/icon-image/fact3.png')}}" alt="facts-img"> --}}
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="10133">0</span>+</h2>
                <h3 class="ts-facts-title">Safety Inspection</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <i class="fas fa-user-graduate report-icon"></i>
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="8670">0</span></h2>
                <h3 class="ts-facts-title">Scholarship Awarded</h3>
              </div>
          </div><!-- Col end -->

        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->


<section class="content" style="padding-bottom:0;">
  @if(count($news)>0)
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <h3 class="column-title">News</h3>

          <div id="testimonial-slide" class="testimonial-slide">
            @foreach($news as $item)
            <div class="item">
                <div class="quote-item">
                    <a href="{{url("news/".$item->id)}}" class="quote-text">
                      {{$item->title}}
                    </a>
                    <p>{{Str::of($item->description)->limit(300)}} &nbsp;<a href="{{url("news/".$item->id)}}" class="link">Read More</a></p>

                    <div class="quote-item-footer">
                      @if($item->featured)
                      {{-- <img loading="lazy" class="testimonial-thumb" src="{{url($item->featured)}}" alt="featured"/> --}}
                      @endif
                      {{-- <div class="quote-item-info">
                        <a href="#" class="btn btn-primary">Read More</a>  
                        <h3 class="quote-author">Gabriel Denis</h3>
                          <span class="quote-subtext">Chairman, OKT</span>
                      </div> --}}
                    </div>
                </div><!-- Quote item end -->
              </div>
            @endforeach
          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  @endif
  <!--/ Container end -->

  <div class="container">
  <br><br>
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title"></h2>
          <h3 class="section-sub-title">Khyber Pakhtunkhwa Minerals Map</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-12 text-center">
          <img loading="lazy" class="img-fluid" src="{{asset('assets/images/kp-map.png')}}" alt="KP Minerals Map">
        </div><!-- Col end -->

    </div><!-- Content row end -->

  </div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="ts-intro text-center">
              {{-- <h2 class="into-title">Revenue of Minerals Department</h2> --}}
              <h3 class="into-sub-title">Annual Minerals Production</h3>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="d-flex">
                  <p class="d-flex flex-column">
                    {{-- <span class="text-bold text-lg">820</span> --}}
                    <span>Tonnage in <b>Millions</b></span>
                  {{-- </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p> --}}
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart1" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  {{-- <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> 
                    Achieved
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Target
                  </span> --}}
                </div>
        </div>
    </div>
  </div>
    @if(count($auctions)>0)
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <hr>
          <h3 class="column-title">Mineral Title Auctions</h3>

          <div id="testimonial-slide" class="testimonial-slide">
            @foreach($auctions as $item)
            <div class="item">
                <div class="quote-item">
                    <a href="{{url("auctions")}}" class="quote-text">
                      {{$item->title}}
                      <p style="font-style:italic;">Application Submission Last Date: 
                        <span class="post-meta-date">
                          <i class="far fa-calendar"></i> 
                            {!!date('d M Y', strtotime($item->last_date))!!}
                        </span> 
                        <span style="color:#ffc009; font-weight:800;">|</span>
                        Auction Date: 
                        <span class="post-meta-date">
                          <i class="far fa-calendar"></i> 
                            {!!date('d M Y', strtotime($item->auction_date))!!}
                        </span>
                      </p>
                    </a>
                    {{-- <p>{{Str::of($item->description)->limit(300)}} &nbsp;<a href="{{url("news/".$item->id)}}" class="link">Read More</a></p> --}}
                </div><!-- Quote item end -->
              </div>
            @endforeach
          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  @endif
</section><!-- Content end -->

<!--/ subscribe end -->

{{-- <section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Work of Excellence</h2>
        <h3 class="section-sub-title">Recent Projects</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
          </label>
          <label for="commercial">
            <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Commercial
          </label>
          <label for="education">
            <input type="radio" name="shuffle-filter" id="education" value="education">Education
          </label>
          <label for="government">
            <input type="radio" name="shuffle-filter" id="government" value="government">Government
          </label>
          <label for="infrastructure">
            <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">Infrastructure
          </label>
          <label for="residential">
            <input type="radio" name="shuffle-filter" id="residential" value="residential">Residential
          </label>
          <label for="healthcare">
            <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{asset('assets/images/projects/project1.jpg')}}" aria-label="project-img">
                <img class="img-fluid" src="{{asset('assets/images/projects/project1.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Capital Teltway Building</a>
                  </h3>
                  <p class="project-cat">Commercial, Interiors</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project2.jpg" aria-label="project-img">
                <img class="img-fluid" src="{{asset('assets/images/projects/project2.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Ghum Touch Hospital</a>
                  </h3>
                  <p class="project-cat">Healthcare</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg" aria-label="project-img">
                <img class="img-fluid" src="{{asset('assets/images/projects/project3.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">TNT East Facility</a>
                  </h3>
                  <p class="project-cat">Government</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project4.jpg" aria-label="project-img">
                <img class="img-fluid" src="{{asset('assets/images/projects/project4.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Narriot Headquarters</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{asset('assets/images/projects/project5.jpg')}}" aria-label="project-img">
                <img class="img-fluid" src="{{asset('assets/images/projects/project5.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Kalas Metrorail</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{asset('assets/images/projects/project6.jpg')}}" aria-label="project-img">
                <img class="img-fluid" src="{{asset('assets/images/projects/project6.jpg')}}" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Ancraft Avenue House</a>
                  </h3>
                  <p class="project-cat">Residential</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 6 end -->
        </div><!-- shuffle end -->
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.html">View All Projects</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section> --}}
<!-- Project area end -->

<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Innovation</h3>

          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Minerals Development Department is committed towards exploring and unearthing new mineral potential areas.
                      For this purpose an agrement has been signed off with <b>Geological Survey of Pakistan</b> to map Khyber Pakhtunkhwa
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{asset('assets/images/app/gsp.png')}}" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Geological Survey of Pakistan</h3>
                          {{-- <span class="quote-subtext">Chairman, OKT</span> --}}
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      In calaboration with Military Collage of Engineering Risalpur (NUST), Minerals Development Department has
                      successfully developed and deployed state of the art <b>Mining Cadastre System</b> in July, 2021.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{asset('assets/images/app/mce.png')}}" alt="MCE">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Military College of Engineering <br>Risalpur</h3>
                          <span class="quote-subtext">NUST</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      In order to facilitate Mines Labour for appling to different <b>Welfare Schemes and Grants</b>, Commissionerate of Mines
                      has developed and deployed Online Registration System that has brought a procedural ease to the labours in applying for Welfare Schemes and Grants
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{asset('assets/images/app/cmlw.png')}}" alt="CMLW">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Commissionerate of Mines <br>Labour Welfare</h3>
                          <span class="quote-subtext"><a target="_blank" href="https://cmlw.gkp.pk">Visit</a></span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->

          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title text-center">KP Mineral Auction App</h3>

          <div class="row all-clients">
              <div class="col-sm-12 col-12">
                <figure class="text-center">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('assets/images/app/logo.png')}}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->

              <div class="col-sm-6 col-6">
                <figure class="clients-logo">
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.reactjs.veevotech.eauction">
                      <i class="fab fa-google-play app-icon"></i>
                      {{-- <img loading="lazy" class="img-fluid" src="{{asset('assets/images/clients/client4.png')}}" alt="clients-logo" /> --}}
                    </a>
                    <p class="text-center">Download from Play Store</p>
                </figure>
              </div><!-- Client 4 end -->

              <div class="col-sm-6 col-6">
                <figure class="clients-logo">
                    <a target="_blank" href="https://apps.apple.com/us/app/kp-minerals-e-auction/id1589777597">
                      <i class="fab fa-app-store-ios app-icon"></i>
                      {{-- <img loading="lazy" class="img-fluid" src="{{asset('assets/images/clients/client5.png')}}" alt="clients-logo" /> --}}
                    </a>
                    <p class="text-center">Download from App Store</p>
                </figure>
              </div><!-- Client 5 end -->
          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->

{{-- <section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Work of Excellence</h2>
          <h3 class="section-sub-title">Recent Projects</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{asset('assets/images/news/news1.jpg')}}" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="news-single.html" class="d-inline-block">We Just Completes $17.6 million Medical Clinic in Mid-Missouri</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> July 20, 2017
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{asset('assets/images/news/news2.jpg')}}" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="news-single.html" class="d-inline-block">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> June 17, 2017
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 2nd post col end -->

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{asset('assets/images/news/news3.jpg')}}" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="news-single.html" class="d-inline-block">Silicon Bench and Cornike Begin Construction Solar Facilities</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> Aug 13, 2017
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 3rd post col end -->
    </div>
    <!--/ Content row end -->

    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
    </div>

  </div>
  <!--/ Container end -->
</section> --}}
<!--/ News end -->

@endsection