<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<body>
		<h1>Menu:</h1>
		<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<form action="updateData">
			Menu ID:<input type="text" name="menu_id" value="<?php echo e($value['menu_id']); ?>"><br>
			Menu Title:<input type="text" name="menu_title" value="<?php echo e($value['menu_title']); ?>"><br>
			Menu Level:<input type="text" name="menu_level" value="<?php echo e($value['menu_level']); ?>"><br>
			Menu Parent:<input type="text" name="menu_parents" value="<?php echo e($value['menu_parents']); ?>"><br><br>
		  <input type="submit" value="Update">
		</form> 
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</body>
</body>
</html>