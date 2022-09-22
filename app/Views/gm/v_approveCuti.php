<?= $this->extend('/layouts/template_GM'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-3 card-custom">
      <div class="card-body-custom mb-0">
        <div class="row">
          <div class="col-2">
            <img src="/argon/assets/img/team-2.jpg" class="rounded-circle avatar avatar-sm me-3">
          </div>
          <div class="col-6 mt-1">
            <div class="row">
              <p class="card-title text-xs mb-0">Laudia</p>
              <p class="text-xs">Creative Designer</p>
            </div>
          </div>
          <div class="col-4 mt-2">
            <p class="text-xxs">20 Jul 2022</p>
          </div>
        </div>
        <div class="box-keterangan mb-4">
          <div class="box-keterangan-header">
            Cuti Tahunan
          </div>
          <div class="box-keterangan-body">
            <textarea class="no-resize no-border" rows="7" name="" id="">keterangan</textarea>
          </div>
        </div>
        <div class="col align-self-center mb-0">
          <a href="#" class="btn btn-light">Setujui</a>
          <a href="#" class="btn btn-outline-light">Tolak</a>
        </div>
      </div>
    </div>
    <div class="col-3 card-custom">
      <div class="card-body-custom mb-0">
        <div class="row">
          <div class="col-2">
            <img src="/argon/assets/img/team-2.jpg" class="rounded-circle avatar avatar-sm me-3">
          </div>
          <div class="col-6 mt-1">
            <div class="row">
              <p class="card-title text-xs mb-0">Laudia</p>
              <p class="text-xs">Creative Designer</p>
            </div>
          </div>
          <div class="col-4 mt-2">
            <p class="text-xxs">20 Jul 2022</p>
          </div>
        </div>
        <div class="box-keterangan mb-4">
          <div class="box-keterangan-header">
            Cuti Tahunan
          </div>
          <div class="box-keterangan-body">
            <textarea class="no-resize no-border" rows="7" name="" id="">keterangan</textarea>
          </div>
        </div>
        <div class="col align-self-center mb-0">
          <a href="#" class="btn btn-light">Setujui</a>
          <a href="#" class="btn btn-outline-light">Tolak</a>
        </div>
      </div>
    </div>
    <div class="col-3 card-custom">
      <div class="card-body-custom mb-0">
        <div class="row">
          <div class="col-2">
            <img src="/argon/assets/img/team-2.jpg" class="rounded-circle avatar avatar-sm me-3">
          </div>
          <div class="col-6 mt-1">
            <div class="row">
              <p class="card-title text-xs mb-0">Laudia</p>
              <p class="text-xs">Creative Designer</p>
            </div>
          </div>
          <div class="col-4 mt-2">
            <p class="text-xxs">20 Jul 2022</p>
          </div>
        </div>
        <div class="box-keterangan mb-4">
          <div class="box-keterangan-header">
            Cuti Tahunan
          </div>
          <div class="box-keterangan-body">
            <textarea class="no-resize no-border" rows="7" name="" id="">keterangan</textarea>
          </div>
        </div>
        <div class="col align-self-center mb-0">
          <a href="#" class="btn btn-light">Setujui</a>
          <a href="#" class="btn btn-outline-light">Tolak</a>
        </div>
      </div>
    </div>
    <div class="col-3 card-custom">
      <div class="card-body-custom mb-0">
        <div class="row">
          <div class="col-2">
            <img src="/argon/assets/img/team-2.jpg" class="rounded-circle avatar avatar-sm me-3">
          </div>
          <div class="col-6 mt-1">
            <div class="row">
              <p class="card-title text-xs mb-0">Laudia</p>
              <p class="text-xs">Creative Designer</p>
            </div>
          </div>
          <div class="col-4 mt-2">
            <p class="text-xxs">20 Jul 2022</p>
          </div>
        </div>
        <div class="box-keterangan mb-4">
          <div class="box-keterangan-header">
            Cuti Tahunan
          </div>
          <div class="box-keterangan-body">
            <textarea class="no-resize no-border" rows="7" name="" id="">keterangan</textarea>
          </div>
        </div>
        <div class="col align-self-center mb-0">
          <input class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" name="status_cuti" id="status_cuti" value="Disetujui" aria-label="Setujui">Setujui
          <a href="#" class="btn btn-outline-light">Tolak</a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>