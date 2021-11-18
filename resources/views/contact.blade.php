@extends('layouts/layout')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
            <h1 style="text-align: center">Get in Touch</h1>
            <p class="text-black-50" style="text-align: center">We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services that we offer on a regular basis. We would be pleased to answer your questions.</p>
            <div class="container-fluid">
            <form action="#" method="post" name="contact_us">
                <div class="row">
                    <div class="col">
                        <label class="text-black-50" for="contact_name">FIRST NAME</label><br>
                        <input type="text" class="button contact_us" name="email" placeholder="Enter your name">
                    </div>
                    <div class="col">
                        <label class="text-black-50" for="contact_phone">PHONE</label><br>
                        <input type="text" class="button contact_us" name="email" placeholder="Enter phone">
                    </div>
                </div>
                <br>
                <label class="text-black-50" for="contact_message">YOUR MESSAGE</label><br>
                <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Write your message" style="" ></textarea>
                <br>
                <div class="input">
                    <label class="text-black-50" for="contact_email">E-MAIL</label><br>
                    <input type="text" class="button" id="contact_email" name="contact_email" placeholder="enter your email">
                    <input type="submit" class="button text-white" id="submit" value="send_message">
                </div>
            </form>
        </div>
        </div>
        <div class="col-lg-3 col-md-8 col-sm-12 mt-4" style="background-color: rgb(243, 243, 243)">
            <div class="container mt-3">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-5 col-6 contact_position">
                        <h5>FOLLOW US</h5>
                        <hr style="height:2px; width:30%; border-width:0; color:#F16121; background-color:#F16121">
                        <ul class="contact_icon" id="si">
                            <li><a href="" class="contact_icon"> <i class="fa fa-facebook contact_icons" ></i></a></li>
                            <li><a href="" class="contact_icon"> <i class="fa fa-twitter contact_icons"></i></a></li>
                            <li><a href="" class="contact_icon"> <i class="fa fa-instagram contact_icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-5 col-6 contact_position">
                        <h5>PHONE</h5>
                        <hr style="height:2px; width:30%; border-width:0; color:#F16121; background-color:#F16121">
                        <div class="row">
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                        </div>
                        <div class="col">
                            <p style="margin-top: -0.3rem">@foreach ($siteinfos as $siteinfo)
                                {{$siteinfo->contact_info}}
                            @endforeach</p>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-5 col-6 contact_position">
                        <h5>ADDRESS</h5>
                        <hr style="height:2px; width:30%; border-width:0; color:#F16121; background-color:#F16121">
                        <div class="row">
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-geo-alt-fill " viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                  </svg>
                            </div>
                            <div class="col">
                                <p style="margin-top: -0.3rem">@foreach ($siteinfos as $siteinfo)
                                    {{$siteinfo->address}}
                                @endforeach</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-5 col-6 contact_position" >
                        <h5>OPENING HOURS</h5>
                        <hr style="height:2px; width:30%; border-width:0; color:#F16121; background-color:#F16121">
                        <div class="row">
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                  </svg>
                            </div>
                            <div class="col" style="margin-top: -0.3rem">
                                <p>9:00am-23:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection