<?=$this->extend('dasar_tampilan')?>

<?=$this->section('isiweb')?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">beranda</h3>
            </div>
            <div class="card-body">
                Hallo ini beranda<br/>
                Email yang diisikan : <?=$email?> <br/>
                Password : <?=$sandi?>
            </div>
        </div>
    </div>

<?=$this->endsection()?>