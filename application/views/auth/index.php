<div class="card" style="width: 30rem; margin: auto;">
                <div class="card-body">
                  <h1 class="card-header">LOGIN</h1>
                    <?php if( $this->session->flashdata('messege')) : ?>
                        <div class="alert alert-warning alert-dismissible fade show mt-2 mb-2">
                            <strong><? $this->session->flashdata('messege');?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    <?php endif; ?>
                 <form method="post" action="<?= base_url('auth/index');?>">
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" id="password" name="password">
                      <?= form_error('password', '<smail class="text-danger p1-3">', '</small>');?>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                      <?= form_error('password', '<small class="text-danger p1-3">', '</small>');?>
                    </div>
                     <input type="submit" value="submit" class="btn btn-primary"></input>
                </form>
            </div>
          </div>