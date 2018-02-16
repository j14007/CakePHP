<?php echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyD_jRiObwkkOiuU2RxUkFIQiQH6VEiYk7E',false); ?>



<div class="locations index">
	<h2><?php echo __('Locations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('elevation'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($locations as $location): ?>
	<tr>
		<td><?php echo h($location['Location']['id']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['name']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['zipcode']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['address']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['longitude']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['elevation']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['created']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $location['Location']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $location['Location']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $location['Location']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $location['Location']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<?php $i=1; ?>
	<?php foreach($locations as $location): ?>
	
	<?php
	//1番目の受取
	if($i == 1){
	   $latitude = $location['Location']['latitude'];
	   $longitude = $location['Location']['longitude'];
	   $address = $location['Location']['address'];
	   $i++;
	   	   //マップオプション設定
	   $map_options = array(
	   'id' => 'map1', //地図を表示させたいID名
	   'zoom' => 14, //地図表示のズームレベル
	   'type' => 'ROAD', //地図表示のタイプ
	   //'custom' => null, //地図コントローラなどのオプション
	   'localize' => false, //地図表示の時にGPSで現在地を使うかどうかのオプション
	   'latitude' => $latitude, //地図表示のときの緯度
	   'longitude' => $longitude, //地図表示のときの経度
	   'marker' => true, //マーカーの使用
	   //'markerIcon' => 'https://maps.google.com/mapfiles/kml/shapes/parking_lot_maps.png', //マーカーのアイコン
	   //'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png', //マーカーの影
	   'infoWindow' => true, //マーカーをクリックしたときのウインドウ表示
	   'windowText' => $location['Location']['name'].":".$location['Location']['address']
	   );
	}

	?>
	<?php endforeach; ?>
	
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">// <![CDATA[
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = new google.visualization.DataTable();
		data.addColumn('string', 'id');
		data.addColumn('number', 'elevation');
		<?php foreach($locations as $location): ?>

			data.addRows([
				['<?php echo h($location['Location']['id']); ?>', 
				<?php echo h($location['Location']['elevation']); ?>]
			]);
		<?php endforeach; ?>


var options = {
title: 'My Daily Activities'
};
 
var chart = new google.visualization.LineChart(document.getElementById('piechart'));
chart.draw(data, options);
}
// ]]></script></pre>
<div id="piechart" style="width: 900px; height: 500px;"></div>
	
	<!--マップ表示-->
	<div id = "map">
	    <?php echo $this->GoogleMap->map($map_options); ?>
    </div>
    	<?php $i=1; ?>>
	<?php foreach($locations as $locations): ?>
	<?php
	if($i>1){
	   $marker_options = array(
	   'showWindow' => true,
	   'windowText' => $location['Location']['name'].":".$location['Location']['address'],
	   'markerTitle' => 'Title',
	   'markerIcon' => 'https://maps.google.com/mapfiles/kml/shapes/parking_lot_maps.png', //マーカーのアイコン
	   );
	   echo $this->GoogleMap->addMarker('map1', $i, array('latitude' => $location['Location']['latitude'],
	   'longitude' => $location['Location']['longitude']),$marker_options);
	   }
	   $i++; ?>
	   <?php endforeach; ?>
    
    <p>

	   
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?></li>
	</ul>
</div>



