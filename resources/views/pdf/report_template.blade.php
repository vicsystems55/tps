
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Laralink">
  <!-- Site Title -->
  <title></title>
  <link rel="stylesheet" href="{{url('assets_invoice')}}/assets/css/style.css">
</head>

<body>
  <div class="tm_container">
    <div class="tm_invoice_wrap">

      <a href="">Go back</a>
      <div class="tm_invoice tm_style1" id="tm_download_section">
        <div class="tm_invoice_in">
          <div class="tm_invoice_head tm_align_center tm_mb20">
            <div class="tm_invoice_left">
              <div class="tm_logo"><img src="assets/img/logo.svg" alt="Logo"></div>
            </div>
            <div class="tm_invoice_right tm_text_right">
              <div class="tm_primary_color tm_f50 tm_text_uppercase">Progress Report</div>
            </div>
          </div>
          <div class="tm_invoice_info tm_mb25">
            <div class="tm_invoice_seperator tm_gray_bg"></div>
            <div class="tm_invoice_info_list">
          
              <p class="tm_invoice_date tm_m0">Date: <b class="tm_primary_color">01.07.2022</b></p>
            </div>
          </div>
          <div class="tm_invoice_head tm_mb10">
            <div class="tm_invoice_left">
              <p class="tm_mb2"><b class="tm_primary_color">Site Details:</b></p>
              <p>
                {{$site->location}} <br>
                {{$site->lga->name}} <br>
                {{$site->lot->state->name}} <br>
                {{$site->lot->code}}
              </p>
            </div>
            <div class="tm_invoice_right tm_text_right">
              <p class="tm_mb2 tm_f16"><b class="tm_primary_color">Source Water</b></p>
              <p>
                86-90 Paul Street, London<br>
                England EC2A 4NE <br>
                tps@sourcewater.com <br>
              
              </p>
            </div>
          </div>
          <h2 class="tm_f16 tm_section_heading tm_border_color tm_mb15"><span class="tm_gray_bg">Site Profile</span></h2>
          <div class="tm_grid_row tm_col_3 tm_mb30">
            @foreach ($site_profile as $profile)
            <div>
              <span>{{$profile->question}}</span><br>
              <b style="color: green;" class="tm_primary_color tm_medium">Done</b>
            </div>
                
            @endforeach
          
          </div>
          <h2 class="tm_f16 tm_section_heading tm_border_color tm_mb15"><span class="tm_gray_bg">Critical Stage 1</span></h2>
          <div class="tm_grid_row tm_col_3 tm_mb30">
            @foreach ($critical_stage_questions->where('critical_stage', 1) as $critical)
            <div>
              <span>{{$critical->question}}</span><br>
              <b class="tm_primary_color tm_medium">OK</b>
            </div>
                
            @endforeach
          
          </div>
          
       
          <h2 class="tm_f16 tm_section_heading tm_border_color tm_mb15  "><span class="tm_gray_bg">Media</span></h2>
          <div class="tm_grid_row tm_col_3 tm_mb30">
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            
          </div>
          <h2 class="tm_f16 tm_section_heading tm_border_color tm_mb15"><span class="tm_gray_bg">Paid Out From</span></h2>
          <div class="tm_grid_row tm_col_3 tm_mb30">
            <div>
              <span>Bank Name & Branch: </span><br>
              <b class="tm_primary_color tm_medium">Canadian Bank</b>
            </div>
            <div>
              <span>Delivered By: </span><br>
              <b class="tm_primary_color tm_medium">Cash</b>
            </div>
            <div>
              <span>Reference: </span><br>
              <b class="tm_primary_color tm_medium">SM2455452114545</b>
            </div>
          </div>
          <div class="tm_padd_15_20 tm_round_border">
            <p class="tm_mb0"><b class="tm_primary_color">Terms & Conditions</b></p>
            <p class="tm_m0">Invoice was created on a computer and is valid without the signature and seal. If you have any problem then come to our office and our support team will help you.</p>
          </div><!-- .tm_note -->
        </div>
      </div>
      <div class="tm_invoice_btns tm_hide_print">
        <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="392" cy="184" r="24" fill='currentColor'/></svg>
          </span>
          <span class="tm_btn_text">Print</span>
        </a>
        <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
          </span>
          <span class="tm_btn_text">Download</span>
        </button>
      </div>
    </div>
  </div>

  <div class="tm_container">
    <div class="tm_invoice_wrap">

     
      <div class="tm_invoice tm_style1" id="tm_download_section">
        <div class="tm_invoice_in">
          
         
         
          <h2 class="tm_f16 tm_section_heading tm_border_color tm_mb15"><span class="tm_gray_bg">Site Profile</span></h2>
          <div class="tm_grid_row tm_col_3 tm_mb30">
            @foreach ($site_profile as $profile)
            <div>
              <span>{{$profile->question}}</span><br>
              <b style="color: green;" class="tm_primary_color tm_medium">Done</b>
            </div>
                
            @endforeach
          
          </div>
          <h2 class="tm_f16 tm_section_heading tm_border_color tm_mb15"><span class="tm_gray_bg">Critical Stage 1</span></h2>
          <div class="tm_grid_row tm_col_3 tm_mb30">
            @foreach ($critical_stage_questions->where('critical_stage', 1) as $critical)
            <div>
              <span>{{$critical->question}}</span><br>
              <b class="tm_primary_color tm_medium">OK</b>
            </div>
                
            @endforeach
          
          </div>
          
       
          <h2  class="tm_f16 tm_section_heading tm_border_color tm_mb15  "><span class="tm_gray_bg">Media</span></h2>
          <div class="tm_grid_row tm_col_3 tm_mb30">
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            <div>
              <img style="height: 120px;" class="shadow" src="{{url('/assetsx')}}/img/map@2x.png" alt="">
            </div>
            
          </div>
          <h2 class="tm_f16 tm_section_heading tm_border_color tm_mb15"><span class="tm_gray_bg">Paid Out From</span></h2>
          <div class="tm_grid_row tm_col_3 tm_mb30">
            <div>
              <span>Bank Name & Branch: </span><br>
              <b class="tm_primary_color tm_medium">Canadian Bank</b>
            </div>
            <div>
              <span>Delivered By: </span><br>
              <b class="tm_primary_color tm_medium">Cash</b>
            </div>
            <div>
              <span>Reference: </span><br>
              <b class="tm_primary_color tm_medium">SM2455452114545</b>
            </div>
          </div>
          <div class="tm_padd_15_20 tm_round_border">
            <p class="tm_mb0"><b class="tm_primary_color">Terms & Conditions</b></p>
            <p class="tm_m0">Invoice was created on a computer and is valid without the signature and seal. If you have any problem then come to our office and our support team will help you.</p>
          </div><!-- .tm_note -->
        </div>
      </div>
      
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jspdf.min.js"></script>
  <script src="assets/js/html2canvas.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>