@extends('app')
@section('content')

<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
               
                <p class="lead fw-normal text-muted mb-0">Post Your Comment</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-8">

                    <form  method="POST" action="{{ route('comment') }}">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..."/>
                            <label for="name">Full name</label>
                        </div>
                        
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                            <label for="message">Message</label>
                        </div>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Post</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>   




@endsection
