
<!DOCTYPE html>
<html lang="en">

<head>

 <style>
      .certificate {
            border: 2px solid #000;
            padding: 20px;
            width: 800px;
            margin: 0 auto;
            font-family: 'Georgia', sans-serif;
            font-size: 14px;
        }

        .certificate-header {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .certificate-content {
            margin-bottom: 60px;
        }

        .certificate-content p {
            margin: 10px 0;
        }

        .certificate-footer {
            text-align: right;
            font-style: italic;
        }

        .certificate-footer p {
            margin: 10px 0;
        }
   
body

 {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-wrapper .btn {
    float: right;
    color: #333;
    background-color: #fff;
    border-radius: 3px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-wrapper .btn:hover {
    color: #333;
    background: #f2f2f2;
}
.table-wrapper .btn.btn-primary {
    color: #fff;
    background: #03A9F4;
}
.table-wrapper .btn.btn-primary:hover {
    background: #03a3e7;
}
.table-title .btn {     
    font-size: 13px;
    border: none;
}
.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
.table-title {
    color: #fff;
    background: #4b5366;        
    padding: 16px 25px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.show-entries select.form-control {        
    width: 60px;
    margin: 0 5px;
}
.table-filter .filter-group {
    float: right;
    margin-left: 15px;
}
.table-filter input, .table-filter select {
    height: 34px;
    border-radius: 3px;
    border-color: #ddd;
    box-shadow: none;
}
.table-filter {
    padding: 5px 0 15px;
    border-bottom: 1px solid #e9e9e9;
    margin-bottom: 5px;
}
.table-filter .btn {
    height: 34px;
}
.table-filter label {
    font-weight: normal;
    margin-left: 10px;
}
.table-filter select, .table-filter input {
    display: inline-block;
    margin-left: 5px;
}
.table-filter input {
    width: 200px;
    display: inline-block;
}
.filter-group select.form-control {
    width: 110px;
}
.filter-icon {
    float: right;
    margin-top: 7px;
}
.filter-icon i {
    font-size: 18px;
    opacity: 0.7;
}   
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 60px;
}
table.table tr th:last-child {
    width: 80px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}   
table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
}
table.table td a:hover {
    color: #2196F3;
}
table.table td a.view {        
    width: 30px;
    height: 30px;
    color: #2196F3;
    border: 2px solid;
    border-radius: 30px;
    text-align: center;
}
table.table td a.view i {
    font-size: 22px;
    margin: 2px 0 0 1px;
}   
table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}
.status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}
.text-success {
    color: #10c469;
}
.text-info {
    color: #62c9e8;
}
.text-warning {
    color: #FFC107;
}
.text-danger {
    color: #ff5b5b;
}
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}
.pagination li a:hover {
    color: #666;
}   
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}    
</style>

 
 @include('admin.css')

</head>
<body>

  <!-- partial:partials/_navbar.html -->

@include('admin.navbar')

@include('admin.sidebar')

<div class="container" style="background-color: #f9f0ff;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Generate Certificate</div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('store_certificate') }}" enctype="multiple/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Certificate Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="date_issued">Date Issued</label>
                                <input type="date" name="date_issued" id="date_issued" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Generate Certificate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Display existing certificates -->
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Certificates List</div>
                    <div class="card-body">
                        @if(count($certificates) > 0)
                            <ul>
                                @foreach($certificates as $certificate)
                                    <li>
                                        <strong>Name:</strong> {{ $certificate->name }} <br>
                                        <strong>issue date:</strong> {{ $certificate->issue_date }} <br>
                                        <a href="{{ url('download_certificate', $certificate->id) }}" class="btn btn-success">Download</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No certificates available.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


 <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Members <b>Certificates Data</b></h2>
                    </div>
                    <div class="col-sm-8">                      
                        <a href="#" class="btn btn-primary"><i class="material-icons">&#xE863;</i> <span>Refresh List</span></a>
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>membership Category</th>
                        <th>Certificate Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#">Kelly Atieno Ahenda</a></td>
                        <td>Provisional Member</td>
                        <td>issued</td>                        
                        <td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons">&#xE5C8;</i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#">Nikita Wangui</a></td>
                        <td>Member</td>
                        <td>issued</td>                        
                        <td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons">&#xE5C8;</i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#">David Mwiti</a></td>
                        <td>Associate</td>
                        <td>Pending</td>                        
                        <td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons">&#xE5C8;</i></a></td>
                    </tr>
                   <tr>
                        <td>4</td>
                        <td><a href="#">Midumbi Nyawanga</a></td>
                        <td>Fellow</td>
                        <td>issued</td>                        
                        <td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons">&#xE5C8;</i></a></td>
                    </tr>
                   <tr>
                        <td>5</td>
                        <td><a href="#">John Owira</a></td>
                        <td>Provisional Associate</td>
                        <td>issued</td>                        
                        <td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons">&#xE5C8;</i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>        
</div>     
</body>
</div>



 @include('admin.script')

</body>

</html>


