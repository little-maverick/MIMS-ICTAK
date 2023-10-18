
<!DOCTYPE html>
<html lang="en">

<head>

    <style type="text/css">
        label{ display: inline-table; width: 200px }
    </style>
 
 @include('admin.css')

</head>
<body>

  <!-- partial:partials/_navbar.html -->

@include('admin.navbar')

@include('admin.sidebar')


<div class="container-scroller" style="background-color: #CCE5FF;">


    <div class="container" align="center" style="padding-top: 60px;">

        @if(session()->has('message'))

            <div class="alert alert-success alert-dismissible fade show">

                
            
                {{session()->get('message')}}

                <button type="button" class="close" data-dismiss="alert"> 
                  <span> x </span>
                </button>
                
            </div>
            
        @endif
        <h2 style="font-weight: bold; text-decoration: !important; font-size: 24px;">MEMBERS</h2> 

        <form action="{{url('upload_members')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <table>
                <tr>
                    <td><label>Full Name</label></td>
                    <td><input type="text" style="color: blue;" name="name" placeholder="Full Name" required=""></td>
                </tr>
                <tr>
                    <td><label>Phone Number</label></td>
                    <td><input type="number" style="color: blue;" name="number" placeholder="Write the number" required=""></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><input type="text" style="color: blue;" name="email" placeholder="janedoe@example.com" required=""></td>
                </tr>
                <tr>
                    <td><label for="membership_categories">Membership Categories</label></td>
                    <td>
                        <select name="membership_categories" id="membership_categories" style="color: black;" required="">
                            <option value="associate">Associate</option>
                            <option value="provisional_associate">Provisional Associate</option>
                            <option value="senior_member">Senior Member</option>
                            <option value="member">Member</option>
                            <option value="provisional_member">Provisional Member</option>
                            <option value="fellow">Fellow</option>
                        </select>
                    </td>
                </tr>
            
            </table>
            
            <div style="padding: 15px">
                <input type="submit" class="btn btn-success">
            </div>
        </form>

    </div> 
</div>



 @include('admin.script')

</body>

</html>


