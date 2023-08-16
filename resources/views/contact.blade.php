@extends('layouts/master')
@section('title','contact')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4">Contact us</p>

                <!-- Name -->
                <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

                <!-- Email -->
                <input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4"
                    placeholder="E-mail">

                <!-- Subject -->
                <label>Subject</label>
                <select class="browser-default custom-select mb-4" name="feedback">
                    <option value="" disabled>Choose option</option>
                    <option value="1" selected>Feedback</option>
                    <option value="2">Report a bug</option>
                    <option value="3">Feature request</option>
                    <option value="4">Feature request</option>
                </select>

                <!-- Message -->
                <div class="form-group">
                    <textarea name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                        placeholder="Message"></textarea>
                </div>

                <!-- Copy -->
                <div class="custom-control custom-checkbox mb-4">
                    <input type="checkbox" name='copy_msg' class="custom-control-input" id="defaultContactFormCopy">
                    <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this
                        message</label>
                </div>

                <!-- Send button -->
                <button class="btn btn-info btn-block" type="submit">Send</button>

            </form>

        </div>
    </div>
</div>


<!-- Default form contact -->

<!-- Default form contact -->

@endsection