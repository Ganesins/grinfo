<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style></style>
</head>
<body>


<table>

    <tr>
    	<th>Name</th>
    	<th><i class="fa fa-check" style="font-size:48px;color:green;"></i></th><th><i class="fa fa-close" style="font-size:48px;color:red;"></i></th>
    </tr>

      <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


	<tr>
			<td><?php echo e($new->id); ?></td>
			<td><?php echo e($new->name); ?></td>
			<!-- <td><a href="delete/<?php echo e($new->id); ?>">delete</a></td> -->
			 <td>
        <a href="delete/<?php echo e($new->id); ?>"><i class="fa fa-check" style="font-size:48px;color:green;"></i></a></td>
      

		</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


		</tr>
	</table>
	</body>
</html><?php /**PATH /home/ganesan/task/resources/views/list.blade.php ENDPATH**/ ?>