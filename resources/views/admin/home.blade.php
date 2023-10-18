
<!DOCTYPE html>
<html lang="en">

<head>
 
 @include('admin.css')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body>
 
  <!-- partial:partials/_navbar.html -->

@include('admin.navbar')

@include('admin.sidebar')

@include('admin.body')


  
 @include('admin.script')
 <script>
  $(document).ready(function() {
    // Function to set progress bar color based on status
    function setProgressBarColor() {
      $(".progress-cell").each(function() {
        var status = $(this).data("status");
        var progressBar = $(this).find(".progress-bar");

        if (status === "Under Review") {
          progressBar.addClass("bg-danger"); // Change to desired color class
        } else if (status === "Approved") {
          progressBar.addClass("bg-success"); // Change to desired color class
        } else if (status === "Denied") {
          progressBar.addClass("bg-info"); // Change to desired color class
        }
      });
    }

    // Call the function to set initial progress bar colors
    setProgressBarColor();
  });
</script>

</body>

</html>