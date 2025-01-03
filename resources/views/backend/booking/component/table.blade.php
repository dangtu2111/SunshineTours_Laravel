<table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
    <thead>
        <tr>
            <th data-toggle="true">Tour Info</th>
            <th data-hide="phone">Tour Name</th>
            <th data-hide="all">Description: </th>
            <th data-hide="phone">Price</th>
            <th data-hide="phone,tablet">Booking Date</th>
            <th data-hide="phone,tablet">Number of Guests</th>
            <th data-hide="phone">Order Status</th>
            <th class="text-right" data-sort-ignore="true">Action</th>
        </tr>
    </thead>
    <tbody>
    @if(isset($orders) && is_object($orders))
        @foreach($orders as $order)
            <tr>
                <td>
                    <a href="project_detail.html" class="pl-1">
                        Fullname: {{$order->fullname}} <br> 
                        Email: {{$order->email}}
                    </a>
                    <br>
                    <small>Create at: {{$order->created_at->format('d.m.Y')}}</small>
                </td>
                <td>
                    @if($order->orderDetail->isNotEmpty()) 
                        {{$order->orderDetail->first()->tour->title}} <!-- Assuming 'name' is a column in 'tours' table -->
                    @else
                        N/A
                    @endif
                </td>
                <td>
                    <p>
                        {{$order->note}}
                    </p>
                </td>
                <td>
                    ${{$order->total_money}}
                </td>
                <td>
                    {{$order->orderDetail->first()->date_booking}}
                </td>
                <td>
                    @if($order->orderDetail->isNotEmpty()) 
                        Children: {{$order->orderDetail->first()->guest_08}}<br>
                        Young: {{$order->orderDetail->first()->guest_812}}<br>
                        Adult: {{$order->orderDetail->first()->guest_12}}
                    @else
                        N/A
                    @endif
                </td>
                <td>
            
                    @if($order->status == 2)  
                        <span class="label label-primary">Enabled</span>
                    @elseif($order->status == 1)  
                        <span class="label label-warning">Expired</span>
                    @else
                        <span class="label label-default">Unknown</span>
                    @endif
                </td>
                <td class="text-right">
                    <div class="btn-group">
                        <button class="btn-white btn btn-xs">View</button>
                        <button class="btn-white btn btn-xs">Edit</button>
                    </div>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="8">
                <ul class="pagination pull-right">
                    {{$orders->links('pagination::bootstrap-4')}}
                </ul>
            </td>
        </tr>
    </tfoot>
</table>
