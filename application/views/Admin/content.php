<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">HOŞGELDİNİZ...</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            GELEN SON 5 MESAJ
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SIRA</th>
                                            <th>ADI</th>
                                            <th>MESAJ</th>
                                            <th>TARİH</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($mesaj as $rs){
                                        $i++;
                                                            
                                         ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$rs->mes_sender?></td>
                                            <td><?=$rs->mes_detail?></td>
                                            <td><?=$rs->mes_date?></td>
                                        </tr>
                                        <?php } ?>  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           ÜYE OLAN SON 5 KİŞİ
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SIRA</th>
                                            <th>ADI</th>
                                            <th>E-MAIL</th>
                                            <th>CİNSİYET</th>
                                            <th>TARİH</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach ($uye as $rs){
                                        $i++;
                                                            
                                         ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$rs->uname_surname?></td>
                                            <td><?=$rs->user_email?></td>
                                            <td><?=$rs->user_gender?></td>
                                            <td><?=$rs->user_date?></td>
                                        </tr>
                                         <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- Bootstrap Core JavaScript -->
   

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>bower_components/jquery/dist/jquery.min.js"></script>

  
    
    
    

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
   
   <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
<script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- buraya koydum -->
     

</body>

</html>