<!DOCTYPE html>
<html>

<head>
    <title>Fsoft Bidding Engine</title>
    @include('templates/metadata')
</head>

<body>
    @include('templates/header')
    <div id="wrap" class="container">
        <div class="page-header">
            <h1>List of Items</h1>
        </div>
        @include('templates/errors')
        <div id="data-table">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Item No.</th>
                        <th>Item Name</th>
                        <th>Item Description</th>
                        <th>Start Bid Amount</th>
                        <th>Start Bid Datetime</th>
                        <th>End Bid Datetime</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                    <tr>
                        <th scope="row">
                            {{ $item->id }}
                        </th>
                        <td><a href="/item/8" data-toggle="tooltip" data-placement="top" title="Click to view this item's details."><strong>{{ $item->name }}</strong></a></td>
                        <td>
                            {{ $item->description }}
                        </td>
                        <td><strong>&#8369; {{ $item->start_bid_amount }}</strong></td>
                        <td>
                            {{ $item->start_bid_datetime }}
                        </td>
                        <td>
                            {{ $item->end_bid_datetime }}
                        </td>
                        <td><a href="/deleteItem" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp; Delete</a></td>
                        <td><a href="/updateItemView/8" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Update</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('templates/footer')
    @include('templates/scripts')
</body>

</html>
