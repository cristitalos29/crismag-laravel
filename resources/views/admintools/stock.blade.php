@include('navbar')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Stock Management') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('stock.store') }}">
                    @csrf
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name *</th>
                                <th>Manufacturer</th>
                                <th>Year</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="text" name="name" required></td>
                                <td><input type="text" name="manufacturer"></td>
                                <td><input type="number" name="year"></td>
                                <td><input type="number" name="price"></td>
                            </tr>
                            </tbody>
                        </table>
                        <button id="add-row-btn" type="button" class="btn btn-secondary">Add Row</button>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#add-row-btn').click(function() {
                                    var newRow = $('<tr>' +
                                        '<td><input type="text" name="name[]" required></td>' +
                                        '<td><input type="text" name="manufacturer[]"></td>' +
                                        '<td><input type="number" name="year[]"></td>' +
                                        '<td><input type="number" name="price[]"></td>' +
                                        '</tr>');
                                    $('table tbody').append(newRow);
                                });
                            });
                        </script>
                        <div class="mb-0">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
