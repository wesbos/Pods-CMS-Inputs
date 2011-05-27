<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/wb.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/style.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/jquery.css" />



<h3>Text</h3>
	<h4>String</h4>
		<input type="text" class="pods-text" />
	<h4>Paragraph Text</h4>
		<textarea name="pods-textarea" class="pods-textarea" cols="100" rows="10"></textarea>
	
	<h4>Code</h4>
		<textarea  name="pods-code" class="pods-code" cols="100" rows="10"></textarea>

	<h4>Slug</h4>
		<input type="text" class="pods-slug" />
		<p class="input-info">A slug may contain lowercase letters, numbers and dashes</p>

<h3>Date Picker</h3>
	<h4>Date</h4>
		<input type="text" class="pods-date" />
	<h4>Time</h4>
		<input type="text" class="pods-time" />
	<h4>Date + Time</h4>
		<input type="text" class="pods-date-time" />

<h3>Number</h3>
	<h4>Whole Number</h4>
		<input type="text" class="pods-whole-number" />
	<h4>Decimal Number</h4>
		<input type="text" class="pods-decimal-number" />
	<h4>Slider Simple</h4>
		<span id="ammount1"></span>
		<div class="pods-slider pods-slider-simple" />
	<h4>Sliders Range</h4>
		<div class="pods-slider pods-slider-range" />
	<h4>Slider Increment</h4>
		<div class="pods-slider pods-slider-increment" />
		
		
<h3>Taxonomy</h3>
	<h4>Autocomplete Categories</h4>
	<?php
		$cats = get_categories('hide_empty=0'); $i=0; $catsarr = "";
		foreach ($cats as $cat) {
			$catsarr[$i] = $cat->name;
			$i++;
		}
		echo "<input type='hidden' class='pods-autocomplete-category-source' value='".json_encode($catsarr)."' />";
	?>
	<input type="text" class="pods-autocomplete-category" />
	
	
	
	
	
	
	
	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>

Date (options: Date, Date + Time, Time)

Number (options: dec 0, dec 2, dec custom)

Boolean (tinyint)
Single Line Text (varchar 255)
Paragraph Text (longtext)
Code (longtext)
File Upload (rel - options: single, multiple; [options: file extensions allowed])
n/a -- Using slugs built into the WP Object types (where slugs are available)
Relationship (rel - options: single, multiple; [options: checkbox, select, radio, autocomplete, 2 column select]; [addtl: select related field on Pod-based object, PICK Filter, PICK Orderby])
Custom (add your own via a plugin through a filter)