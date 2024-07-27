


<div id="modal-container" class="d-none position-fixed w-screen h-screen top-0 left-0 d-flex justify-content-center align-items-center" style="background-color: rgba(0,0,0,.2)">
    <form method="post" id="modal-form" class="bg-white shadow rounded" style="min-width: 300px;">
        @csrf
        <div id="modal-title" class="p-2 py-2 w-100 text-center" style="border-bottom: 1px solid var(--neutrals300)">Title</div>
        <div id="modal-body" class="p-2">Body</div>
        <div id="modal-footer" class="row p-2 px-4 d-flex justify-content-between align-items-center" style="border-top: 1px solid var(--neutrals300)">
            <button type="submit" id="modal-target" class="col-5 btn btn-primary">Konfirmasi</button>
            <a onclick="closeModal()" class="col-5 btn btn-primary gk-bg-neutrals500">Kembali</a>
        </div>
    </form>
</div>

<script >
    function closeModal() {
        const el = document.getElementById('modal-container');
        el.classList.remove('d-flex');
        el.classList.add('d-none');
    }
</script>