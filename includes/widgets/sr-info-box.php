<?php
namespace SR_Elementor_Chart_Addon;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class SR_Info_Box_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'sr-info-box';
	}

	public function get_title() {
		return esc_html__( 'SR Info Box', 'elementor-oembed-widget' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'info-box' ];
	}

	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}

    
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'elementor-oembed-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'box_title',
			[
				'label' => esc_html__( 'Info Box Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);

		$this->add_control(
			'box_image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'short_description',
			[
				'label' => esc_html__( 'Short Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your description here', 'textdomain' ),
			]
		);

		$this->add_control(
			'link_or_popup',
			[
				'label' => esc_html__( 'Select button action', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1' => esc_html__( 'External link', 'textdomain' ),
					'2' => esc_html__( 'Show popup', 'textdomain' ),
				]
			]
		);

		$this->add_control(
			'button_text',
			[
				'label' => esc_html__( 'Button text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Button text', 'textdomain' ),
				'default' => esc_html__( 'Button text', 'textdomain' ),
				'condition' => [
					'link_or_popup' => '1',
				]
			]
		);

		$this->add_control(
			'button_link',
			[
				'label' => esc_html__( 'Extrenal Link', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
				'condition' => [
					'link_or_popup' => '1',
				]
			]
		);

		$this->add_control(
			'popup_info',
			[
				'label' => esc_html__( 'Popup Info', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'link_or_popup' => '2',
				]
			]
		);

		$this->add_control(
			'item_description',
			[
				'label' => esc_html__( 'Item Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your description here', 'textdomain' ),
				'condition' => [
					'link_or_popup' => '2',
				]
			]
		);

		$this->add_control(
			'item_gallery',
			[
				'label' => esc_html__( 'Add Images', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'show_label' => false,
				'default' => [],
				'condition' => [
					'link_or_popup' => '2',
				]
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display(); ?>

		<div class="sr-info-box-wrapper">
		
		<?php if ( !empty( $settings['box_image'] ) ) : ?>
			<div class="sr-info-box-thumbnail">
				<?php echo '<img src="' . esc_url( $settings['box_image']['url'] ) . '" alt="">'; ?>
			</div>
		<?php endif; 

		if ( !empty( $settings['box_title'] ) ) : ?>
			<div class="sr-info-box-title">
				<h3 class="title">
					<?php echo $settings['box_title']; ?>
				</h3>
			</div>
		<?php endif;
		
		if ( !empty( $settings['short_description'] ) ) : 
		?>
			<div class="sr-info-box-short-desc">
				<?php echo $settings['short_description']; ?>
			</div>
		<?php endif; 
		
		if ( $settings['link_or_popup'] == '1' &&  !empty( $settings['button_text'] ) ) : 
		?>
			<div class="sr-info-box-button">
				<a href="<?php echo $settings['button_link']['url']; ?>"><?php echo $settings['button_text']; ?></a>
			</div>
		<?php endif;
		
		if ( $settings['link_or_popup'] == '2' ) : 
		?>
			<div class="sr-info-box-popup-wrapper">

				<!-- Trigger/Open The Modal -->
				<?php 
					$sr_popup_btn = 'srpopupbtn'. rand();
					$sr_popup_modal = 'srpopupmodal'. rand();
				?>
				<button id="<?php echo $sr_popup_btn; ?>" class="sr-info-box-popup-button">Preview</button>

				<!-- The Modal -->
				<div id="<?php echo $sr_popup_modal;?>" class="sr-info-box-popup-modal">

				<!-- Modal content -->
				<div class="sr-info-box-popup-content">
					<div class="sr-info-box-popup-header">
						<span class="close">&times;</span>
					</div>

					<?php if ( !empty( $settings['box_title'] ) ) : ?>
						<div class="sr-info-box-popup-title">
							<h2> <?php echo $settings['box_title']; ?> </h2>
						</div>
					<?php endif; ?>

					<div class="sr-info-box-popup-desc-wrap">
						<?php if ( !empty( $settings['item_description'] ) ) : ?>
							<div class="sr-info-box-popup-description">
								<?php echo $settings['item_description']; ?>
							</div>
						<?php endif; ?>
						

						<?php if ( !empty( $settings['box_image'] ) ) : ?>
							<div class="sr-info-box-thumbnail">
								<?php echo '<img src="' . esc_url( $settings['box_image']['url'] ) . '" alt="">'; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>

				<script>
				// Get the modal
				var modal = document.getElementById("<?php echo $sr_popup_modal; ?>");

				// Get the button that opens the modal
				var btn = document.getElementById("<?php echo $sr_popup_btn; ?>");

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];

				// When the user clicks the button, open the modal 
				btn.onclick = function() {
				modal.style.display = "block";
				}

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() {
				modal.style.display = "none";
				}

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
				}
				</script>
			</div>
		</div>
		<?php endif; ?>

		





		
<?php		
	}
}