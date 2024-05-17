<?php
namespace SR_Elementor_Chart_Addon;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class SR_Elementor_Chart_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'chart-1-bar';
	}

	public function get_title() {
		return esc_html__( 'Bar Charts', 'sr-chart-addon' );
	}

	public function get_icon() {
		return 'eicon-align-end-v';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'bar', 'chart' ];
	}

	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}

    
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'sr-chart-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'sr_chart_title',
			[
				'label' => esc_html__( 'Chart Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
				'label_block' => true
			]
		);

		
		$this->add_control(
			'sr_chart_title_after_divider',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
			'list',
			[
				'label' => esc_html__( 'List', 'sr-chart-addon' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'text',
						'label' => esc_html__( 'Text', 'sr-chart-addon' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__( 'List Item', 'sr-chart-addon' ),
						'default' => esc_html__( 'List Item', 'sr-chart-addon' ),
					],
					[
						'name' => 'number',
						'label' => esc_html__( 'Number', 'sr-chart-addon' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'step' => 5,
						'default' => 10,
					],
					[
						'name' => 'color',
						'label' => esc_html__( 'Color (Type color name or code)', 'sr-chart-addon' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__( 'color', 'sr-chart-addon' ),
						'default' => esc_html__( 'red', 'sr-chart-addon' ),
					],
					[
						'name' => 'colorpics',
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Copy color from here and paste above', 'sr-chart-addon' ),
						'default' => '#ddd',
					],

				],
				'default' => [
					[
						'text' => esc_html__( 'List Item #1', 'sr-chart-addon' ),
						
					],
					[
						'text' => esc_html__( 'List Item #2', 'sr-chart-addon' ),
						
					],
				],
				'title_field' => '{{{ text }}}',
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
		$settings = $this->get_settings_for_display();

		if ( ! $settings['list'] ) {
			return;
		}

		$listItemsText=[];
		$listItemsNumber=[];
		$listItemsColor=[];
		
		foreach ( $settings['list'] as $index => $item ) : 
			
			array_push( $listItemsText, $item['text'] );
			array_push( $listItemsNumber, $item['number'] );
			array_push( $listItemsColor, $item['color'] );
			
		endforeach; ?>

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->

        <canvas id="myChart" style="width:100%;"></canvas>
             
        <script>
			
			var myVariable = JSON.parse('<?= json_encode($listItemsText); ?>');
			var xValues = myVariable;
		
			var myVariable2 = JSON.parse('<?= json_encode($listItemsNumber); ?>');
			var yValues = myVariable2;
			
			var myVariable3 = JSON.parse('<?= json_encode($listItemsColor); ?>');
			var barColors = myVariable3;

			// var barColors = ["red", "green","blue","orange","#ddd"];

			new Chart("myChart", {
			type: "bar",
			data: {
				labels: xValues,
				datasets: [{
				backgroundColor: barColors,
				data: yValues
				}]
			},
			options: {
				legend: {display: false},
				title: {
				display: true,
				text: "<?= $settings['sr_chart_title']; ?>"
				}
			}
			});

        </script>



		
		<?php
	}

}