<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="style.css">
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Feculty Costings  </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
      <script src="js/style.js"></script>
 

  </head>
  <body>
      
          <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Feculty Costings</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Register Staff</a></li>
      <li><a href="#">Expandetures</a></li>
    </ul>
  </div>
</nav>
      <div class="container">
  <div class="jumbotron">
    <h1>University Of Bedforshire</h1>
    <p>Course Estimation System</p>
  </div>
  
          <!-- STEP FORMS-->
     <div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Course Details</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Income </p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Units Details</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Upload Documents</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
            <p>Preview & Submit</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
            <p>Client ID Genration</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
    
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Course</h3>
                                
                <!-- Select Basic -->
<br>
  <div class="form-group">
  <label class="col-md-4 control-label" for="stack_id">Course</label>
  <div class="col-md-5">
    <select id="stack_id" name="stack_id" class="form-control">
     <option value="" selected="selected">(please select Course)</option>
      <option value="1">Foundation</option>
      <option value="2">Undergraduate</option>
      <option value="3">Postgraduate</option>
      <option value="4">Other.</option>
    </select>
  </div>
</div>
<br>
<br>
                <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="stack_id">Duration</label>
  <div class="col-md-5">
    <select id="stack_id" name="stack_id" class="form-control">
      <option value="" selected="selected">(please select Course Duration)</option>
      <option value="1">12 Months</option>
      <option value="2">15 Months</option>
      <option value="3">24 Months</option>
      <option value="4">36 Months</option>
      <option value="5">46 Months</option>
    </select>
  </div>
</div>
<br>
<br>
<!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="stack_id">Course Tittle</label>
  <div class="col-md-5">
    <select id="stack_id" name="stack_id" class="form-control">
     <option value="" selected="selected">(please select Course Title)</option>
      <option value="1">FdA</option>
      <option value="2">FdSc</option>
      <option value="3">BA</option>
      <option value="4">BSc</option>
      <option value="5">BEng</option>
      <option value="6">MsA</option>
      <option value="7">MSc</option>
    </select>
  </div>
</div>
<br>
<br>



<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="ctry">Country</label>  
  <div class="col-md-5">
  <input id="ctry" name="ctry" type="text" placeholder="Country" class="form-control input-md">
    
  </div>
</div>-->
 <!-- country select -->
        <div class="form-group">
  <label class="col-md-4 control-label" for="action_name">Type</label>  
  <div class="col-md-5">
  <input id="action_name" name="action_name" type="text" placeholder="(Please Enter Course Type)" class="form-control input-md">
    
  </div>
</div>
<br>
<br>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Student Number</h3>
               <!-- File Button --> 

<br><br>
<!-- Select Basic -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="doc_url">Please Select Year</label>  

    <div class="row">
   
    </div>
    <div class="form-group">
        <div class="col-md-15 col-sm-3">
     <select id="possible_instances" name="possible_instances" class="form-control">
      <option value="" selected="selected">(Select Year)</option>
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>
    </div>
        <div class="col-md-15 col-sm-3">
    <input id="doc_url" name="doc_url" type="text" placeholder="UK Students" class="form-control input-md">
    </div>
        <div class="col-md-15 col-sm-3">
    <input id="doc_url" name="doc_url" type="text" placeholder="EU Students" class="form-control input-md">
    </div>
        <div class="col-md-15 col-sm-3">
    <input id="doc_url" name="doc_url" type="text" placeholder="Intl Students" class="form-control input-md">
    </div>
           <div class="col-md-15 col-sm-3">
    <input id="doc_url" name="doc_url" type="text" placeholder="Total" class="form-control input-md">
    </div>
</div>
</div>
                <br><br>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Service Provider</h3>
                

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sd_modulepath">SD ModulePath</label>  
  <div class="col-md-5">
  <input id="sd_modulepath" name="sd_modulepath" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sd_filename">SD File Name</label>  
  <div class="col-md-5">
  <input id="sd_filename" name="sd_filename" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>
                 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12" >
                <h3> Actions</h3>
                <div id="field">
                <div id="field0">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="action_id">Action Id</label>  
  <div class="col-md-5">
  <input id="action_id" name="action_id" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br><br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="action_name">Action Name</label>  
  <div class="col-md-5">
  <input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br><br>
       <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="action_json">Action JSON File</label>
  <div class="col-md-4">
          	<input type="file" id="action_json" name="action_json" class="input-file" accept=".txt,.json">
     <div id="action_jsondisplay"></div>
  </div>
</div>

</div>
</div>
<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button id="add-more" name="add-more" class="btn btn-primary">Add More</button>
  </div>
</div>
<br><br>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Email Templates</h3>
                
                <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailType">Email Type</label>  
  <div class="col-md-5">
  <input id="emailType" name="emailType" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<br>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>  
  <div class="col-md-5">
  <input id="description" name="description" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="subject">Subject</label>  
  <div class="col-md-5">
  <input id="subject" name="subject" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="body">Body</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="body" name="body"></textarea>
  </div>
</div>

                 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-6">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Preview & Submit</h3>
                <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
</div>
          
          <!--- Foooter -->
          
  <h2>More About</h2>
  <div class="panel panel-default">
    <div class="panel-heading">Panel Heading</div>
    <div class="panel-body">Panel Content</div>
    <div class="panel-footer">Panel Footer</div>
  </div>
          </div>
   
  </body>
</html>