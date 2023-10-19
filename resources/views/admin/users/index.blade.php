@extends('admin.layouts.app')
@section('title' , 'Customer')
@section('content')
     <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <a href="{{ url('customer/edit') }}"><button type="button" class="btn btn-primary">Add Customer</button></a>
            <br>  
            <br> 
            <div class="row">
              <div class="col-12">
                <div class="card">       
                  <div class="card-header">
                    <h4>City List</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="datatable" class="table table-hover dt-responsive dataTable no-footer dtr-inline"
                      cellspacing="0"
                      width="100%"
                      role="grid"
                      aria-describedby="geniustable_info"
                      style="width: 100%;">
                        <thead>
                          <tr> 
                            <th>Name</th>  
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>                           
                      </table>                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
        {{-- DELETE MODAL --}}
        <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Confirm  Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  You are about to delete this city.
                   <br>
                   <br>
                  Do you want to proceed
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" onclick="deleteModal()">Delete</button>
              </div>
            </div>
          </div>
        </div>
@endsection 
@section('script') 
 <script src="{{ URL::asset('admin/assets/js/sweetalert.js') }}"></script>
 <script src="{{ URL::asset('admin/assets/js/page/datatables.min.js') }}"></script>
 <script src="{{ URL::asset('admin/assets/js/datatables.init.js') }}"></script>
   
    <script type="text/javascript">
 
        var table = $('#datatable').DataTable({
            ajax: '{{ url('customer/index') }}',
            columns: [
                  {
                     data: 'name',
                     name: 'name'
                  },
                 {
                     data: 'mobile_number',
                     name: 'mobile_number'
                 },         
                 {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'action',
                    name: 'action'
                 },
                ],
                language: {
                  searchPlaceholder: "Search Customer"
                },  
              });

          function myFunction(id){
             deleteId = id;
            $('#deleteModal').modal('show');
           
           
          }
          
 
          function deleteModal() {
            let url = "{{ url('customer/delete' ,":id" )}}";
            url = url.replace(':id', deleteId )

            $.ajax({
               method :"get",
               url :  url,
               success :function(response){
                   if (response.success == 200){
                       Swal.fire('Success',response.data,'success')
                       $('#deleteModal').modal('hide');   
                   }
               },
               
            })
            
          } 
 

               
    </script>

 @endsection
 
 