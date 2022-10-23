@extends('layouts.front')
@section('title', 'SSO - Point Of Sales')
@section('insert-css')
    <style>
        * {
            box-sizing: border-box;
            font-family: "Poppins";
        }

        body{
            background: #FAFAFA;
        }

        .container {
            min-height: 100vh;
        }

        .col-auto {
            color: #293b5f;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.07) !important;
        }

        ::placeholder{
            font-weight: 300;
        }

        .btn-outline-secondary {
            color: #293b5f;
            border-color: #ced4da #ced4da #ced4da #FFF;

        }

        .btn-outline-secondary:hover {
            color: #FFF;
            border-color: #ced4da #ced4da #ced4da #FFF;
            background: #22c55e;

        }

        .btn-main {
            background: #22c55e;
            color: white
        }
    </style>
@endsection
@section('content')
@include('layouts.partials.front._loginSection')
@endsection
@section('insert-js')
<script>

    //collect data by id
    var password  = document.getElementById("exampleFormControlInput2");
    var toggler   = document.getElementById("togglePassword");

    //set event listener
    toggler.addEventListener("click", hideShowPassword);

    //hideShowPassword main
    function hideShowPassword() {

        console.log(password.type);
        
        //chech password type
        if (password.type === "password") {

            password.setAttribute("type", "text");
            toggler.classList.remove("bi-eye-slash-fill");
            toggler.classList.add("bi-eye-fill");

        } else {

            password.setAttribute("type", "password");
            toggler.classList.remove("bi-eye-fill");
            toggler.classList.add("bi-eye-slash-fill");
            
        }
    }

</script>
@endsection