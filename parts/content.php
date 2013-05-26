<h1 role="banner"><?php bloginfo( 'name' ) ?></h1>

<h2>Typography</h2>

<h3>Headings, Body text</h3>

<div class="example">
	<article role="article">
		<h2>The Title Goes Here</h2>	
		
		<p>The first paragraph of an article automatically becomes bigger.</p>
		<p class="align right"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></p>
		<p>Lorem ipsum dolor sit amet, <i>consectetur adipisicing elit</i>, sed do eiusmod tempor incididunt ut <em>labore et dolore magna</em> aliqua. Ut enim ad minim veniam, quis <a href="#">nostrud exercitation</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		
		<h4>A quite small Heading</h4>
		<p class="muted small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <a href="#">tempor incididunt</a> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
	</article>
</div>

<pre>&lt;article role=&quot;article&quot;&gt;
		&lt;h2&gt;The Title Goes Here&lt;/h2&gt;	
		
		&lt;p&gt;The first paragraph of an article automatically becomes bigger.&lt;/p&gt;
		&lt;p class=&quot;align right&quot;&gt;&lt;img src=&quot;http://path.to/src/&quot; alt=&quot;thumbnail&quot; /&gt;&lt;/p&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet, ...&lt;/p&gt;
		
		&lt;h4&gt;A quite small Heading&lt;/h4&gt;
		&lt;p class=&quot;muted small&quot;&gt;Lorem ipsum dolor ...&lt;/p&gt;
	&lt;/article&gt;
</pre>

<h2>Lists</h2>

<h3>Unordered List</h3>

<div class="example">
<ul>
	<li>Lorem ipsum dolor sit amet</li>
	<li>Nulla volutpat aliquam velit
		<ul>
			<li>Phasellus iaculis neque</li>
			<li>Purus sodales ultricies</li>
			<li>Vestibulum laoreet porttitor sem</li>
		</ul>
	</li>
	<li>Aenean sit amet erat nunc</li>
</ul>
</div>
<pre>&lt;ul&gt;
	&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	&lt;li&gt;Nulla volutpat aliquam velit
		&lt;ul&gt;
			&lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
			&lt;li&gt;Purus sodales ultricies&lt;/li&gt;
			&lt;li&gt;Vestibulum laoreet porttitor sem&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
&lt;/ul&gt;
</pre>

<h3>Ordered List</h3>

<div class="example">
<ol>
	<li>Lorem ipsum dolor sit amet</li>
	<li>Consectetur adipiscing elit</li>
	<li>Integer molestie lorem at massa</li>
	<li>Facilisis in pretium nisl aliquet</li>
</ol>
</div>
<pre>&lt;ol&gt;
	&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
	&lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
	&lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
	&lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
&lt;/ol&gt;
</pre>

<h3>Definition List</h3>

<div class="example">
<dl>
	<dt>The title is here</dt>
	<dd>Lorem ipsum definition goes here dolor sit amet.</dd>
	<dt>The title is here</dt>
	<dd>Lorem ipsum definition goes here dolor sit amet.</dd>
	<dt>The title is here</dt>
	<dd>Lorem ipsum definition goes here dolor sit amet.</dd>
</dl>
</div>
<pre>&lt;dl&gt;
	&lt;dt&gt;The title is here&lt;/dt&gt;
	&lt;dd&gt;Lorem ipsum definition goes here dolor sit amet.&lt;/dd&gt;
	&lt;dt&gt;The title is here&lt;/dt&gt;
	&lt;dd&gt;Lorem ipsum definition goes here dolor sit amet.&lt;/dd&gt;
	&lt;dt&gt;The title is here&lt;/dt&gt;
	&lt;dd&gt;Lorem ipsum definition goes here dolor sit amet.&lt;/dd&gt;
&lt;/dl&gt;
</pre>

<h3>Meta</h3>

<div class="example">
<dl class="meta">
	<dt>Posts</dt>
	<dd>42</dd>
	<dt>Comments</dt>
	<dd>119</dd>
	<dt>Views</dt>
	<dd>6790</dd>
</dl>
</div>
<pre>

</pre>
<h3>Data Table</h3>

<table>
	<tr>
		<th>Post Title</th>
		<th>Date</th>
		<th>Categories</th>
	</tr>

<?php global $post; foreach ( get_posts() as $post ) : setup_postdata( $post );  ?>

	<tr>
		<td><?php the_title() ?></td>
		<td style="white-space: nowrap;"><?php echo get_the_date() ?></td>
		<td><?php the_category(', ') ?></td>
	</tr>
 	
<?php endforeach ?>

</table>

<h3>Slats</h3>

<ol class="slats">

	<?php global $post; foreach ( get_posts() as $post ) : setup_postdata( $post );  ?>
		
		<li class="group">
			<a href="#">
				<p class="align left"><img src="http://placehold.it/66x66&text=X" alt="thumbnail" /></p>
				<h4><?php the_title() ?></h4>
				<p><?php the_excerpt() ?></p>
			</a>
		</li>

		<tr>
			<td></td>
			<td style="white-space: nowrap;"><?php echo get_the_date() ?></td>
			<td><?php the_category(', ') ?></td>
		</tr>
	 	
	<?php endforeach ?>

	
	<li class="group">
		<a href="#">
			<img src="http://placehold.it/66x66&text=X" alt="thumbnail" />
			<h3>This is the title</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="meta">August 10, 2011</span></p>
		</a>
	</li>
	<li class="group">
		<a href="#">
			<img src="http://placehold.it/66x66&text=X" alt="thumbnail" />
			<h3>This is the title</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="meta">August 10, 2011</span></p>
		</a>
	</li>
</ol>		

<h3>Thumbnail Grids</h3>	

<ol class="thumb-grid group">
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
	<li><a href="#"><img src="http://placehold.it/160x160&text=X" alt="thumbnail" /></a></li>
</ol>			

<h2>Navigation</h2>


<h3>Horizontal Navigation</h3>

<p>Add <code>.horizontal-nav</code> to any menu.</p>

<div class="example"><?php part( 'navigation' ) ?></div>

<pre>wp_nav_menu(array(
	'menu_class' => 'horizontal-nav'
))
</pre>


<h3>Vertical Navigation</h3>

<p>Add <code>.vertical-nav</code> to any menu.</p>

<div class="example">
	<?php wp_nav_menu(array(
		'theme_location' => 'primary',
		'menu_class' => 'vertical-nav',
		'container' => false
	)) ?>
</div>

<pre>wp_nav_menu(array(
	'menu_class' => 'vertical-nav'
))
</pre>


<h3>Divided Navigation </h3>

<p>Add <code>.divided-nav</code> to any menu.</p>

<div class="example">
	<?php wp_nav_menu(array(
		'theme_location' => 'primary',
		'menu_class' => 'vertical-nav divided-nav',
		'container' => false
	)) ?>
</div>

<pre>wp_nav_menu(array(
	'menu_class' => 'vertical-nav divided-nav'
))
</pre>

<div class="example">
	<?php wp_nav_menu(array(
		'theme_location' => 'primary',
		'menu_class' => 'horizontal-nav divided-nav',
		'container' => false
	)) ?>
</div>

<pre>wp_nav_menu(array(
	'menu_class' => 'horizontal-nav divided-nav'
))
</pre>


<h3>Button Navigation</h3>

<p>Add <code>.btn</code> to any menu item.</p>

<div class="example">
	<?php wp_nav_menu(array(
		'theme_location' => 'primary',
		'menu_class' => 'horizontal-nav btn-nav',
		'container' => false
	)) ?>
</div>

<pre>wp_nav_menu(array(
	'menu_class' => 'horizontal-nav btn-nav',
))
</pre>


<h3>Pagination</h3>

<p>Just use the built-in function <code>paginate_links()</code> wrapped in a <code>.pagination</code> container.</p>

<div class="example">
	<nav class="pagination">
		<?php echo paginate_links( array(
		'type'       => 'list',
		'total'        => 15,
		'current'      => 6,
		'prev_text'    => __('←'),
		'next_text'    => __('→'),
	) ) ?>
	</nav>
</div>

<pre>&lt;div class="pagination"&gt;
	paginate_links( array(
		'type' => 'list'
	) )
&lt;/div&gt;
</pre>

<h2>Forms</h2>

<h3>Buttons</h3>

<div class="example">
	
  	<p><input class="btn" type="submit" value="Submit" /></p>
  	<p><button class="btn" type="button">Default button</button></p>
  	<p><button class="btn btn-neutral" type="button">Neutral button</button></p>
  	<p><button class="btn positive-btn" type="button">Default button</button></p>
  	<p><button class="btn danger-btn" type="button">Danger button</button></p>
  	<p><button class="btn dark-btn" type="button">Dark button</button></p>

</div>

<pre>
</pre>


<h3>Multi - labels left</h3>

<form action="/">
	<fieldset>
		<label for="name">Name</label>
		<input type="text" id="name" class="form-text" />
		<p class="small">This is help text under the form field.</p>
	</fieldset>
	
	<fieldset>
		<label for="email">Email</label>
		<input type="email" id="email" class="form-text" />
	</fieldset>
	
	<fieldset>
		<label for="gender">Gender</label>
		<select id="gender">
			<option>Male</option>
			<option>Female</option>
			<option>Cylon</option>
		</select>
	</fieldset>

	<fieldset class="radio">
		<label for="notifications">Notifications</label>
		<ul>
			<li><label><input type="radio" name="notifications" /> Send me email</label></li>
			<li><label><input type="radio" name="notifications" /> Don't send me email</label></li>
			<li><label><input type="radio" name="notifications" /> Send me flowers</label></li>
		</ul>
	</fieldset>

	<fieldset>
		<label for="url">URL</label>
		<input type="url" id="url" class="form-text" placeholder="http://yourdomain.com" />
	</fieldset>

	<fieldset>
		<label for="bio">Bio</label>
		<textarea id="bio"></textarea>
	</fieldset>
	
	<fieldset class="check">
		<label><input type="checkbox" /> I accept the terms of service and lorem ipsum.</label>
	</fieldset>

	<fieldset class="form-actions">
		<input type="submit" value="Submit" />
	</fieldset>
</form>			
			
<h3>Multi - labels top</h3>

<form action="/">
	<fieldset>
		<label for="name">Name</label>
		<input type="text" id="name" class="form-text" />
		<p class="small">This is help text under the form field.</p>
	</fieldset>
	
	<fieldset>
		<label for="email">Email</label>
		<input type="email" id="email" class="form-text" />
	</fieldset>
	
	<fieldset>
		<label for="gender">Gender</label>
		<select id="gender">
			<option>Male</option>
			<option>Female</option>
			<option>Cylon</option>
		</select>
	</fieldset>

	<fieldset class="radio">
		<label for="notifications">Notifications</label>
		<ul>
			<li><label><input type="radio" name="notifications" /> Send me email</label></li>
			<li><label><input type="radio" name="notifications" /> Don't send me email</label></li>
			<li><label><input type="radio" name="notifications" /> Send me flowers</label></li>
		</ul>
	</fieldset>

	<fieldset>
		<label for="url">URL</label>
		<input type="url" id="url" class="form-text" placeholder="http://yourdomain.com" />
	</fieldset>

	<fieldset>
		<label for="bio">Bio</label>
		<textarea id="bio"></textarea>
	</fieldset>
	
	<fieldset class="check">
		<label><input type="checkbox" /> I accept the terms of service and lorem ipsum.</label>
	</fieldset>

	<fieldset class="form-actions">
		<input type="submit" value="Submit" />
	</fieldset>
</form>		


<h3>Alerts</h3>	
				

<h3>Search</h3>

<?php get_search_form() ?>	
				
<h3>Simple - top labels</h3>

<form action="/">
	<fieldset>
		<label for="name">Name</label>
		<input type="text" id="name" class="form-text" />
		<p class="form-help">This is help text under the form field.</p>
	</fieldset>
	
	<fieldset>
		<label for="email">Email</label>
		<input type="email" id="email" class="form-text" />
	</fieldset>

	<fieldset class="form-actions">
		<input type="submit" value="Submit" />
	</fieldset>
</form>

<h3>Icons</h3>

