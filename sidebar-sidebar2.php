				<aside id="sidebar2" class="sidebar" role="complementary">

						<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

							<?php dynamic_sidebar( 'sidebar2' ); ?>

						<?php else : ?>

							<!-- This content shows up if there are no widgets defined in the backend. -->

							<p>Please activate some Widgets.</p>

						<?php endif; ?>

				</aside>