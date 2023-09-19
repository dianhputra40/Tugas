<?php
$profil=$this->gmodel->getDataRow('company_profile',array('id'=>'1'));
?>
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; <?=date('Y')?> <a href="<?=$profil['website']?>"><?=$profil['nama']?></a>.</strong> All rights reserved.
  </footer>