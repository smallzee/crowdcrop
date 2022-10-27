@if(session('flash_error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>{!! session('flash_error') !!} </div>
@endif

@if(session('flash_info'))
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>{!! session('flash_info') !!}</div>
@endif

@if(session('flash_warning'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>{!! session('flash_warning') !!}</div>
@endif

@if(session('flash_success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>{!! session('flash_success') !!}</div>
@endif

@if (session('alert_success'))
    <script>
        $(document).ready(function () {
            iziToast.success({
                title: 'Success',
                message: "{{ session('alert_success') }}",
                position: 'topRight',
            });
        });
    </script>
@endif

@if (session('alert_info'))
    <script>
        $(document).ready(function () {
            iziToast.info({
                title: 'Success',
                message: "{{ session('alert_info') }}",
                position: 'topRight',
            });
        });
    </script>
@endif

@if (session('alert_error'))
    <script>
        $(document).ready(function () {
            iziToast.error({
                title: 'Error',
                message: "{{ session('alert_error') }}",
                position: 'topRight',
            });
        });
    </script>
@endif

@if (session('sweet_alert_error'))
    <script>
        swal({
            title: "Error",
            text: "{{ session('sweet_alert_error') }}",
            icon: "error",
        });
    </script>
@endif

@if (session('sweet_alert_success'))
    <script>
        swal({
            title: "Success",
            text: "{{ session('sweet_alert_success') }}",
            icon: "success",
        });
    </script>
@endif

