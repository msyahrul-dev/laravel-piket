@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4" style="margin-top: 20px;">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
              <!-- Laporan Table -->
            <div class="card-body">
            <h1 class="my-4 text-center font-weight-bold text-primary">LAPORAN PIKET</h1>
                @if ($list_laporan->isEmpty())
                    <p class="text-center text-muted">Tidak ada laporan untuk ditampilkan.</p>
                @else
                    <div class="table-responsive mt-3">
                        <table class="table table-hover table-bordered table-striped rounded shadow-sm">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th class="text-center py-3">Nama</th>
                                    <th class="text-center py-3">Hari</th>
                                    <th class="text-center py-3">Tanggal</th>
                                    <th class="text-center py-3">Before Piket</th>
                                    <th class="text-center py-3">After Piket</th>
                                    <th class="text-center py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_laporan as $laporan)
                                    <tr class="table-row">
                                        <td class="text-center">{{ $laporan->nama }}</td>
                                        <td class="text-center">{{ $laporan->hari }}</td>
                                        <td class="text-center">{{ $laporan->tanggal }}</td>
                                        <td class="text-center">
                                            @if ($laporan->before_piket)
                                                @foreach (json_decode($laporan->before_piket, true) as $path)
                                                    @php
                                                        $extension = pathinfo($path, PATHINFO_EXTENSION);
                                                    @endphp
                                                    @if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif']))
                                                        <img src="{{ asset('storage/' . $path) }}" class="img-thumbnail lightbox-trigger" alt="before_piket" style="width: 100px; cursor: pointer; border-radius: 10px; transition: transform 0.3s;">
                                                    @elseif (in_array(strtolower($extension), ['mp4', 'avi']))
                                                        <video controls class="img-thumbnail" style="width: 150px; border-radius: 10px; transition: transform 0.3s;">
                                                            <source src="{{ asset('storage/' . $path) }}" type="video/{{ $extension }}">
                                                            Browser Anda tidak mendukung video.
                                                        </video>
                                                    @else
                                                        <span class="badge badge-warning">File tidak dikenali</span>
                                                    @endif
                                                @endforeach
                                            @else
                                                <p class="text-muted">Tidak ada file</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($laporan->after_piket)
                                                @foreach (json_decode($laporan->after_piket, true) as $path)
                                                    @php
                                                        $extension = pathinfo($path, PATHINFO_EXTENSION);
                                                    @endphp
                                                    @if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif']))
                                                        <img src="{{ asset('storage/' . $path) }}" class="img-thumbnail lightbox-trigger" alt="after_piket" style="width: 100px; cursor: pointer; border-radius: 10px; transition: transform 0.3s;">
                                                    @elseif (in_array(strtolower($extension), ['mp4', 'avi']))
                                                        <video controls class="img-thumbnail" style="width: 150px; border-radius: 10px; transition: transform 0.3s;">
                                                            <source src="{{ asset('storage/' . $path) }}" type="video/{{ $extension }}">
                                                            Browser Anda tidak mendukung video.
                                                        </video>
                                                    @else
                                                        <span class="badge badge-warning">File tidak dikenali</span>
                                                    @endif
                                                @endforeach
                                            @else
                                                <p class="text-muted">Tidak ada file</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Laporan" style="border-radius: 50%; padding: 10px; transition: transform 0.2s; box-shadow: 0 3px 6px rgba(0,0,0,0.1);">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </section>
    </div>
</div>

<!-- Lightbox Modal -->
<div id="lightbox" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); z-index: 1000; align-items: center; justify-content: center;">
    <span id="close-lightbox" style="position: absolute; top: 20px; right: 30px; font-size: 30px; color: white; cursor: pointer;">&times;</span>
    <img id="lightbox-image" src="" alt="lightbox" style="max-width: 90%; max-height: 90%; object-fit: contain; transition: opacity 0.3s;">
</div>

<script>
    // Lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const closeLightbox = document.getElementById('close-lightbox');

    document.querySelectorAll('.lightbox-trigger').forEach(image => {
        image.addEventListener('click', () => {
            lightbox.style.display = 'flex';
            lightboxImage.src = image.src;
        });
    });

    closeLightbox.addEventListener('click', () => {
        lightbox.style.display = 'none';
        lightboxImage.src = '';
    });

    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
            lightboxImage.src = '';
        }
    });
</script>

@include('admin.footer')

<style>
    .table {
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    .table th, .table td {
        vertical-align: middle;
        padding: 15px;
        text-align: center;
    }
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
        transform: scale(1.02);
    }
    .table-row {
        transition: transform 0.2s ease-in-out;
    }
    .table-row:hover {
        transform: scale(1.02);
        background-color: #f8f9fa;
    }
</style>
