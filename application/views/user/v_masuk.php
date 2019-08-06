<?php $this->load->view ("user/header") ?>
<!--banner-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/style.css') ?>">
<center>
<form class="container2" action="<?php echo base_url('Index/proses_login') ?>" method="post">
      <hr>
      <div class="input-inline input-medium">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control" placeholder="Masukan NIS anda" name="nis" id="nis"> 
            </div>
        </div>
      <div class="input-inline input-medium margin2">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-unlock"></i>
                </span>
                <input type="password" class="form-control" placeholder="Masukan Password anda" name="password" id="password"> 
            </div>
        </div>
      <input type="submit" name="submit" id="submit" value="login" class="btn btn-secondary">
      <input type="reset" name="reset" id="reset" value="reset" class="btn btn-danger">
      </form>        
      </center>                        
<?php $this->load->view ("user/footer")?>