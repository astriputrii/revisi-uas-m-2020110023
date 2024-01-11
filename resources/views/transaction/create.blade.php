@extends('layouts.master')

@section('title', 'Transaction')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Create New Transaction</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('accounts.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="id" class="form-label">Account ID:</label>
                            <input type="text" name="id" class="form-control" maxlength="16"
                                oninput="this.value = this.value.toUpperCase();" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" name="nama" class="form-control" maxlength="255"
                                oninput="this.value = this.value.toUpperCase();" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis" id="bisnis" value="BISNIS"
                                    required>
                                <label class="form-check-label" for="bisnis">BISNIS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis" id="personal"
                                    value="PERSONAL" required>
                                <label class="form-check-label" for="personal">PERSONAL</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('accounts.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
