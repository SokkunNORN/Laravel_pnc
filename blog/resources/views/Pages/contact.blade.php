
@extends('tamplate.template')
@section('content')

    <div class="row">
        <div class="col-6">
            <span>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.013908283856!2d104.
                8808949148078!3d11.550859791798851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPasserelles+num%C3%A9riques+Cambodia+
                (PNC)!5e0!3m2!1sen!2skh!4v1549167574854" 
                width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </span>
        </div>
        <div class="col-6">
            <form class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" placeholder="Username" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <i class="material-icons prefix">mail</i>
                            <input type="email" placeholder="Email Address" class="form-control">
                        </div>
                    </div>
                    <div class="input-field col-12">
                        <div class="form-group">
                            <i class="material-icons prefix">phone</i>
                            <input type="text" placeholder="Number Phone" class="form-control">
                        </div>
                    </div>
                    <div class="input-field col-12">
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-outline-danger btn-block" title="Cancle">
                                    Cancle
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-info btn-outline-info btn-block" title="Contact">
                                    Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection