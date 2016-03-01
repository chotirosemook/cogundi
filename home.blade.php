@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('crm-home'))
@section('content')
<style>
    
      .bg-crm{
        background: url('../../img/bg-home/bg-crm.png') no-repeat ;
        width:100%;
        height:500px; /*same height as jumbotron */
        top:0;
        left:0;
      }
</style>
<!-- header -->
<div class="row  page-home-manual">
  <div class="col-md-8 col-sm-8">
    <label>คู่มือการใช้งาน ระบบบริหารจัดการลูกค้า CRM</label>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-6 col-sm-6">
      <label>พิมพ์ข้อมูลทั้งหมด</label>
    </div>
    <div class="col-md-1 col-sm-1">
      <button type="button" class="btn btn-default btn-sm glyphicon glyphicon-print"></button> 
    </div>
  </div>
</div><!--End header -->


<!-- bedy -->
  <div class="col-lg-12 col-md-12 bg-crm">
    <h4 class="text-center">ยินดีต้อนรับเข้าสู่ ระบบบริหารจัดการลูกค้า CRM</h4>
      <div class="col-lg-8 col-md-8"></div>
        <div class="col-lg-4 col-md-4">
          <div class="row"> 
            <div class="col-lg-12 col-md-12">
               <a href="../../manual/crm/configurationn.pdf" target="_blank">
                <button type="button" class="btn btn-primary btn-block"  onclick="#">Configuration</button>
              </a>
            </div>
          </div>
          <div class="row"> 
            <div class="col-lg-12 col-md-12">
               <a href="../../manual/crm/portschedule.pdf" target="_blank">
                <button type="button" class="btn btn-primary btn-block"  onclick="#">Port Schedule</button>
              </a>
            </div>
          </div>
          <div class="row"> 
            <div class="col-lg-12 col-md-12">
               <a href="../../manual/crm/regis.pdf" target="_blank">
                <button type="button" class="btn btn-primary btn-block"  onclick="#">Registration System</button>
              </a>
            </div>
          </div>
          <div class="row"> 
            <div class="col-lg-12 col-md-12">
              <a href="../../manual/crm/customeredit.pdf" target="_blank">
              <button type="button" class="btn btn-primary btn-block"  onclick="#">ลูกค้าแก้ไขข้อมูล</button>
              </a>
            </div>
          </div>
          <div class="row"> 
            <div class="col-lg-12 col-md-12">
              <a href="../../manual/crm/rentalSpace.pdf" target="_blank">
              <button type="button" class="btn btn-primary btn-block"  onclick="#">ข้อมูลเช่าพื้นที่</button>
              </a>
            </div>
          </div> 
          <div class="row"> 
            <div class="col-lg-12 col-md-12">
              <a href="../../manual/crm/ServiceDashBoard.pdf" target="_blank">
              <button type="button" class="btn btn-primary btn-block"  onclick="#">Service DashBoard</button>
              </a>
            </div>
          </div>
          <div class="row"> 
            <div class="col-lg-12 col-md-12">
              <a href="../../manual/crm/PartnersManagement.pdf" target="_blank">
              <button type="button" class="btn btn-primary btn-block"  onclick="#">Partners Management</button>
              </a>
            </div>
          </div>
          <div class="row"> 
            <div class="col-lg-12 col-md-12">
              <a href="../../manual/crm/personal.pdf" target="_blank">
              <button type="button" class="btn btn-primary btn-block"  onclick="#">ข้อมูลบุคคล</button>
              </a>
            </div>
          </div> 
          <div class="row"> 
            <div class="col-lg-12 col-md-12">
              <a href="../../manual/crm/vessel.pdf" target="_blank">
              <button type="button" class="btn btn-primary btn-block"  onclick="#">ข้อมูลเรือ</button>
              </a>
            </div>
          </div>
          <div class="row"> 
            <div class="col-lg-12 col-md-12">
              <a href="../../manual/crm/vehicle.pdf" target="_blank">
              <button type="button" class="btn btn-primary btn-block"  onclick="#">ข้อมูลรถยนต์</button>
              </a>
            </div>
          </div> 
           <div class="row"> 
            <div class="col-lg-12 col-md-12">
              <a href="../../manual/crm/report.pdf" target="_blank">
              <button type="button" class="btn btn-primary btn-block"  onclick="#">Report</button>
              </a>
            </div>
          </div> 
          
      </div> 
  </div><!-- End body -->

@stop


@section('modal-content')

@stop

@section('javascript')

@stop
