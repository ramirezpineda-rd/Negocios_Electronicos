<?php
/**
 * @cmsmasters_package 	Good Food
 * @cmsmasters_version 	1.0.8
 */


global $product;

if ( ! comments_open() ) {
	return;
}

?>
<div id="reviews">
	<div id="comments" class="post_comments cmsmasters_woo_comments">
		<h3 class="post_comments_title">
			<?php
			$count = $product->get_review_count();
			if ( $count && wc_review_ratings_enabled() ) {
				/* translators: 1: reviews count 2: product name */
				$reviews_title = sprintf( esc_html( _n( '%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'good-food' ) ), esc_html( $count ), '<span>' . get_the_title() . '</span>' );
				echo apply_filters( 'woocommerce_reviews_title', $reviews_title, $count, $product ); // WPCS: XSS ok.
			} else {
				esc_html_e( 'Reviews', 'good-food' );
			}
			?>
		?></h3>

		<?php if ( have_comments() ) : ?>

			<ol class="commentlist">
				<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
			</ol>

			<?php 
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				echo '<nav class="cmsmasters_wrap_pagination">';
				paginate_comments_links(
					apply_filters(
						'woocommerce_comment_pagination_args', 
						array(
							'prev_text' => '<span class="cmsmasters_theme_icon_slide_' . (!is_rtl() ? 'prev' : 'next') . '"></span>',
							'next_text' => '<span class="cmsmasters_theme_icon_slide_' . (!is_rtl() ? 'next' : 'prev') . '"></span>',
							'type'      => 'list',
						)
					)
				);
				echo '</nav>';
			endif;
			?>

		<?php else : ?>

			<p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'good-food' ); ?></p>

		<?php endif; ?>
	</div>

	<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>

		<div id="review_form_wrapper">
			<div id="review_form">
				<?php
					$commenter = wp_get_current_commenter();

					$comment_form = array(
						'title_reply'          => have_comments() ? esc_html__( 'Add a review', 'good-food' ) : sprintf( esc_html__( 'Be the first to review &ldquo;%s&rdquo;', 'good-food' ), get_the_title() ),
						'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'good-food' ),
						'comment_notes_before' => '',
						'comment_notes_after'  => '',
						'id_form'              => 'commentform',
						'id_submit'            => 'submit',
						'fields'               => array(
							'author' => '<p class="comment-form-author">' . "\n" . 
								'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="35" placeholder="' . esc_attr__('Name', 'good-food') . ' *" required />' . "\n" . 
							'</p>' . "\n",
							'email'  => '<p class="comment-form-email">' . "\n" . 
								'<input id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="35" placeholder="' . esc_attr__('Email', 'good-food') . ' *" required />' . "\n" . 
							'</p>' . "\n",
						),
						'label_submit'  => esc_html__( 'Submit', 'good-food' ),
						'logged_in_as'  => '',
						'comment_field' => '',
					);

					$account_page_url = wc_get_page_permalink( 'myaccount' );
					if ( $account_page_url ) {
						/* translators: %s opening and closing link tags respectively */
						$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %slogged in%S to post a review.', 'good-food' ), '<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) . '</p>';
					}

					if ( wc_review_ratings_enabled() ) {
						$comment_form['comment_field'] = '<p class="comment-form-rating"><label for="rating">' . esc_html__( 'Your Rating', 'good-food' ) . '</label><select name="rating" id="rating" required>
							<option value="">' . esc_html__( 'Rate&hellip;', 'good-food' ) . '</option>
							<option value="5">' . esc_html__( 'Perfect', 'good-food' ) . '</option>
							<option value="4">' . esc_html__( 'Good', 'good-food' ) . '</option>
							<option value="3">' . esc_html__( 'Average', 'good-food' ) . '</option>
							<option value="2">' . esc_html__( 'Not that bad', 'good-food' ) . '</option>
							<option value="1">' . esc_html__( 'Very Poor', 'good-food' ) . '</option>
						</select></p>';
					}


					$comment_form['comment_field'] .= '<p class="comment-form-comment">' . 
						'<textarea id="comment" name="comment" cols="67" rows="2" placeholder="' . esc_attr__('Your Review', 'good-food') . '" required></textarea>' . 
					'</p>';

					comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
				?>
			</div>
		</div>

	<?php else : ?>

		<p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'good-food' ); ?></p>

	<?php endif; ?>

	<div class="clear"></div>
</div>
