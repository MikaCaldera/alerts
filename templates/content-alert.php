<div class="alert-wrapper">
    <div class="alert alert-<?=$context->type;?> alert-dismissible fade show" role="alert">
        <div class="alert-inner">
            <?=$context->content; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
</div>