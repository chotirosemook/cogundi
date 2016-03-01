@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('customer-vessel-form'))
@section('content')
    
<!-- portlet -->
<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      ข้อมูล
    </h3>
  </div> <!-- /.portlet-header -->
  <div class="portlet-content">
      
      <form class="form-horizontal">
                <div class="form-group">
                    <div class="col-lg-12 col-md-12 text-right">
                        <button type="button" id="btn-form-valid" class="btn btn-primary">
                          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                          <h4 class="panel-title pull-right" style="margin-left: 5px">ดึงข้อมูลจาก Traffic marine</h4>
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2" align="right" for="tons_gross">CALL SIGN :</label>
                    <div class="col-lg-10 col-md-10"><input class="form-control" type="text" name="tons_gross" id="tons_gross" value="DATA CALL SIGN" disabled></div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-md-2" for="year" align="right">MIMS :</label>
                    <div class="col-lg-4 col-md-4"><input class="form-control" type="text" id="year" name="year" value="DATA MIMS" disabled></div>
                    <label class="col-lg-2 col-md-2" align="right" for="tons_net">IMO :</label>
                    <div class="col-lg-4 col-md-4"><input class="form-control" type="text" id="tons_net" name="tons_net" value="DATA IMO" disabled></div>
                </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2" for="name_vessel" align="right">NAME OF VESSEL :</label>
                        <div class="col-lg-4 col-md-4">
                                <input class="form-control" type="text" id="name_vessel" name="name_vessel" data-required="true" ria-controls="DataTables_Table_0">
                        </div>
                        <label class="col-lg-2 col-md-2" for="nationality" align="right">NATIONALITY :</label>
                        <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="nationality" id="nationality" data-required="true"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2" for="year" align="right">YEAR :</label>
                        <div class="col-lg-4 col-md-4"><input class="form-control" type="text" id="year" name="year" data-required="true"></div>
                        <label class="col-lg-2 col-md-2" align="right" for="tons_gross">TONS GROSS :</label>
                        <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="tons_gross" id="tons_gross" data-required="true"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2" align="right" for="tons_net">TONS NET :</label>
                        <div class="col-lg-4 col-md-4"><input class="form-control" type="text" id="tons_net" name="tons_net" data-required="true"></div>
                        <label class="col-lg-2 col-md-2" align="right" for="length">LENGTH :</label>
                        <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="length" id="length" data-required="true"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2" for="register" align="right">REGISTER :</label>
                        <div class="col-lg-4 col-md-4"><input class="form-control" type="text" id="register" name="register" data-required="true"></div>
                        <label class="col-lg-2 col-md-2" align="right" for="deradth">DREADTH :</label>
                        <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="deradth" id="deradth" data-required="true"></div>

                    </div>
                    <div class="form-group">

                        <label class="col-lg-2 col-md-2" align="right" for="owner">OWNER :</label>
                        <div class="col-lg-4 col-md-4"><input class="form-control" type="text" id="owner" name="owner" data-required="true"></div>
                        <label class="col-lg-2 col-md-2" align="right" for="line">LINE :</label>
                        <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="line" id="line" data-required="true"></div>
 
                    </div>
                    <div class="form-group"> 
                          <label class="col-lg-2 col-md-2" align="right" for="agent_branch">AGENT BRANCH :</label>
                          <div class="col-lg-10 col-md-10"><input class="form-control" type="text" name="agent_branch" id="agent_branch" data-required="true"></div> 
                    </div>
          
    <div class="portlet portlet-plain">

                    <div class="portlet-header">

                            <h4>หมายเหตุ/ความคิดเห็น</h4>

                    </div> <!-- /.portlet-header -->

                    <div class="portlet-content">

                        <form method="POST" id="frmWorkFlow" class="form-horizontal">
                                <input type="hidden" name="_token" value="exmLt8ObjWh1enXsqdm4cgKS7wwO7TWjm7za9dZN">
                                <input type="hidden" name="workflow[wfid]" value="1">
                                <input type="hidden" name="workflow[old_sid]" value="13"> 
                                <input type="hidden" name="workflow[nid]" id="nid" value="22">
                                <input type="hidden" name="workflow[target-sid]" id="target-sid">

                                   <textarea name="workflow[comment]" id="comment" cols="10" rows="3" class="form-control"></textarea>   

                        </form>

                    </div> <!-- /.portlet-content -->

                </div>
                      
                <div class="col-lg-12 col-md-12 text-center">
                  <button type="button" id="btn-form-valid" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
                    <h4 class="panel-title pull-right" style="margin-left: 5px">บันทึกการตรวจสอบ</h4>
                  </button>
                </div>
         
          
      </form>
  </div>
</div><!-- /.portlet-header -->

@stop
<!-- Confirm Save -->  
<div id="md-save" class="modal modal-styled fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                <h4 class="modal-title">บันทึกข้อมูล</h4>
            </div>
            <div class="modal-body">
                <p>ยืนยันการบันทึกข้อมูล?</p>
            </div>
            <div class="modal-footer">
              
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-ajax-save">บันทึก</button> 
                <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>               
            </div>
        </div>
    </div>
</div>

@section('modal-content')


@section('javascript')
<script>
  // save && validate
    $('.btn-workflow').click(function() {
          $('#target-sid').val($(this).attr('id'));
          $('#md-save').modal('show'); 
    });

    // confirm save
    $('#btn-ajax-save').click(function(){
          $('#md-save').modal('hide');

            $.ajax({
                url: "{{ URL::to('crm/registration') }}",
                type: 'POST',
                data: $("#frmWorkFlow").serializeArray(),
                success: function(data) {
                    if(data.result=='true') {
                        changePage('crm/registration');
                    } else {
                        $('#md-error p' ).text(data.message);
                        $('#md-error').modal('show');
                    }       
                }
            });
    });

</script>

@stop