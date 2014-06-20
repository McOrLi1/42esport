<?php $user = current($user); ?>

<div id="picture-ldm" class="picture">
	<div class="placement">
		<div class="lmp_info">
			<div class="color lmp_photo">

			</div>
			<div class="lmp_user-name">
				<?= $user['username'] ?>
			</div>
			<div class="lmp_user-info">
				<?= $user['name'].' '.$user['lastname'].'<br>'?>
				<?= $user['type'].' '.$user['status'] ?>
			</div>
			<div class="lmp_user-footer">
				<?= $user['birthdate'] ?>
				<?= $user['email'] ?>

			</div>
			<div class="lmp_user-notation rating"><!-- 
				--><a href="#1" title="Donner 1 étoile">☆ </a><!-- 
					--><a href="#2" title="Donner 2 étoiles"> ☆ </a><!-- 
					--><a href="#3" title="Donner 3 étoiles"> ☆ </a><!-- 
					--><a href="#4" title="Donner 4 étoiles"> ☆ </a><!-- 
					--><a href="#5" title="Donner 5 étoiles"> ☆</a>  
			</div>
		</div>
	</div>
</div>
