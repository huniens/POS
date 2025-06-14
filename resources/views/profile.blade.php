@extends('layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <!-- Bagian Foto Profil -->
            <div class="col-md-4 text-center">
                <div class="profile-picture-container mb-3">
                    <img id="profile-image" src="{{ $user->getProfilePictureUrl() }}"
                        class="img-circle elevation-2" alt="User Image"
                        style="width: 150px; height: 150px; object-fit: cover;">
                    <div class="mt-3">
                        <button class="btn btn-primary btn-sm" id="change-picture-btn">
                            <i class="fas fa-camera mr-1"></i> Ganti Gambar
                        </button>
                    </div>
                </div>

                <form id="profile-picture-form" action="{{ url('/profile/update-picture') }}"
                    method="POST" enctype="multipart/form-data" style="display: none;">
                    @csrf
                    <input type="file" name="image" id="foto_profil" accept="image/*">
                </form>
            </div>

            <!-- Bagian Informasi Akun -->
            <div class="col-md-8">
                <h4>Informasi Akun</h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 30%">Username</th>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $user->nama }}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>{{ $user->getRoleName() }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#change-picture-btn').on('click', function () {
            $('#foto_profil').click();
        });

        $('#foto_profil').on('change', function () {
            const file = this.files[0];
            if (file) {
                const formData = new FormData($('#profile-picture-form')[0]);

                $.ajax({
                    url: '{{ url("/profile/update-picture") }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.status) {
                            $('#profile-image').attr('src', response.image_url);
                            $('.user-panel .image img').attr('src', response.image_url); // Sidebar update

                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                                timer: 2000,
                                showConfirmButton: false
                            });
                        }
                    },
                    error: function (xhr) {
                        let message = 'Terjadi kesalahan saat upload gambar.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            message = xhr.responseJSON.message;
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: message
                        });
                    }
                });
            }
        });
    });
</script>
@endpush
