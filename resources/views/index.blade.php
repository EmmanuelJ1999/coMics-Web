
    @extends('layouts.plantilla')

    @section('content')
        <div class="container d-flex align-item-center justify-content-center pt-4">
            <div class="row">

                <aside class="col-3">
                    <div class="card mb-4">
                        <h5 class="card-title text-center text-secondary">Lo más visto esta semana</h5>
                        <div class="card-body">
                            <a href="#">
                                <img src="{{asset('images/Comic.png')}}" class="card-img-top" alt="">
                            </a>
                            <p class="card-text text-secondary text-center">Action Comic Vol.1 #1</p>
                        </div>
                    </div>

                    <div class="card mb-4 text-center text-secondary">
                        <h5 class="card-title mx-1">¿Quieres apoyar a Logotipo?</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Donar</a>
                            <br>
                            <div class="fs-4">
                                <i class="fab fa-cc-mastercard mx-2"></i>
                                <i class="fab fa-paypal mx-2"></i>
                                <i class="fab fa-cc-visa mx-2"></i>
                            </div>
                        </div>
                    </div>
                </aside>

                <main class="col-9">

                </main>
            </div>
        </div>
    @endsection