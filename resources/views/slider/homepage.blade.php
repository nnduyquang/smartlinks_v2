Đây là trang layout
<br/>
@for($i=0;$i<=10;$i=$i+1)
	Số thứ tự: {{$i}}<br/>
@endfor
<hr />
<?php $i=0; ?>
@while ($i<=10)
	Số thứ tự: {{$i}}<br/>
	<?php $i++; ?>
@endwhile
<hr />

<?php $array=["cơm","cháo","phở"];?>
@foreach ($array as $item)
	{{$item}},
@endforeach
