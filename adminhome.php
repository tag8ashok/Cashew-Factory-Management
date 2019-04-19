<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="adminhome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Menu1</a></li>
        <li><a href="#">Menu2</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div  style="margin-left:-15px"  class="col-sm-3 pull-left hidden-xs">

    <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Bootstrap Sidebar</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Dummy Heading</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

</div>
     







    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Work in Progress</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 1</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine2" name="addressLine2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State/Province/Region</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State/Province/Region" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code/ZIP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode" placeholder="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control">
                                     <option>A really long option to push the menu over the edget</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>








</body>
</html>
