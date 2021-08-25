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
                <a href="#" class="btn btn-outline-success">+ Add new client</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table-sm">
                    <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Contact person</th>
                        <th>Phone</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
