<div class="row">
    <!-- Striped rows -->
    <div class="col-md-12 my-4">
        <h2 class="h4 mb-1">Grouped header & rows</h2>
        <p class="mb-4">Customized table based on Bootstrap with additional elements and more functions</p>
        <div class="card shadow">
            <div class="card-body">
                <div class="toolbar row mb-3">
                    <div class="col">
                        <form class="form-inline">
                            <div class="form-row">
                                <div class="form-group col-auto">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" id="search" value="" placeholder="Search">
                                </div>
                                <div class="form-group col-auto ml-3">
                                    <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref">Status</label>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                        <option selected>Choose...</option>
                                        <option value="1">Processing</option>
                                        <option value="2">Success</option>
                                        <option value="3">Pending</option>
                                        <option value="3">Hold</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col ml-auto">
                        <div class="dropdown float-right">
                            <button class="btn btn-primary float-right ml-3" type="button" data-toggle="modal" data-target="#verticalModal">Add more +</button>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="actionMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                            <div class="dropdown-menu" aria-labelledby="actionMenuButton">
                                <a class="dropdown-item" href="#">Export</a>
                                <a class="dropdown-item" href="#">Delete</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="verticalModalTitle">Tambah Lomba</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                                <div class="modal-body  mb-4">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="namalomba" class="col-sm-3 col-form-label">Nama Lomba</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="namalomba" placeholder="Nama Lomba">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3" for="keteranganlomba">Keterangan</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="keteranganlomba" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn mb-2 btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <table class="table ">
                    <thead>
                        <tr role="row">
                            <th style="width: 10px">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="all">
                                    <label class="custom-control-label" for="all"></label>
                                </div>
                            </th>
                            <th style="width: 20px">No</th>
                            <th>Mata Lomba</th>
                            <th style="width: 1000px">KETERANGAN</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($konten as $key => $value) { ?>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="4574">
                                        <label class="custom-control-label" for="4574"></label>
                                    </div>
                                </td>
                                <td><?= $no++; ?></td>
                                <td><?= $value->nama_lomba ?></td>
                                <td><?= $value->keteranganlomba ?></td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Assign</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- simple table -->
</div> <!-- end section -->