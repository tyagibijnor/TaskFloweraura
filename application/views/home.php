<?php if (isset($header)) { echo $header; } ?>
	<?php if (isset($content)) { ?>
    
<center><button class="btn" onclick="exportTableToCSV('tabeldata.csv');start(0);"><i class="fa fa-download" ></i> download as excel sheet</button></center>	
Progress <div id="Progress_Status"> 
<div id="pBar"></div> 
</div>
	<table id="navneet" class="display">
	<thead>
    <tr>
      <th>RecordId</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>Status</th>
      <th>Date</th>
      </tr>
  </thead>
  <tbody>
    <?php 
    foreach ($content as $d) { ?>
    <tr>
      <td><?php echo $d->recordid; ?></td>
      <td><?php echo $d->firstname; ?></td>
      <td><?php echo $d->lastname; ?></td>
      <td><?php echo $d->address; ?></td>
      <td><?php echo $d->status; ?></td>
      <td><?php echo $d->date; ?></td>
	</tr>	

    <?php 
  } }
  ?>
  </tbody>
  <tfoot>
            <tr>
      <th>RecordId</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>Status</th>
      <th>Date</th>
            </tr>
        </tfoot>
</table>
<?php if (isset($footer)) { echo $footer; } ?>