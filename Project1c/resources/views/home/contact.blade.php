@extends('layout.home')

@section('content')
<!-- Contact -->
<section class="section-wrap contact pb-40">
    <div class="container">
      <div class="row">

      <div class="col-md-8 mb-40">
        <div>
            <h2 class="mb-20"><small>Bantuan</small></h2>
            <p>Jangan malu untuk menghubungi kami! Jika anda mempunyai pertanyaan atau masalah, kami akan membantu anda!</p>
            <div class="buttoncontact">
              <div class="jarakbuttoncontact">
                  <button onclick="location.href='https://wa.me/{{$about->telepon}}'" style="background:url(/front/img/waappicon.png) no-repeat, #f1f1f1; background-size: 180px;" class="buttoncontacbackground"/>
              </div>
              <div class="jarakbuttoncontact">
                  <button onclick="location.href='sms:{{$about->telepon}}'" style="background:url(/front/img/smsappicon.png) no-repeat, #f1f1f1; background-size: 180px;" class="buttoncontacbackground"/>
              </div>
              <div class="jarakbuttoncontact">
                  <button onclick="location.href='tel:{{$about->telepon}}'" style="background:url(/front/img/phoneappicon.png) no-repeat, #f1f1f1; background-size: 180px;" class="buttoncontacbackground"/>
              </div>
              <div class="jarakbuttoncontact">
                  <button onclick="location.href='mailto:{{$about->email}}'" style="background:url(/front/img/mailappicon.png) no-repeat, #f1f1f1; background-size: 180px;" class="buttoncontacbackground"/>
              </div>
              <div class="jarakbuttoncontact">
                  <button onclick="location.href='https://maps.app.goo.gl/vmFbRe9Vz6ETkStJA';" style="background:url(/front/img/mapsiconapp.png) no-repeat, #f1f1f1; background-size: 180px;" class="buttoncontacbackground" />
              </div>
            </div>
        </div>
      </div>

        <div class="col-md-3 col-md-offset-1 col-sm-5 mb-40">
          <div class="contact-item">
              <h6>Alamat</h6>
              <address>{{$about->judul_website}}<br>
                  {{$about->alamat}}</address>
          </div> <!-- end address -->

          <div class="contact-item">
            <h6>Informasi</h6>
            <ul>
              <li>
                <i class="fa fa-envelope"></i><a href="mailto:{{$about->email}}">{{$about->email}}</a>
              </li>
              <li>
                <i class="fa fa-phone"></i><span>{{$about->telepon}}</span>
              </li>
            </ul>               
          </div> <!-- end information -->
        </div>

      </div>
    </div>
  </section> <!-- end contact -->
@endsection
