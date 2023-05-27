<script src="{{ asset('/') }}backend/js/scripts.js"></script>
<script src="{{ asset('/') }}backend/js/custom.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // $(document).on('click', '#addproject', function(e) {
        //     e.preventDefault();
        //     // addproject
        //     let name = $('#name').val();
        //     let link = $('#link').val();
        //     let image = $('#image');
        //     let desc = $('#desc').val();
        //     // console.log(image);
        //     $.ajax({
        //         url: "{{ route('porject.add') }}",
        //         method: "post",
        //         data: $(this).serialize(),
        //         success: function(res){
        //             $('#add').modal('hide');
        //         }
        //     });
        // });
        $(document).on('click', '#addproject', function(e) {
                $('#add').modal('hide');
            }

        });
    });
</script>
</body>

</html>
