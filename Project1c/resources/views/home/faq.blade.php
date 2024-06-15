@extends('layout.home')

@section('title', 'FAQ')

@section('content')
<!-- FAQ -->
<section class="section-wrap faq">
    <div class="container">
      <div class="row">

        <div class="col-sm-9">
          <h2 class="mb-20"><small>pertanyaan pengiriman</small></h2>

          <div class="panel-group accordion mb-50" id="accordion-1">
            <div class="panel">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1" class="minus">bagaimana cara melacak pengirimanku?<span>&nbsp;</span>
                </a>
              </div>
              <div id="collapse-1" class="panel-collapse collapse in">
                <div class="panel-body">
                  Sebelum melakukan pengiriman, kami akan menginformasikan terlebih dahulu melalui whatsapp bahwa pesanan anda akan dikirimkan.
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2" class="plus">Berapa lama waktu yang dibutuhkan untuk pengiriman?<span>&nbsp;</span>
                </a>
              </div>
              <div id="collapse-2" class="panel-collapse collapse">
                <div class="panel-body">
                  Untuk proses pengiriman biasanya membutuhkan waktu paling lama 12 jam (tergantung kondisi cuaca dan jalanan).
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3" class="plus">Bisakah saya mengatur jadwal ulang pengiriman?<span>&nbsp;</span>
                </a>
              </div>
              <div id="collapse-3" class="panel-collapse collapse">
                <div class="panel-body">
                  Kamu dapat mengatur tanggal pengiriman sesuai yang kamu inginkan, untuk mengubahnya, kamu dapat menhubungi kami di 08xxxxxxxxx. Atau jika kamu belum memesan, kamu bisa menuliskannya di kolom keterangan.
                </div>
              </div>
            </div>
          </div> <!-- end accordion -->


          <h2 class="mb-20 mt-80"><small>Pertanyaan Pembayaran</small></h2>

          <div class="panel-group accordion mb-50" id="accordion-2">
            <div class="panel">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-4" class="minus">Pembayaran apa yang di terima?<span>&nbsp;</span>
                </a>
              </div>
              <div id="collapse-4" class="panel-collapse collapse in">
                <div class="panel-body">
                  Untuk pembayaran kami hanya menerima transfer bank dan QRIS.
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-5" class="plus">bagaimana cara saya membayar?<span>&nbsp;</span>
                </a>
              </div>
              <div id="collapse-5" class="panel-collapse collapse">
                <div class="panel-body">
                  Saat melakukan pembelian, anda akan di alihkan ke halaman pembayaran, anda dapat menggunakan metode transfer bank atau QRIS! Perlu di ingat setelah selesai melakukan pembayaran, silahkan screenshoot bukti transfer lalu mengirimkannya ke form upload!
                </div>
              </div>
            </div>

            <div class="panel">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-6" class="plus">Saya tidak dapat transfer bank atau QRIS, apa yang harus saya lakukan?<span>&nbsp;</span>
                </a>
              </div>
              <div id="collapse-6" class="panel-collapse collapse">
                <div class="panel-body">
                  Kamu bisa datang ke toko kami untuk melakukan pembayaran, setelah membayar silahkan upload struk pembayaran di website kami!|
                </div>
              </div>
            </div>

          </div> <!-- end accordion -->

        </div> <!-- end col -->

        <aside class="sidebar col-sm-3">
          <div class="contact-item">
            <h6>Kategori</h6>
            <ul class="list-dividers">
              <li>
                <a href="#">Delivery</a>
              </li>
              <li>
                <a href="#">Payment</a>
              </li>
              <li>
                <a href="#">Support</a>
              </li>
              <li>
                <a href="#">Common questions</a>
              </li>
            </ul>
          </div>

          <div class="contact-item">
            <h6>Information</h6>
            <ul>
              <li>
                <i class="fa fa-envelope"></i><a href="mailto:theme@support.com">gabrielbjb@support.com</a>
              </li>
              <li>
                <i class="fa fa-phone"></i><span>+62852xxxxxxxxxx</span>
              </li>
            </ul>
          </div>

        </aside> <!-- end col -->

      </div>
    </div>
  </section> <!-- end faq -->

@endsection
