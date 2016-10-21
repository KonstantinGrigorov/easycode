<?php 
error_reporting(-1);
require_once 'db.php';
header('Content-Type: text/html; charset=utf-8');


?>

<?php 
$sql = "SELECT 
    w.worker_id, 
    w.fio, 
    w.birthdate,
    d.department_name,
    p.position_name,
    pt.paymenttype_name 
    FROM worker w
    LEFT JOIN department d
    ON w.department_id = d.department_id
    LEFT JOIN position p
    ON w.position_id = p.position_id
    LEFT JOIN paymenttype pt
    ON w.paymenttype_id = pt.paymenttype_id";
$workers = query($sql);
?>
<div class="container">
	<table class="table table-bordered">
	  <tr>
	  	<td>Id</td>
	  	<td>FIO</td>
	  	<td>Date of birth</td>
      <td>Department</td>
      <td>Position</td>
	  	<td>Paymenttype</td>

	  <tr>	
	  <?php foreach ($workers as $worker): ?>
	      <tr>
              <td><?php echo $worker['worker_id']; ?></td>
              <td><?php echo $worker['fio']; ?></td>
              <td><?php echo $worker['birthdate']; ?></td>
              <td><?php echo $worker['department_name']; ?></td>
              <td><?php echo $worker['position_name']; ?></td>
              <td><?php echo $worker['paymenttype_name']; ?></td>
              
	      </tr>
	  <?php endforeach; ?>
	</table>
</div>	

<?php 
//require_once 'footer.php';
?>