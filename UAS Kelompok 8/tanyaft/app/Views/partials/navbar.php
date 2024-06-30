<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light-subtle sticky-top shadow-sm">
    <div class="container-fluid">
        <img src="<?= base_url('images/logo_ulm.png') ?>" class="m-2" alt="" style="width: 40px;">
        <div class="d-flex flex-column">
            <a class="navbar-brand p-0 fw-bold" href="#" style="font-size: 15px;">Fakultas Teknik</a>
            <a class="navbar-brand p-0 text-secondary" href="#" style="font-size: 10px;">Universitas Lambung Mangkurat</a>
        </div>
        
        <div class="d-flex align-items-center mx-5" style="width: 300px;">
        <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
            <p class="m-0 text-secondary">Cari Layanan...</p>
        </div>

        <div class="d-flex align-items-center ms-auto me-4">
            <svg class="m-2" xmlns="http://www.w3.org/2000/svg"  width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16"><path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/></svg>
            <svg  class="bi bi-person-circle m-2" xmlns="http://www.w3.org/2000/svg"  width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/></svg>
            <p class="fs-6 text-center mb-0"><?= auth()->user()->username ?></p>
        </div>
    </div>
</nav>
