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
class SR_Elementor_Chart_Widget_2 extends \Elementor\Widget_Base {

	public function get_name() {
		return 'chart-3-pie';
	}

	public function get_title() {
		return esc_html__( 'Pie Charts', 'sr-chart-addon' );
	}

	public function get_icon() {
		return 'eicon-user-preferences';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'chart', 'pie' ];
	}

	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}

    
	protected function register_controls() {

		$this->start_controls_section(
			'sr_pie_chart_section',
			[
				'label' => esc_html__( 'Pie Charts Settings', 'sr-chart-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'xaxes_min_value',
			[
				'label' => esc_html__( 'xAxes Minimum Value', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 40,
			]
		);

		$this->add_control(
			'xaxes_max_value',
			[
				'label' => esc_html__( 'xAxes Max Value', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 160,
			]
		);

		$this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'yaxes_min_value',
			[
				'label' => esc_html__( 'yAxes Minimum Value', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 6,
			]
		);

		$this->add_control(
			'yaxes_max_value',
			[
				'label' => esc_html__( 'yAxes Max Value', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 16,
			]
		);

		$this->add_control(
			'hr_2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


        $this->add_control(
			'list',
			[
				'label' => esc_html__( 'Contect List', 'sr-chart-addon' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'text',
						'label' => esc_html__( 'xAxes', 'sr-chart-addon' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__( 'xAxes Value', 'sr-chart-addon' ),
						'default' => esc_html__( '40', 'sr-chart-addon' ),
					],
					[
						'name' => 'text2',
						'label' => esc_html__( 'yAxes', 'sr-chart-addon' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__( 'xAxes Value', 'sr-chart-addon' ),
						'default' => esc_html__( '10', 'sr-chart-addon' ),
					],
					

				],
				'default' => [
					[
						'text' => esc_html__( '50', 'sr-chart-addon' ),
						'text2' => esc_html__( '7', 'sr-chart-addon' ),
					],
					[
						'text' => esc_html__( '60', 'sr-chart-addon' ),
						'text2' => esc_html__( '8', 'sr-chart-addon' ),
					],
					[
						'text' => esc_html__( '70', 'sr-chart-addon' ),
						'text2' => esc_html__( '9', 'sr-chart-addon' ),
					],
					[
						'text' => esc_html__( '80', 'sr-chart-addon' ),
						'text2' => esc_html__( '10', 'sr-chart-addon' ),
					],
					[
						'text' => esc_html__( '90', 'sr-chart-addon' ),
						'text2' => esc_html__( '11', 'sr-chart-addon' ),
					],
					[
						'text' => esc_html__( '100', 'sr-chart-addon' ),
						'text2' => esc_html__( '12', 'sr-chart-addon' ),
					],
					[
						'text' => esc_html__( '110', 'sr-chart-addon' ),
						'text2' => esc_html__( '13', 'sr-chart-addon' ),
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
		
		$testItemsNumber = array();

		foreach ($settings['list'] as $index => $item) {
			$testItemsNumber[] = array("x" => $item['text'], "y" => $item['text2']);
		}
		?>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


		<canvas id="PlotChart" style="width:100%"></canvas>

		<script>

		var myVariable = JSON.parse('<?= json_encode($testItemsNumber); ?>');
		var xyValues = myVariable;
	
		new Chart("PlotChart", {
		type: "scatter",
		data: {
			datasets: [{
			pointRadius: 6,
			pointBackgroundColor: "rgb(0,0,255)",
			data: xyValues
			}]
		},
		options: {
			legend: {display: false},
			scales: {
			xAxes: [{ticks: {min: <?= $settings['xaxes_min_value']; ?>, max:<?= $settings['xaxes_max_value']; ?>}}],
			yAxes: [{ticks: {min: <?= $settings['yaxes_min_value']; ?>, max:<?= $settings['yaxes_max_value']; ?>}}],
			},
		}
		});
		</script>

		<?php
	}

}