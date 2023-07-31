@foreach ($data as $item)
<div class="card mb-3" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $item->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $item->sector }}</h6>
        <p class="card-text">{{ $item->telp }}</p>
        <!-- Tautan untuk Menyalin Nomor Telepon -->
        <a id="btnCopy" data-clipboard-text="{{ $item->telp }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
            <img src="assets/img/copy.svg" alt="..." style="width: 25px; height: 25px;"/>
        </a>
        <!-- Tautan untuk Direct ke WhatsApp -->
        <a id="btnWhatsApp" href="https://wa.me/{{ $item->telp }}">
            <img src="assets/img/baseline-whatsapp.svg" alt="..." style="width: 25px; height: 25px;"/>
        </a>
    </div>
</div>
@endforeach

<!-- Tambahkan Library Clipboard.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

<script>
    // Inisialisasi Clipboard.js untuk tombol Salin Nomor
    new ClipboardJS('#btnCopy');

    // Fungsi untuk menampilkan pesan ketika nomor disalin
    document.getElementById('btnCopy').addEventListener('click', function() {
        alert('Nomor telepon berhasil disalin!');
    });

    // Fungsi untuk membuka WhatsApp ketika tombol Chat via WhatsApp diklik
    document.getElementById('btnWhatsApp').addEventListener('click', function(event) {
        event.preventDefault();
        window.open(this.href, '_blank');
    });
</script>
 

<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
  Tooltip on top
</button>