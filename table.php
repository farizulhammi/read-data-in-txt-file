<table cellspacing="0" cellpadding="5">
<tr>
<th>#</th>
<th>Nama</th>
</tr>
<?php
$no = 1;
$data = file('Data.txt');
//print_r($data);
foreach ($data as $row){
?>
<tr>
<td><?= $no++;?></td>
<td><?= $row;?></td>
</tr>
<?php
}
?>
