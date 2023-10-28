@extends("template.landing.master")

@section("content")
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>KEBUN LAWANG</h1>
                    <h2>
                        Integrated Accounting System
                        <br>
                        <a style="width: 150px;" href="{{ route("login") }}" class="btn btn-primary mt-3">Masuk Aplikasi</a>
                        <!-- <a style="width: 150px;" href="/old/app-android/kcp-app.apk" class="btn btn-primary ml-3 mt-3">Download App</a> -->
                    </h2>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <img src="/old/bg-icon.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
