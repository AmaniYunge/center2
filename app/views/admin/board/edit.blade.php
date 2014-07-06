
<div class="panel panel-default">
    <div class="panel-body" style="color: #000000">
        {{ Form::open(array("url"=>url("admin/board/edit/{$board->id}"),"class"=>"form-horizontal","id"=>'FileUploader')) }}

        <div class='form-group'>
            <div class='col-sm-6'>
                First Name <br>  {{ Form::text('fname',$board->fname,array('class'=>'form-control','placeholder'=>'First Name','required'=>'required')) }}
            </div>
            <div class='col-sm-6'>
                Last Name<br>{{ Form::text('lname',$board->lname,array('class'=>'form-control','placeholder'=>'Last Name','required'=>'required')) }}
            </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-6'>
                Gender<br>{{ Form::select('type',array(''=>'--Select--','Male'=>'Male','Female'=>'Female'),$board->gender,array('class'=>'form-control','required'=>'required')) }}
            </div>
            <div class='col-sm-6'>
                Occupation<br> {{ Form::text('occu',$board->occupation,array('class'=>'form-control','placeholder'=>'Occupation','required'=>'required')) }}
            </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-6'>
                Phone Number <br> {{ Form::text('phone',$board->phone_no,array('class'=>'form-control','placeholder'=>'Phone','required'=>'required')) }}
            </div>
            <div class='col-sm-6'>
                Email <br> {{ Form::text('email',$board->email,array('class'=>'form-control','placeholder'=>'Email','required'=>'required')) }}
            </div>
        </div>
        <div class='form-group'>
            <div class='col-sm-12'>
                Education Level<br>{{ Form::select('edu',array(''=>'--Select--','Certificate'=>'Certificate','Diploma'=>'Diploma','Degree'=>'Degree','Masters'=>'Masters'),$board->education_level,array('class'=>'form-control','required'=>'required')) }}
            </div>

        </div>

        <div class='form-group'>
            <div class='col-sm-12 '>
                Bibliography<br>
                {{ Form::textarea('bibli',$board->bibliograph,array('class'=>'form-control','placeholder'=>'Bibliography','required'=>'required')) }}
            </div>
        </div>

        <div id="output"></div>
        <div class='col-sm-12 form-group text-center'>
            {{ Form::submit('Update',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
            {{ Form::reset('Reset',array('class'=>'btn btn-warning','id'=>'submitqn')) }}
        </div>
        {{ Form::close() }}
    </div>
</div>
<script>
    $(document).ready(function (){
        $('#FileUploader').on('submit', function(e) {
            e.preventDefault();
            $("#output").html("<h3><i class='fa fa-spin fa-spinner '></i><span>Making changes please wait...</span><h3>");
            $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess
            });

        });

        function afterSuccess(){
            setTimeout(function() {
                $("#myModal").modal("hide");
            }, 1000);
            $("#listuser").load("<?php echo url("admin/board_member/list") ?>")
        }
    });
</script>
