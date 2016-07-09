<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  
                 <link href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.theme.css" rel="stylesheet">
		<link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.structure.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo $this->config->base_url(); ?>_/css/fullcalendar.css" rel="stylesheet">
	<link href="<?php echo $this->config->base_url(); ?>_/css/fullcalendar.print.css" rel="stylesheet">

                <link href="<?php echo $this->config->base_url(); ?>_/css/style.css" rel="stylesheet">	
		</head>

	<body>  
<div class="modal fade" id="changeuser">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<!--<h3><strong>حذف بيانات</strong></h3> -->
					</div>
					<form action="" method="post">
						<div class="modal-body row">
								<div class="form-group formLayout col-md-7">
						<label for="username" class="control-label " >إسم المستخدم: </label>
						 <input type="text" id="username" name="username" value="" class="form-control" placeholder="إسم المستخدم" />
					</div> 
						<div class="form-group formLayout col-md-7">
						<label for="password" class="control-label " >كلمة المرور: </label>
						 <input type="text" id="password" name="password"   class="form-control" placeholder="كلمة المرور " />
					</div>
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm" type="submit" id="Donechange">تغيير</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 
	<!--------------------------------------------------------------menubar---------------------------------------->
		<div class="menubar">
			<div class="row">
			<?php $this->load->view('toolbar'); ?>
				<div class="col-md-2 col-md-offset-10 ">
						<?php $this->load->view('MenuBar');?>
				</div>
			
				<div class="col-md-10 notes">
		<div class="changeuser"><a href="#" data-toggle='modal' data-target="#changeuser"><i class="fa fa-cog" aria-hidden="true"></i></a>
</div>

					<div class="dashboard-content bottom">
						<div class="row">
						<div class="col-md-4 paneldata">
	
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
   
  </div>
						</div>
						<div class="col-md-4 datadash">
							<ul class="rotate">
								<li><div class="father">
									<?php foreach ($employeecount as $x){ 
										?>
									<div class="back"><i class="fa fa-users"></i> <h3><span> <?php echo $x->count; ?></span>عدد الموظفين</h3></div>
								<?php } ?>
								</div></li>
								<li><div class="father2">
									<?php foreach ($demandscount as $x){ 
										?>

									<div class="back2"><i class="fa fa-folder-open" aria-hidden="true"></i> <h3><span><?php echo $x->count; ?></span>الطلبات</h3></div>
									<?php } ?>
								</div></li>
								<li><div class="father3">
									<?php foreach ($offerscount as $x){ 
										?>
									<div class="back3"><i class="fa fa-pie-chart"></i><h3><span><?php echo $x->count; ?></span>العروض</h3></div>
										<?php } ?>				
									</div></li>
							</ul>
						</div>

							<div class="col-md-4 ">
								<?php foreach ($employee as $value) {
									
								?>
								<div class="profilehome">
								<div class="imgprofhome ">
						    <img src="../_/images/<?php echo $value->image;?>" alt="profile" class="profil_imgdetails"><br>
<!-- 							<img src="<?php echo $this->config->base_url(); ?>_/images/profile1.jpg">
 -->								<h3><?= $value->name ?></h3>
								
								</div>
								<div class="profilehomedetails ">
									<p>Welcome back <br>
									please check your pending task <br><br>
									<!-- <i class="fa fa-clock-o"></i>11:30 Am <br>
									<i class="fa fa-calendar-o"></i> 29 Mar 2016 -->
									</p>
								</div>

							</div>
							<?php }?>
						</div>	
						</div>
						<div class="row">
							
							<div class="col-md-12">
							<!--div id='calendar'></div-->
							</div>
							<!--div class="col-md-4">
							<!-- 	<div class="tdl-holder">
								<h2>ملاحظات</h2>
								<div class="tdl-content">
									<ul>
										<li><label><input type="checkbox"><i></i><span>أتراج</span><a href='#'>–</a></label></li>
										<li><label><input type="checkbox" checked><i></i><span>مواعيد العمل</span><a href='#'>–</a></label></li>
										<li><label><input type="checkbox"><i></i><span>طلب عميل</span><a href='#'>–</a></label></li>
										<li><label><input type="checkbox" checked><i></i><span>طلب إيجار</span><a href='#'>–</a></label></li>
										<li><label><input type="checkbox"><i></i><span>طلب إيجار شهر يونيو</span><a href='#'>–</a></label></li>
									</ul>
								</div>
								<input type="text" class="tdl-new" placeholder="Write new item and hit 'Enter'...">
							</div> -->
						
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>


	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->


<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-1.10.2.js"></script>

<script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-ui.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-ui.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/sarah.js"></script> 
<script src="<?php echo $this->config->base_url(); ?>_/js/Atrag.js"></script>
<script>
var exampleBarChartData = {
    "datasets": {
        "values": [5, 10, 30, 50, 20],
        "labels": [
            "Apples", 
            "Oranges", 
            "Berries", 
            "Peaches", 
            "Bananas"
        ], "color": "blue"
    },
    "title": "Example Bar Chart",
    "height": "300px",
    "width": "500px",
    "background": "#FFFFFF",
    "shadowDepth": "1"
};
</script>
<script>
  /* TO DO LIST */
  $(".tdl-new").bind('keypress', function(e){
    var code = (e.keyCode ? e.keyCode : e.which);
    if(code == 13) {
      var v = $(this).val();
      var s = v.replace(/ +?/g, '');
      if (s == ""){
        return false;
      }else{
        $(".tdl-content ul").append("<li><label><input type='checkbox'><i></i><span>"+ v +"</span><a href='#'>–</a></label></li>");
        $(this).val("");
      }
    }
  });


  $(".tdl-content a").bind("click", function(){
    var _li = $(this).parent().parent("li");
        _li.addClass("remove").stop().delay(100).slideUp("fast", function(){
          _li.remove();
        });
    return false;
  });

  // for dynamically created a tags
  $(".tdl-content").on('click', "a", function(){
    var _li = $(this).parent().parent("li");
        _li.addClass("remove").stop().delay(100).slideUp("fast", function(){
          _li.remove();
        });
    return false;
  });
</script>
<script type="text/javascript">
		
		/*
			jQuery document ready
		*/
		
		$(document).ready(function()
		{
			/*
				date store today date.
				d store today date.
				m store current month.
				y store current year.
			*/
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
			
			/*
				Initialize fullCalendar and store into variable.
				Why in variable?
				Because doing so we can use it inside other function.
				In order to modify its option later.
			*/
			
			var calendar = $('#calendar').fullCalendar(
			{
				/*
					header option will define our calendar header.
					left define what will be at left position in calendar
					center define what will be at center position in calendar
					right define what will be at right position in calendar
				*/
				header:
				{
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				/*
					defaultView option used to define which view to show by default,
					for example we have used agendaWeek.
				*/
				defaultView: 'agendaWeek',
				/*
					selectable:true will enable user to select datetime slot
					selectHelper will add helpers for selectable.
				*/
				selectable: true,
				selectHelper: true,
				/*
					when user select timeslot this option code will execute.
					It has three arguments. Start,end and allDay.
					Start means starting time of event.
					End means ending time of event.
					allDay means if events is for entire day or not.
				*/
				select: function(start, end, allDay)
				{
					/*
						after selection user will be promted for enter title for event.
					*/
					var title = prompt('Event Title:');
					/*
						if title is enterd calendar will add title and event into fullCalendar.
					*/
					if (title)
					{
						calendar.fullCalendar('renderEvent',
							{
								title: title,
								start: start,
								end: end,
								allDay: allDay
							},
							true // make the event "stick"
						);
					}
					calendar.fullCalendar('unselect');
				},
				/*
					editable: true allow user to edit events.
				*/
				editable: true,
				/*
					events is the main option for calendar.
					for demo we have added predefined events in json object.
				*/
				events: [
					{
						title: 'All Day Event',
						start: new Date(y, m, 1)
					},
					{
						title: 'Long Event',
						start: new Date(y, m, d-5),
						end: new Date(y, m, d-2)
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d-3, 16, 0),
						allDay: false
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d+4, 16, 0),
						allDay: false
					},
					{
						title: 'Meeting',
						start: new Date(y, m, d, 10, 30),
						allDay: false
					},
					{
						title: 'Lunch',
						start: new Date(y, m, d, 12, 0),
						end: new Date(y, m, d, 14, 0),
						allDay: false
					},
					{
						title: 'Birthday Party',
						start: new Date(y, m, d+1, 19, 0),
						end: new Date(y, m, d+1, 22, 30),
						allDay: false
					},
					{
						title: 'Click for Google',
						start: new Date(y, m, 28),
						end: new Date(y, m, 29),
						url: 'http://google.com/'
					}
				]
			});
			
		});
</script>
	</body>
</html>