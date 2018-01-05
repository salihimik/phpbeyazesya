<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">HAKKIMIZDA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-edit fa-fw"></i> Firma Bilgilerimiz
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                
                                
                                    <form role="form" action="<?php echo base_url();?>index.php/admin/about_update/<?php echo $veri[0]->com_id?>" method="POST">                                        
                                        <div class="form-group">
                                            <label>FiRMA ADI</label>
                                            <input class="form-control" id="com_name" name="com_name" value="<?php echo $veri[0]->com_name ?>" >
                                       </div>
                                        <div class="form-group">
                                            <label>E-MAIL</label>
                                            <input class="form-control" id="com_email" name="com_email" value="<?php echo $veri[0]->com_email ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>TEL</label>
                                            <input class="form-control" id="com_phone" name="com_phone" value="<?php echo $veri[0]->com_phone?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>ADRES</label>
                                            <input class="form-control" id="com_adress" name="com_adress" value="<?php echo $veri[0]->com_adress?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>FAX</label>
                                            <input class="form-control" id="com_fax" name="com_fax" value="<?php echo $veri[0]->com_fax?>" >
                                        </div>
                                        <div class="form-group">
                                         <label>MiSYON</label>
                                        <textarea name="com_mission" id="com_mission" value="<?php echo $veri[0]->com_mission?>" rows="5" cols="100"> <?=$veri[0]->com_mission?>                                    
                                        </textarea>                                                                                   
                                        </div> 
                                        <div class="form-group"> 
                                        <label>ViZYON</label>
                                        <textarea name="com_vision" id="com_vision" value="<?php echo $veri[0]->com_vision?>" rows="5" cols="100">          <?=$veri[0]->com_vision?>                                       
                                        </textarea>                                                                               
                                        </div> 
                                        <div class="form-group">
                                        <label>GUZEL SÖZ</label>
                                        <textarea name="com_symbol" id="com_symbol" value="<?php echo $veri[0]->com_symbol?>" rows="5" cols="100">           <?=$veri[0]->com_symbol?>                                      
                                        </textarea>                                                                                   
                                        </div>  
                                        
                                        <button type="submit" value="about_update" class="btn btn-default">KAYDET</button>
                                        <button type="reset" class="btn btn-default">TEMIZLE</button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    </div>
    <script src="<?php echo base_url()?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>

</html>
