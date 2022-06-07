<!DOCTYPE html>
<html lang="en">

<head>
    @include('user_dashboard.layouts.head')
</head>

<body>

    <div>
        @include('user_dashboard.layouts.header')

        <section class="mt7 d-flex">
            @include('user_dashboard.layouts.sidebar')
            @yield('content')
        </section>
    </div>

    @include('user_dashboard.layouts.footer')



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('UserMessage'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
        case 'info':
        toastr.info(" {{ Session::get('UserMessage') }} ");
        break;
        case 'success':
        toastr.success(" {{ Session::get('UserMessage') }} ");
        break;
        case 'warning':
        toastr.warning(" {{ Session::get('UserMessage') }} ");
        break;
        case 'error':
        toastr.error(" {{ Session::get('UserMessage') }} ");
        break;
        }
        @endif
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(document).ready(function() {
           $('.ckeditor').ckeditor();
        });

            $(function(){
                $(document).on('click','#delete',function(e){
                     e.preventDefault();
                     var link = $(this).attr("href");
                    Swal.fire({
                    title: 'Are you sure?',
                    text: "To Delete this Data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )
                    }
                    });
                });
            });
    </script>
</body>
</html>
