
<div class="row">
<div class="panel panel-default">
<div class="panel-heading">
    <div class="text-muted bootstrap-admin-box-title">
        Board Members
        <button class="btn btn-primary btn-xs pull-right add" id="add"><i class="fa fa-plus"></i> add</button>
    </div>
</div>
<div class="bootstrap-admin-panel-content">
   @if(BoardMember::all()->count() == 0)
    <h3>There are no defined Board Members</h3>
    @else
     <table id="example2" style="color: #000000" class="table table-responsive">
         <thead>
         <tr>
             <th>Name</th>
             <th>Gender</th>
             <th>Occupation</th>
             <th>Phone</th>
             <th>Email</th>
             <th>Education Level</th>
             <th></th>
         </tr>
         </thead>
         <tbody>
         @foreach(BoardMember::all() as $member)
            <tr>
                <td>{{ $member->fname }} {{ $member->lname }}</td>
                <td>{{ $member->gender }}</td>
                <td>{{ $member->occupation }}</td>
                <td>{{ $member->phone_no }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->education_level}}</td>
                <td id="{{ $member->id }}">
                    <a href="#edit" title="edit Board Member" class="edit"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                    <a href="#b" title="delete Board" class="delete"><i class="fa fa-trash-o text-danger"></i> </a>
                </td>
            </tr>
         @endforeach
         </tbody>
     </table>
    @endif
</div>
</div>
</div>


<!--script to process the list of users-->
<script>
    /* Table initialisation */
    $(document).ready(function() {
        $('#example2').dataTable({
            "fnDrawCallback": function( oSettings ) {
                //editing a room
                $(".edit").click(function(){
                    var id1 = $(this).parent().attr('id');
                    var modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
                    modal+= '<div class="modal-dialog">';
                    modal+= '<div class="modal-content">';
                    modal+= '<div class="modal-header">';
                    modal+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
                    modal+= '<h2 class="modal-title" id="myModalLabel">Update Facility Information</h2>';
                    modal+= '</div>';
                    modal+= '<div class="modal-body">';
                    modal+= ' </div>';
                    modal+= '</div>';
                    modal+= '</div>';

                    $("body").append(modal);
                    $("#myModal").modal("show");
                    $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
                    $(".modal-body").load("<?php echo url("admin/board_member/edit") ?>/"+id1);
                    $("#myModal").on('hidden.bs.modal',function(){
                        $("#myModal").remove();
                    })
                })


                $(".delete").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $(".delete").show("slow").parent().parent().find("span").remove();
                    var btn = $(this).parent().parent();
                    $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
                    $("#no").click(function(){
                        $(this).parent().parent().find(".delete").show("slow");
                        $(this).parent().parent().find("span").remove();
                    });
                    $("#yes").click(function(){
                        $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                        $.post("<?php echo url('admin/board/delete') ?>/"+id1,function(data){
                            btn.hide("slow").next("hr").hide("slow");
                        });
                    });
                });//endof deleting category
            }
        });

        //managing the add button
        $(".add").click(function(){
            var modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
            modal+= '<div class="modal-dialog">';
            modal+= '<div class="modal-content">';
            modal+= '<div class="modal-header">';
            modal+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
            modal+= '<h2 class="modal-title" id="myModalLabel">Add Board Member</h2>';
            modal+= '</div>';
            modal+= '<div class="modal-body">';
            modal+= ' </div>';
            modal+= '</div>';
            modal+= '</div>';

            $("body").append(modal);
            $("#myModal").modal("show");
            $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
            $(".modal-body").load("<?php echo url("admin/board_member/add") ?>");
            $("#myModal").on('hidden.bs.modal',function(){
                $("#myModal").remove();
            })

        })
    } );
</script>
