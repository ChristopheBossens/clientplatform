<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container my-4 py-4 bg-white shadow-lg">
        <div class="row">
            <div class="col-12">
                <h3>Add new address</h3>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('address.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Client name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" required value="{{ $client->name }}" disabled>
                            <input type="hidden" name="client_id" value="{{ $client->id }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="description" name="description" required value="{{ old('description') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="street" class="col-sm-2 col-form-label">Street</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="street" name="street" required value="{{ old('street') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="number" class="col-sm-2 col-form-label">Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="number" name="number" required value="{{ old('number') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="postal_code" class="col-sm-2 col-form-label">postal_code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postal_code" name="postal_code" required value="{{ old('postal_code') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="city" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="city" name="city" required value="{{ old('city') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="country" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="country" name="country" required value="{{ old('country') }}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Add address</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
