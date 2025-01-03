<table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
    <thead>
        <tr>

            <th>Order ID</th>
            <th data-hide="phone">Code</th>
            <th data-hide="phone">Amount</th>
            <th data-hide="phone">Date added</th>
            <th data-hide="phone,tablet">Date modified</th>
            <th data-hide="phone">Status</th>
            <th class="text-right">Action</th>

        </tr>
    </thead>
    <tbody>
        @if(isset($payments) && is_object($payments))
        @foreach($payments as $payment)
        <tr>
            <td>
                {{$payment->orderDetail_id}}
            </td>
            <td>
                {{$payment->code}}
            </td>
            <td>
                ${{$payment->total_money}}.00
            </td>
            <td>
            {{ $payment->created_at ? $payment->created_at->format('d-m-Y H:i:s') : 'Không có ngày tạo' }}
            </td>
            <td>
            {{ $payment->updated_at ? $payment->updated_at->format('d-m-Y H:i:s') : 'Không có ngày tạo' }}
            </td>
            <td>
            @switch($payment->status)
                @case(1)
                    <span class="label label-success">Paided</span>
                    @break
                @case(2)
                    <span class="label label-danger">Cancel</span>
                    @break
                @case(3)
                    <span class="label label-warning">Expired</span>
                    @break
                @default
                    <span class="label label-primary">Pending</span>
            @endswitch

            </td>
            <td class="text-right">
                <div class="btn-group">
                    <button class="btn-white btn btn-xs">View</button>
                    <button class="btn-white btn btn-xs">Edit</button>
                    <button class="btn-white btn btn-xs">Delete</button>
                </div>
            </td>
        </tr>
        @endforeach
        @endif
        



    </tbody>
    <tfoot>
        <tr>
            <td colspan="7">
                <ul class="pagination pull-right"></ul>
            </td>
        </tr>
    </tfoot>
</table>