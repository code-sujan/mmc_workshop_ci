<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <a href="/faculty/new" class="float-end mb-2 btn btn-primary btn-sm">
        <i class="fa fa-plus-square"></i>
        <span>New</span>
    </a>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count = 0;
        foreach ($faculties as $item):
            $count++;
            ?>
            <tr>
                <td><?= $count ?></td>
                <td><?= $item['name']?></td>
                <td><?= $item['description']?></td>
                <td>
                    <a class="btn btn-info btn-sm" href="/faculty/edit?id=<?= $item['id']?>"> Edit </a>
                    <a class="btn btn-danger btn-sm" href="/faculty/delete?id=<?= $item['id']?>"> Delete </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
