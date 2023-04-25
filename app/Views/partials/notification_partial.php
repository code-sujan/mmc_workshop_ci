<?php
use App\Helpers\ClientNotification;

$session = session();
$data = $session->getFlashdata();
?>
<div class="fixed-bottom">
    <div class="row d-flex justify-content-end">
        <div class="col-12 col-md-6 col-lg-3">

            <?php
            if($data){
                $isSuccess = $data[ClientNotification::Message_Type] == ClientNotification::Type_Success;
                ?>

                <?php if($isSuccess):?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> <?= $data[ClientNotification::Message_Key]?> </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong> <?= $data[ClientNotification::Message_Key]?> </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

            <?php } ?>
        </div>
    </div>
</div>


<script>
    document.addEventListener('closed.bs.alert', () => {

    })

</script>
