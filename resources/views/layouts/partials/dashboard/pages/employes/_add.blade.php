<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#editEmployes">
    Add Employe
</button>
<div class="modal fade" id="editEmployes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-custom">
                <h6 class="modal-title font-weight-bold text-success" id="exampleModalLabel">Add Employes</h6>
            </div>
            <form method="POST" action="{{ route('storeEmployes') }}">
                @csrf
                <div class="modal-body
                text-left text-dark">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName" class="font-weight-bold">Full Name</label>
                            <input type="text" class="form-control" id="inputName" name="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhone" class="font-weight-bold">Phone</label>
                            <input type="text" class="form-control" id="inputPhone" name="phone" required>
                            @error('phone')
                                <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail" class="font-weight-bold">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" required>
                            @error('email')
                                <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword" class="font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password" required>
                            @error('password')
                                <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class=" form-row">
                        <div class="form-group col-md-6">
                            <label for="inputJk" class="font-weight-bold">Gender</label>
                            <select name="gender" class="form-control" id="inputJk">
                                <option value="P">Perempuan</option>
                                <option value="L">Laki - Laki</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="levelUser" class="font-weight-bold">Level</label>
                            <select name="level" class="form-control" id="levelUser">
                                <option value="Admin">Admin</option>
                                <option value="Kasir" selected>Kasir</option>
                            </select>
                        </div>
                    </div>
                    <div class=" form-row">
                        <div class=" form-group col-md-12">
                            <label for="inputAlamat" class="font-weight-bold">Address</label>
                            <textarea class="form-control" name="address" required></textarea>
                            @error('address')
                                <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-md btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-md btn-success" type="submit" name="employes-update">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
