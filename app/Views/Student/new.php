<?=$this->extend('layout');?>
<?=$this->section('content');?>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <form action="/student/new" method="post">
                <div class="card">
                    <div class="card-header"><span class="card-title">Add Student</span></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Phone No</label>
                            <input type="text" class="form-control" name="phone_no">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection()?>