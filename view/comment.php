<?php
	foreach ($comment as $key => $value) {
		extract($value);
		$user = getById('guest', $id_guest);
		$avatar = $user['image'];
		$name = $user['name'];
		echo "<div class='user'>
				<figure><img class='mb-3' style='width: 50px; height: 50px; object-fit: cover' src='$avatar'alt='>
					<p class='mb-0'>$name</p>
					<figcaption>
						<p>$content</p>
					</figcaption>
				</figure>
			</div>";
	}
?>