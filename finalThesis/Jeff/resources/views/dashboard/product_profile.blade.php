@extends('layouts.master')

@section('title')
    @foreach($name as $n)
    Stock Card for {{$n['product_name']}}
    @endforeach
    <p>
	<a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Go back</a>
    </p>
@endsection

@section('content')
        <div class="row">
          <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Transaction Log// Needs to be updated</h5>
                <h4 class="card-title">Latest Transaction Log</h4>
              </div>
              <div class="card-body">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                    @foreach($result as $row)
                      <tr>
                        <td>
                          <div class="form-check">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        @if($row['status']=='Rendered')
                        <td class="text-left">Product <strong>{{$row['product_name']}}</strong> with a quantity of <strong style="color:red;">{{$row['tQty']}}</strong> <strong>(Remaining: {{$row['quantity'] - $row['tQty']}} )</strong> has been used.</td>
                        @elseif($row['status']=='Ongoing')
                        <td class="text-left">This transaction is still ongoing // Please put approriate message</td>
                        @elseif($row['status']=='Pending')
                        <td class="text-left">This transaction is pending // Please put approriate message</td>
                        @else
                        <td class="text-left">This transaction is pending // Please put approriate message</td>
                        @endif
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-check"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-check"></i>
                          </button>
                        </td>
                      </tr>
                      @endforeach  
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  View Transaction
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
    
@section('scripts')

@endsection