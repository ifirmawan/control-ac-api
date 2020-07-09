<div class="btn-group" role="group" aria-label="Basic example">
    <a href="<?= route_to('classsroom.edit', $classroom_id ?? '0' ) ?>" class="btn btn-outline-secondary">
        <i class="fas fa-pencil-alt"></i>
    </a>
    <a href="<?= route_to('ac.show', $classroom_id ?? '0') ?>" class="btn btn-primary">
        <i class="fas fa-eye"></i>
    </a>
</div>
