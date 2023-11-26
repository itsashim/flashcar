<?php $__env->startSection('title'); ?>
<?php echo e(__('Orders')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<style>
   .order_status {
            cursor: pointer;
        }

        .hide {
            display: none;
        }

        .alignright>.dt-buttons {
            float: right;
        }

        #orders_length>label {
            float: left;
        }

        #vendor_id {
            margin-left: 10px;
        }

        .badge-danger {
            background-color: red;
        }

        .badge-success {
            background-color: green;
        }

        .badge-primary {
            background-color: blue;
        }

        .badge-warning {
            background-color: #2f2f0f;
        }

        div.dataTables_wrapper div.dataTables_filter input {
            margin-right: 5px;
            height: 40px;
        }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('Orders')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('Orders')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                  
                  
                  
                   <?php if(\Session::has('success')): ?>
                  <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                     <?php echo e(\Session::get('success')); ?>

                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <?php endif; ?> 
                  
                  
                  <div class="table-responsive">
                    <table id="serverTable" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.Id')); ?></th>
                           <th><?php echo e(__('Customer Name')); ?></th>
                           <th><?php echo e(__("seller")); ?></th>
                           <th><?php echo e(__('Order Price')); ?></th>
                           <th><?php echo e(__('Payment Method')); ?></th>
                           <th><?php echo e(__('Status')); ?></th>
                           <th><?php echo e(__('Order Date')); ?></th>
                           <th><?php echo e(__('messages.Action')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                  </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="deleteCityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <form id="deleteForm" action="#" method="POST">
         <?php echo csrf_field(); ?>
         <?php echo method_field('DELETE'); ?>
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
       </div>
       <div class="modal-footer">
         <button type="submit" class="btn btn-danger">Delete</button>
       </div>
     </div>
      </form>
   </div>
 </div>

 <div id="orderStatusModal" class="modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <form action="<?php echo e(route('order.status')); ?>" method="POST">
         <?php echo csrf_field(); ?>
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title">Order Status</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <input type="text" style="display:none;" id="orderID" name="id" />
         <select class="form-control" id="orderStatus" name="status">
            <option value="Pending">Pending</option>
            <option value="Complete">Complete</option>
            <option value="Cancelled">Cancelled</option>
         </select>
       </div>
       <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Update</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       </div>
     </div>
      </form>
   </div>
 </div>

 <span id="totalDataCount" data-total="<?php echo e($dataCount); ?>"></span>
<input type="hidden" id="ajaxroute" name="ajaxroute" value="<?php echo e(route('orders.ajaxTable')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>

<script type="text/javascript">
   $(function() {

       const table_name = 'serverTable';
       const data_url = $('#ajaxroute').val();
       const columns = [{
               "data": "id"
           },
           {
               "data": "user_id"
           },
           {
               "data": "seller_id"
           },
           {
               "data": "total_price"
           },
           {
               "data": "payment_method"
           },
           {
               "data": "status"
           },
           {
               "data": "created_at"
           },
           {
               "data": "action"
           },
       ];

       function initializeDTR(t, a, n, e = 0, o = 10, l, i) {
           $("#" + t).DataTable({
               processing: !0,
               serverSide: !0,
               displayStart: e,
               pageLength: o,
               paging: !0,
               ajax: {
                   headers: {
                       "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                   },
                   url: n,
                   data: l,
                   dataType: "json",
                   type: "POST"
               },
               columns: a,
               dom: "<'row'<'col-sm-6 alignleft'l><'col-sm-6 alignright'Bf>><'row'<'col-sm-12't>><'row'<'col-sm-12'ip>>",
               buttons: [{
                   extend: "pdfHtml5",
                   title: i,
                   exportOptions: {
                       columns: ":not(:last-child)"
                   },
                   footer: !0,
                   action: function(t, a, n, e) {
                       s(t, a, n, e)
                   }
               }, {
                   extend: "excelHtml5",
                   title: i,
                   exportOptions: {
                       columns: ":not(:last-child)"
                   },
                   footer: !0,
                   action: function(t, a, n, e) {
                       s(t, a, n, e)
                   }
               }, {
                   extend: "print",
                   title: i,
                   exportOptions: {
                       columns: ":not(:last-child)"
                   },
                   footer: !0,
                   action: function(t, a, n, e) {
                       s(t, a, n, e)
                   }
               }]
           }).buttons().container().appendTo("#reportsexports");
           var s = function(t, a, n, e) {
               var o = this,
                   l = a.settings()[0]._iDisplayStart;
               a.one("preXhr", function(t, i, s) {
                   s.start = 0, s.length = $("#totalDataCount").data("total"), a.one("preDraw",
                       function(t, i) {
                           return function(t, a, n, e, o) {
                               e[0].className.indexOf("buttons-excel") >= 0 ? $.fn
                                   .dataTable.ext.buttons.excelHtml5.available(n, o) ? $.fn
                                   .dataTable.ext.buttons.excelHtml5.action.call(t, a, n,
                                       e, o) : $.fn.dataTable.ext.buttons.excelFlash.action
                                   .call(t, a, n, e, o) : e[0].className.indexOf(
                                       "buttons-pdf") >= 0 ? $.fn.dataTable.ext.buttons
                                   .pdfHtml5.available(n, o) ? $.fn.dataTable.ext.buttons
                                   .pdfHtml5.action.call(t, a, n, e, o) : $.fn.dataTable
                                   .ext.buttons.pdfFlash.action.call(t, a, n, e, o) : e[0]
                                   .className.indexOf("buttons-print") >= 0 && $.fn
                                   .dataTable.ext.buttons.print.action(a, n, e, o)
                           }(o, t, a, n, e), a.one("preXhr", function(t, a, n) {
                               i._iDisplayStart = l, n.start = l
                           }), setTimeout(a.ajax.reload, 0), !1
                       })
               }), a.ajax.reload()
           }
       }

       let data = {};

       initializeDTR(table_name, columns, data_url, start = 0, length = 10, data, 'Menu Report');

       $(document).on('click', '.rowDelete', function() {
           let id = $(this).data('id');
           let url = $(this).data('link');
           $('#deleteCityModal').modal('show');
           $('#deleteForm').attr('action',url);
       });

       $(document).on('click','.order_status',function(){
         let id = $(this).data('id');
         let status = $(this).data('status');
         $("#orderID").val(id);
         $('#orderStatus').val(status);
         $('#orderStatusModal').modal('show');
       });

   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sathiservice/public_html/resources/views/admin/orders/index.blade.php ENDPATH**/ ?>