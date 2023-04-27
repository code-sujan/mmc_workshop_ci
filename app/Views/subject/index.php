<?= $this->extend('next-layout')?>

<?= $this->section('content')?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header"><span class="card-title">Subject List</span></div>
        <div class="card-body">
            <a href="/subject/new" class="btn btn-primary">New</a>
            <table class="table table-bordered table-stripped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($subjects as $item){?>
                    <tr>
                        <td><?= $item->id?></td>
                        <td><?= $item->name?></td>
                        <td><?= $item->description?></td>
                        <td>
                            <a href="/subject/edit?id=<?= $item->id?>" class="btn btn-info">Edit</a>
                            <a href="/subject/delete?id=<?= $item->id?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="fixed-bottom">
        <?php
        $session = session();
        $message = $session->getFlashdata('message');
        if($message){
            ?>
            <h1><?= $message?></h1>
        <?php
        }
        ?>
    </div>
</div>

<?= $this->endSection()?>

