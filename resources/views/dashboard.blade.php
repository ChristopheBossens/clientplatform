<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container my-4 py-4 bg-white shadow-lg">
        <div class="row">
            <div class="col-12">
                <h3>Customer overview</h3>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{ route('client.create') }}" class="btn btn-outline-success">+ Add new client</a>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-12">
                @if(count($clients) > 0)
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Contact person</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>

                    @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->contact_person }}</td>
                        <td>{{ $client->phone_number }}</td>
                        <td><a href="{{ route('client.edit', $client->id) }}" class="btn btn-sm btn-outline-success">Edit</a></td>
                    </tr>
                     @endforeach
                    </thead>
                </table>
                @endif()
            </div>
        </div>
    </div>

</x-app-layout>
