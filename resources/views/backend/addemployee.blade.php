<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<div class="container">
<div class="row mt-5">
    <div class="col-md-4">

    <!-- <a href="{{Route('showproduct')}}">Show Products</a> -->
        
            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" class="fname form-control">
            </div>
            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" class="lname form-control">
            </div>
            <div class="form-group">
                <label for="">NID</label>
                <input type="text" class="nid form-control">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea class="address form-control" cols="30" rows="3"></textarea>
                
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="email form-control">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="phone form-control">
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select  class="status form-control">
                    <option value="0">-----Select Status-------</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                  
                </select>
             
            </div>
           
           <div class="form-group pt-3">
        <button class="addEmployee form-control btn btn-success">Add Employee</button>
               
        </div>
        
    </div>

    <div class="col-md-8">
        <table class="table">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>NID</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <tbody class="alldata">

           
            </tbody>
        </table>
    </div>
</div>
</div>

<!--Delete Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are sure want to delete this Employee?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="button" class="btndelete btn btn-primary">YES</button>
      </div>
    </div>
  </div>
</div>

<!--edit Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                <label for="">First Name</label>
                <input type="text" id="ufname" class="fname form-control">
            </div>
            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" id="ulname" class="lname form-control">
            </div>
            <div class="form-group">
                <label for="">NID</label>
                <input type="text" id="unid" class="nid form-control">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea id="uaddress" class="address form-control" cols="30" rows="3"></textarea>
                
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" id="uemail" class="email form-control">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" id="uphone"  class="phone form-control">
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select id="ustatus" class="status form-control">
                    <option value="0">-----Select Status-------</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                  
                </select>
             
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="button" class="update btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

<script>
    $(document).ready(function(){
        show();

        $(document).on("click",".update", function(){
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
            
            var id =$(this).val();
            var fname = $("#ufname").val();
            var lname = $("#ulname").val();
            var nid = $("#unid").val();
            var address = $("#uaddress").val();
            var email = $("#uemail").val();
            var phone = $("#uphone").val();
            var status = $("#ustatus").val();

            $.ajax({

                url:'updateemployee/'+id,
                type:'POST',
                dataType:'JSON',
                data:{
                    fname:fname,
                    lname:lname,
                    nid:nid,
                    address:address,
                    email:email,
                    phone:phone,
                    status:status

                },
                success:function(result){

                    if(result["msg"]=="success"){
                        show();
                        jQuery("#edit").modal("hide");
                      
                    }
                    else{
                        alert("Error");
                    }

                }

            });
        });



        $(document).on("click",".btnedit",function(){
           var id =$(this).val();
           $(".update").val(id);

           $.ajax({
               url:"editemployee/"+id,
               type:"GET",
               dataType:"JSON",

               success:function(result){
                  $("#ufname").val(result.allemp.fname);
                  $("#ulname").val(result.allemp.lname);
                  $("#unid").val(result.allemp.nid);
                  $("#uaddress").val(result.allemp.address);
                  $("#uemail").val(result.allemp.email);
                  $("#uphone").val(result.allemp.phone);

                  
               }
           });
        });


        $(document).on("click", ".deleteid", function(){
            var id =$(this).val();
            $(".btndelete").val(id);

        });
        $(document).on("click", ".btndelete", function(){

            var id = $(this).val();

            $.ajax({
                url:'deleteemployee/'+id,
                type:'get',
                dataType:'JSON',
                success:function(result){

                    if(result.status=="error"){
                            alert("data not found")
                        }
                        else{
                            show();
                            jQuery("#delete").modal("hide");
                        }
                }
            });
        });
        function show(){
            
            $.ajax({
                url:'showemployee',
                type:'GET',
                dataType:'JSON',

                success:function(result){
                    if(result["msg"]=="error"){
                        alert("No Record Found");
                    }
                    else{
                        var data="";
                        $.each(result.emp, function(key, item){
                           data +=  '<tr>\
                                        <td>'+item.fname+'</td>\
                                        <td>'+item.lname+'</td>\
                                        <td>'+item.nid+'</td>\
                                        <td>'+item.address+'</td>\
                                        <td>'+item.email+'</td>\
                                        <td>'+item.phone+'</td>\
                                       <td>'+item.status+'</td>\
                                       <td>\
                                       <button value="'+item.id+'" data-toggle="modal" data-target="#edit" class="btnedit btn btn-info btn-sm">Ed</button>\
                                       <button value="'+item.id+'" data-toggle="modal" data-target="#delete" class="deleteid btn btn-danger btn-sm">Dl</button>\
                                       </td>\
                                    </tr>';

                        });

                        $(".alldata").html(data);
                       
                    }
                }
            });
        }



        $(".addEmployee").click(function(){

            $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         }
                    });

            var fname = $(".fname").val();
            var lname = $(".lname").val();
            var nid = $(".nid").val();
            var address = $(".address").val();
            var email = $(".email").val();
            var phone = $(".phone").val();
            var status = $(".status").val();


            $.ajax({
                
                url:'employeestore',
                type:'POST',
                dataType:'JSON',
                data:{
                    fname:fname,
                    lname:lname,
                    nid:nid,
                    address:address,
                    email:email,
                    phone:phone,
                    status:status

                },
                success:function(result){

                    if(result["msg"]=="success"){
                        show();
                        alert("Data Saved Successfully");
                      
                    }
                    else{
                        alert("Error");
                    }
                }
            });
        });

    });


</script>




</body>
</html>