    @if (session()->has('error'))
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container top-0 end-0 p-3">
            <!-- Then put toasts within -->
            <div class="toast shadow border-0 border-start border-5 border-danger rounded-0" role="alert" aria-live="assertive" aria-atomic="true" style="width: fit-content;">
                <div class="d-flex gap-5">
                    <div class="toast-body d-flex flex-column pe-5">
                        <h6>Failed</h6>
                        <p class="fw-light m-0">{{ session()->get('error') }}</p>
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = (event) => {
            let myAlert = document.querySelectorAll('.toast')[0];
            if (myAlert) {
                let bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();
            }
        };
    </script>        
    @endif
    <div class="container d-flex justify-content-center">
        <div class="row align-self-center">
            <div class="col-auto bg-white mx-auto py-4 px-4">
                <img class="float-start me-2 img-fluid" width="42" src="{{ asset('img/logo.png') }}" alt="">
                <div class="float-left">
                    <p class="lh-1">
                        <span class="fw-semibold fs-4 d-block">POS</span>   
                        <span class="fw-light fs-6">Point Of Sales</span>
                    </p>
                </div>
                {{-- <h1 class="fs-2 fw-bold text-center text-primary">PointOfSales</h1> --}}
                <p class="fw-light">use credentials to access your account.</p>
                <form action="{{ route('loginPost') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput2" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="********" name="password" required>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi-eye-slash-fill" id="togglePassword"></i></button>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-main">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


