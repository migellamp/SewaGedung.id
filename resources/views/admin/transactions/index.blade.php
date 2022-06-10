@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Daftar Transaksi
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Transactions">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Waktu Transaksi
                        </th>
                        <th>
                            Gedung / Lokasi
                        </th>
                        <th>
                            Penyewa
                        </th>
                        <th>
                            Harga
                        </th>
                        <th>
                            Waktu Penyewaan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                        <tr data-entry-id="{{ $transaction->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $transaction->created_at ?? '' }}
                            </td>
                            <td>
                                {{ $transaction->room ? $transaction->room->name : '' }}
                            </td>
                            <td>
                                {{ $transaction->user->name ?? '' }}
                            </td>
                            <td>
                                Rp{{ number_format($transaction->paid_amount / 100, 2) ?? '0.00' }}
                            </td>
                            <td>
                                {{ $transaction->booking_time ? $transaction->booking_time . ' Jam'  : '' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Transactions:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
