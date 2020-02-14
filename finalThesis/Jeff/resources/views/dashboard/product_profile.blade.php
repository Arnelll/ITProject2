@extends('layouts.master')

@section('title')
    @foreach($name as $n)
    Stock Card for {{$n['product_name']}}
    @endforeach
@endsection

@section('content')
        <div class="row">
          <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Job Order Transaction Log</h5>
                <h4 class="card-title">Latest Job Order Transaction Log</h4>
              </div>
              <div class="card-body">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                    @foreach($service as $row)
                      <tr>
                        @if($row['status']=='Rendered')
                        <td>
                          <div class="form-check">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        <td class="text-left"><h5>Product <strong>{{$row['product_name']}}</strong> with a quantity of <strong style="color:red;">{{$row['quantity']}}</strong> has been used.</h5></td>
                        @elseif($row['status']=='Ongoing')
                        <td>
                          <div class="form-check text-left" style="color:blue;">
                              O
                          </div>
                        </td>
                        <td class="text-left"><h5>This transaction is still ongoing.</h5></td>
                        @elseif($row['status']=='Pending')
                        <td>
                          <div class="form-check text-left" style="color:black;">
                              O
                          </div>
                        </td>
                        <td class="text-left"><h5>This transaction is pending.</h5></td>
                        @elseif($row['status']=='Cancelled')
                        <td>
                          <div class="form-check text-left" style="color:red;">
                              X
                          </div>
                        </td>
                        <td class="text-left"><h5>This transaction is cancelled.</h5></td>
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
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card  card-tasks">
            <div class="card-header ">
                <h5 class="card-category">Walk-in Transaction Log</h5>
                <h4 class="card-title">Latest Walk-in Transaction Log</h4>
              </div>
              <div class="card-body">
              <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                    @forelse($sales as $row)
                      <tr>
                        <td>
                          <div class="form-check">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        <td class="text-left"><h5><strong style="color:red;">{{$row->lastname}}, {{$row->firstname}}</strong> bought <strong>{{$row['product_name']}}</strong> with a quantity of <strong>{{$row['quantity']}}</strong>.</h5></td>
                      </tr>
                      @empty
                      <tr>
                        <td>
                          <div class="form-check">
                          </div>
                        </td>
                        <td class="text-left">No walk-in(s) has been rendered to this client.</td>
                      </tr>
                    @endforelse  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-lg" title="Return to the previous page" style="background-color: #005CA5; margin-left:45%">Return</a>
        

@endsection
    
@section('scripts')

@endsection