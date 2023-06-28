{{-- Flash Messages --}}
<script>
    $(document).ready(function(){
       @if(Session::has('success'))
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.success("{{ session('success') }}");
       {{ Session::forget('success') }}
       @endif

       @if(Session::has('error'))
           toastr.options =
           {
               "closeButton" : true,
               "progressBar" : false
           }
           toastr.error("{{ session('error') }}");
           {{ Session::forget('error') }}
       @endif

       @if(Session::has('info'))
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
           toastr.info("{{ session('info') }}");
           {{ Session::forget('info') }}
       @endif

       @if(Session::has('warning'))
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.warning("{{ session('warning') }}");
       {{ Session::forget('warning') }}
       @endif

       @if($errors->any())
       @foreach($errors->all() as $error)
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.error("{{ $error }}");
       @endforeach
       @endif

       @if(Session::has('customError'))
       @foreach(session('customError') as $customerror)

       @if(array_key_exists("error",$customerror))
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.error("{{ $customerror['error'] }}");
       @endif

       @if(array_key_exists("success",$customerror))
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.success("{{ $customerror['success'] }}");
       @endif

       @if(array_key_exists("info",$customerror))
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.info("{{ $customerror['info'] }}");
       @endif

       @if(array_key_exists("warning",$customerror))
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.warning("{{ $customerror['warning'] }}");
       @endif

       @endforeach
       {{ Session::forget('customError') }}
       @endif
    })
</script>
