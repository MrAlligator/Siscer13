<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h2 class="card-title text-center"><strong>SUPPLIER RANDOM</strong></h2>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table_supplier" class="display table-striped" style="width:100%">
                                <thead class="text-primary">
                                    <th>No</th>
                                    <th>test</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Nilai Fitness</th>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($gen as $sup) : ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $sup->id_anggota ?></td>
                                            <td><?= $sup->k1 ?></td>
                                            <td><?= $sup->k2 ?></td>
                                            <td><?= $sup->k3 ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h2 class="card-title text-center"><strong>HITUNG SKOR</strong></h2>
                    </div>

                    <div class="card-body">
                        <form action="<?= base_url('genetik/optimasi') ?>" method="POST">
                            <?php
                            $no = 1;
                            foreach ($gen as $sup) : ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">ID RANDOM</label>
                                            <input type="text" class="form-control" name="id-<?= $no++; ?>" value="<?php echo $sup->id_anggota; ?>">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">JUMLAH POPULASI</label>
                                        <input type="text" class="form-control" id="jp" name="jp" value="<?php echo $jp; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CROSSOVER</label>
                                        <input type="text" class="form-control" id="cr" name="cr" value="<?php echo $cr; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">MUTASI</label>
                                        <input type="text" class="form-control" id="mu" name="mu" value="<?php echo $mu; ?>">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Hitung</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>