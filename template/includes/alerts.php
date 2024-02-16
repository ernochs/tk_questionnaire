<script>
  $(document).ready(function() {
    // Toastr initialization
    toastr.options = {
      // Add any additional options here (if needed) 
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    <?php
        // post question page
        if (!isset($_GET['message'])) {
                
        }else{
        $submitCheck=$_GET['message'];

        if ($submitCheck == "empty") {
        echo "toastr.error('All fields are required');";
        }
        elseif ($submitCheck == "error") {
        echo "toastr.error('Failed to post questions, please try again');";

        }elseif ($submitCheck == "success") {
        echo "toastr.success('Question Posted successfully');";
        }
        }
    ?>
  });
  </script>
