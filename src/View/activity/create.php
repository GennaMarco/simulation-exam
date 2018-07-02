<?php require '../Database/DatabaseMySQL.php'; ?>
<?php require '../Manager/ActivityManager.php'; ?>
<?php require '../Manager/ActivityDateManager.php'; ?>
<?php require '../Manager/RoleManager.php'; ?>
<?php require '../Entity/Activity.php'; ?>
<?php require '../Entity/ActivityDate.php'; ?>

<?php 

$routeAccess = new RouteAccess();
$routeAccess->allowRouteAccessToRoles([ROLE_MANAGER_CODE]);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$activityManager = new ActivityManager();
	$activity = new Activity();
	$activity->setName($_POST['activityName']);
	$lastActivityId = $activityManager->insertActivity($activity);

	$activityDateManager = new ActivityDateManager();
	foreach($_POST['activityDates'] as $date){
		$activityDate = new ActivityDate();
		$activityDate->setDate($date);
		$activityDate->setActivityId($lastActivityId);
		$activityDateManager->insertActivityDate($activityDate);
	}
	$_SESSION['message'] = 'Dati salvati con successo!';
}

?>

<div class="row">
	<?php if(isset($_SESSION['message'])) : ?>
		<div class="alert alert-success" role="alert">
	  		<?php 
	  			  echo $_SESSION['message'];
	  			  unset($_SESSION['message']);
	  		 ?>
		</div>
	<?php endif; ?>
    <h1 class="text-center">Create Activity</h1>
    <div class="col-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-xl-offset-4 col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
	    <form method="POST">
	        <div class="form-group">
	            <label>Name</label>
	            <input class="form-control" name="activityName" type="text">
	        </div>
	        <hr />
	        <table class="table table-condensed">
	            <thead>
	                <tr>
	                    <th>List of dates</th>
	                </tr>
	            </thead>
	            <tbody class="activity-dates-list">
	                <tr>
	                    <td class="text-center">
	                        <div>
	                            <input class="form-control" name="activityDates[]" type="text" data-role="activity-date" data-input-type="date">
	                        </div>
	                    </td>
	                </tr>
	                <tr>
	                    <td>
	                        <a class="btn btn-primary" data-role="add-activity-date">Add</a>
	                    </td>
	                </tr>
	            </tbody>
	        </table>
	        <button type="submit" class="btn btn-success">Save</button>
	    </form>
	</div>
</div>
