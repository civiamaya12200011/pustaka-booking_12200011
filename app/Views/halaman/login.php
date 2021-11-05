<?=$this->extend('dasar_tampilan');?>
<?=$this->section('isiweb')?>
<?php

use config\services;
$vl = $vl ?? services::validation();
?>

<form method="post" action="<?=base_url('/login')?>">
    <div class="container col-md-3">
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="card-title">login</h3>
            </div>

            <div class="card-body">
                <?php if($error){ ?>
                <div class="alert alert-danger">
                    <?=$error?>
                </div>
                <?php } ?>

                <div class="form-floating">
                    <input id="txtEmail" class="form-control"
                            placeholder="Email"
                            value="<?=$email ?? ''?>"
                            type="text" name="email" />
                    <label for="txtEmail" >Email</label>

                <?php if($vl == null ? '':$vl->getError('email')){ ?>
                    <div class="alert alert-danger">
                    <?php
                        echo ($vl == null ? '':$vl->getError('email'))
                    ?>
                    </div>
                <?php } ?>

                </div>
                <div class="form-floating">
                    <input id="txtPass" class="form-control"
                            placeholder="Password"
                            value="<?=$sandi ?? ''?>"
                            type="password" name="sandi" />
                    <label for='txtPass' >kata sandi</label>

                <?php if($vl == null ? '':$vl->getError('sandi')){ ?>
                    <div class="alert alert-danger">
                    <?php
                    echo ($vl == null ? '':$vl->getError('sandi'))
                    ?>
                </div>
                <?php } ?>

                <button class="btn btn-primary" >login</button>
            </div>
        </div>
    </div>
</form>
<?=$this->endsection()?>