@extends("template.landing.master")

@section("content")
    <section id="contact" class="contact mt-3">
        <div class="container">

            <div class="row justify-content-md-center">
            <div class="col-lg-5">
                            </div>
            </div>
            <div class="section-title mt-3">
                <img height="150px" src="/old/simanis.jpg" />
            </div>
            <div class="row justify-content-md-center ">
                <div class="col-lg-5 mt-lg-0 ">
                    <form action="{{ route("login-process") }}" method="post"  enctype="multipart/form-data">
                        @csrf @method("POST")
                        <div class="form-group">
                            <input type="username" class="form-control" name="username" id="username" placeholder="Username" required/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required/>
                            <div class="validate"></div>
                        </div>
                        <div class="text-center"><button class="btn-sky-blue" type="submit">Login Aplikasi</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
