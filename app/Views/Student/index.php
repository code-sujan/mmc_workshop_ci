<?=$this->extend('layout');?>
<?=$this->section('content');?>
<div class="container-fluid">
    <div>
        <a href="/student/new"><button class="btn btn-primary float-end">New </button></a>
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone No</th>
        </tr>
        <?php
        foreach($data as $item){
            ?>
            <tr>
                <td><?= $item->name?></td>
                <td><?= $item->address?></td>
                <td><?= $item->email?></td>
                <td><?= $item->phone_no?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

<?= $this->endSection();?>

<?= $this->section('script')?>
<script>

</script>
<?= $this->endSection()?>
