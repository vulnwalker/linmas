@extends('layouts.backend')
@section('title')
  Panduan Pengunaan Aplikasi Aplulkat KITE
@endsection

@section('judul')
  Panduan Pengunaan Aplikasi Aplulkat KITE
@endsection
@section('content')
<style type="text/css">
  .modal-content {
    height: auto;
    min-height: 30%;
    border-radius: 0;
    width: 100%;
    margin: 2%;
    text-align: left;
}
.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 0%;
    border-top: 1px solid #e9ecef;
    padding-right: 1%;
}

.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
    padding-bottom: 0%;
}
</style>
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <div id="loadingData">

 </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header" style="margin-top: -1%;">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="card-title">Panduan Pengunaan Aplikasi Aplulkat KITE</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-2" >
                            <a href="" class="btn btn-primary btn-sm" style="float: right;"> <i class="fal fa-download"></i> Download Panduan</a>
                        </div>
                    </div>
                    <hr style="margin-top: 0%;margin-bottom: 0%;">
                    </div>
                    <div class="card-body" style="padding: 15px 15px 10px !important;">

                    	            <div class="card">
              <div class="card-header">
                <h5>Vertical Tabs</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-sm-4 col-6">
                    <div class="nav-tabs-navigation verical-navs">
                      <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs flex-column nav-stacked" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" href="#info" role="tab" data-toggle="tab">Info</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#description" role="tab" data-toggle="tab">Description</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#concept" role="tab" data-toggle="tab">Concept</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#support" role="tab" data-toggle="tab">Support</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#extra" role="tab" data-toggle="tab">Extra</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-7 col-sm-8 col-6">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="info">
                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
                        <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                      </div>
                      <div class="tab-pane" id="description">
                        <p>The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design. </p>
                        <p>There are no distinct edges. No gaps. Just a smooth, seamless bond of metal and glass that feels like one continuous surface.</p>
                      </div>
                      <div class="tab-pane" id="concept">
                        <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. </p>
                      </div>
                      <div class="tab-pane" id="support">
                        <p>From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.</p>
                        <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                      </div>
                      <div class="tab-pane" id="extra">
                        <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


   	 	   </div>
   	 	  </div>
   	 	 </div>
   		</div>
       </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
@endsection
