<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container my-4 py-4 bg-white shadow-lg">
        <div class="row">
            <div class="col-12">
                <h3>Edit customer</h3>
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
                <form action="{{ route('client.update', $client->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $client->name) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-2 col-form-label">Contact person</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="contact_person" name="contact_person" required value="{{ old('contact_person', $client->contact_person) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="street" class="col-sm-2 col-form-label">Street</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="street" name="street" required value="{{ old('street', $client->street) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="number" class="col-sm-2 col-form-label">Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="number" name="number" required value="{{ old('number', $client->number) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="postal_code" class="col-sm-2 col-form-label">Postal code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="postal_code" name="postal_code" required value="{{ old('postal_code', $client->postal_code) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="city" name="city" required value="{{ old('city', $client->city) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="country" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="country" name="country" required value="{{ old('country', $client->country) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone_number" class="col-sm-2 col-form-label">Phone number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone_number"  name="phone_number" required value="{{ old('phone_number', $client->phone_number) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email"  name="email" required value="{{ old('email', $client->email) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select name="status" id="status" class="form-control form-control-sm">
                                <option value=""></option>
                                <option value="1" @if(old('status', $client->status) == '1') selected @endif>Active</option>
                                <option value="2" @if(old('status', $client->status) == '2') selected @endif>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="delivery_addresses" class="col-sm-2 col-form-label">Delivery addresses</label>
                        <div class="col-sm-10">
                            @if (count($client->addresses()))
                                No addresses
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Update customer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
