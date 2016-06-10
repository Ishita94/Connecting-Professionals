<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

	</style>

	<script type="text/javascript">
		
		$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
	</script>
</head>
<body>
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
        <!--   <A href="edit.html" >Edit Profile</A>-->

        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info">May 05,2014,03:00 pm </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 <tr>
                <td>{{$data->Profile_name}}</td>
                       	<!--<td>Programming</td>-->
                </tr>
               </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                      <!--
                        <!--<td>User Name</td>
                        <td></td>
                       	<!--<td>Programming</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td></td>
                       	<!--<td>Programming</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td></td>
                        <!--<td>01/24/1988</td>--
                      </tr>
                      <tr>
                        <td>Home Adress</td>
                        <!--<td>Metro Manila,Philippines</td>--
                      </tr>
                      <td>Phone Number</td>
                        <!--<td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)</td>--
                      </tr>
                      -->
                      <tr>
                        <td>Email</td>
                        <td>{{$data->Email}}</td>
                        <!--<td><a href="mailto:info@support.com">info@support.com</a></td>-->
                      </tr>
                     <tr>
                        <td>Education</td>
                        <td>{{$data->Education}}</td>
                        <!--<td>01/24/1988</td>-->
                      </tr>
                      <tr>
                        <td>Interest</td>
                        <td>{{$data->Interest}}</td>
                        <!--<td>01/24/1988</td>-->
                      </tr>
                      <tr>
                        <td>Experiences</td>
                        <td>{{$data->Experience}}</td>
                        <!--<td>01/24/1988</td>-->
                      </tr>
                      <tr>
                        <td>Language Skills</td>
                        <td>{{$data->Languageskills}}</td>
                        <!--<td>01/24/1988</td>-->
                      </tr>
                      <tr>
                        <td>Projects</td>
                        <td>{{$data->Projects}}</td>
                        <!--<td>01/24/1988</td>-->
                      </tr>
                      <tr>
                        <td>Courses</td>
                        <td>{{$data->Courses}}</td>
                        <!--<td>01/24/1988</td>-->
                      </tr>
                      <tr>
                        <td>Volunteer Experiences</td>
                        <td>{{$data->Volunteer_exp}}</td>
                        <!--<td>01/24/1988</td>-->
                      </tr>
                      <tr>
                        <td>Remember Token</td>
                        <td>{{$data->remember_token}}</td>
                        <!--<td>01/24/1988</td>-->
                      </tr>
                      <tr>
                        <td>Created At</td>
                        <td>{{$data->created_at}}</td>
                        <!--<td>01/24/1988</td>-->
                      </tr>
                      <tr>
                        <td>Last Update At</td>
                        <td>{{$data->updated_at}}</td>
                        <!--<td>01/24/1988</td>-->
                      </tr>

                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Edit My Profile</a>
                  <a href="#" class="btn btn-primary">Delete My Account</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
</body>
</html>