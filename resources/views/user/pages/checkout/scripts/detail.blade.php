@push('scripts')
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "get",
                url: "{{ route('checkout.show', ':reference') }}".replace(':reference', "{{ $reference }}"),
                headers: {
                    Authorization: "Bearer " + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function (response) {
                    console.log(response);
                }
            });
        });
    </script>
@endpush