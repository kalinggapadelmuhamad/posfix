<button class="btn btn-sm btn-info mb-1" data-toggle="modal" data-target="#editEmployes{{ $item->uuid }}">
    <i class="fas fa-pen"></i>
</button>
<div class="modal fade" id="editEmployes{{ $item->uuid }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-custom">
                <h6 class="modal-title font-weight-bold text-success" id="exampleModalLabel">Edit Employes</h6>
            </div>
            <form method="POST" action="{{ route('updateEmployes') }}">
                @csrf
                <div class="modal-body
                text-left">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName" class="font-weight-bold">Full Name</label>
                            <input type="hidden" value="{{ $item->uuid }}" name="uuid">
                            <input type="text" class="form-control" id="inputName" name="name" required
                                value="{{ $item->name }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhone" class="font-weight-bold">Phone</label>
                            <input type="text" class="form-control" id="inputPhone" name="phone" required
                                value="{{ $item->phone }}">
                            @error('phone')
                                <div class="text-danger fs-small fw-light my-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class=" form-row">
                        <div class="form-group col-md-6">
                            <label for="inputJk" class="font-weight-bold">Gender</label>
                            <select name="gender" class="form-control" id="inputJk">
                                @if ($item->gender == 'P')
                                    <option value="P" selected>Perempuan</option>
                                    <option value="L">Laki - Laki</option>
                                @else
                                    <option value="P">Perempuan</option>
                                    <option value="L" selected>Laki - Laki</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="levelUser" class="font-weight-bold">Level</label>
                            <select name="level" class="form-control" id="levelUser">
                                @if ($item->level == 'Admin')
                                    <option value="Admin" selected>Admin</option>
                                    <option value="Kasir">Kasir</option>
                                @else
                                    <option value="Admin">Admin</option>
                                    <option value="Kasir" selected>Kasir</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class=" form-row">
                        <div class=" form-group col-md-12">
                            <label for="inputAlamat" class="font-weight-bold">Address</label>
                            <textarea class="form-control" name="address" required>{{ $item->address }}
                            </textarea>
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
