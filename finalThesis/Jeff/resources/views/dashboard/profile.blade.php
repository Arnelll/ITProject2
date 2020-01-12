@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="../assets/css/material-min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesheet" href="../assets/css/material-kit.css">
    <link href="../assets/css/profile.css" rel="stylesheet" />
</head>

<body class="profile-page">
    <br>
    <br>
    <br>
    <br>
    <div class="main main-raised text-center">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="name">
	                            <h3 class="title">{{$result[0]['name']}}</h3>
								<h6>{{$result[0]['name']}}</h6>
	                        </div>
	                    </div>
    	            </div>
                </div>
                <div class="description text-center">
                    <br>
                    <p>Profile description suka blyat is blyat blyat </p>
                    <br>
                </div>
				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#about" role="tab" data-toggle="tab">
                                  <i class="material-icons">camera</i>
                                  About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#activities" role="tab" data-toggle="tab">
                                  <i class="material-icons">palette</i>
                                    Activities 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="tab" data-toggle="tab">
                                  <i class="material-icons">#</i>
                                    #
                                </a>
                            </li>
                          </ul>
                        </div>
    	    	    </div>
                </div>
        
          <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="about">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Label</label>
                        <input type="text" class="form-control" id="input1" aria-describedby="input1Help" placeholder="input2">
                        <small id="input1Help" class="form-text text-muted">SOmething something for input1.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Label</label>
                        <input type="text" class="form-control" id="input2"  aria-describedby="input2Help" placeholder="input2">
                        <small id="input2Help" class="form-text text-muted">SOmething something for input2.</small>
                    </div>
                </form>
  			</div>
            <div class="tab-pane text-center gallery" id="activities">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Label</label>
                        <input type="text" class="form-control" id="input1" aria-describedby="input1Help" placeholder="input2">
                        <small id="input1Help" class="form-text text-muted">SOmething something for input1.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Label</label>
                        <input type="text" class="form-control" id="input2"  aria-describedby="input2Help" placeholder="input2">
                        <small id="input2Help" class="form-text text-muted">SOmething something for input2.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Label</label>
                        <input type="text" class="form-control" id="input2"  aria-describedby="input2Help" placeholder="input2">
                        <small id="input2Help" class="form-text text-muted">SOmething something for input2.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Label</label>
                        <input type="text" class="form-control" id="input2"  aria-describedby="input2Help" placeholder="input2">
                        <small id="input2Help" class="form-text text-muted">SOmething something for input2.</small>
                    </div>
                </form>
  			</div>
            <div class="tab-pane text-center gallery" id="#">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Label</label>
                        <input type="text" class="form-control" id="input1" aria-describedby="input1Help" placeholder="input2">
                        <small id="input1Help" class="form-text text-muted">SOmething something for input1.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Label</label>
                        <input type="text" class="form-control" id="input2"  aria-describedby="input2Help" placeholder="input2">
                        <small id="input2Help" class="form-text text-muted">SOmething something for input2.</small>
                    </div>
                </form>
      		</div>
          </div>
            </div>
        </div>
	</div>
    <script src="../assets/js/material.js"></script>
    <script src="../assets/js/material.js"></script>
    <script src="../assets/js/profile.js"></script>

</body>

@endsection
    
@section('scripts')

@endsection