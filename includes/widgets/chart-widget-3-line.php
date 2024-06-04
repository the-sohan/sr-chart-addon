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
class SR_Elementor_Chart_Line extends \Elementor\Widget_Base {

	public function get_name() {
		return 'chart-3-line';
	}

	public function get_title() {
		return esc_html__( 'Line Chart', 'sr-chart-addon' );
	}

	public function get_icon() {
		return 'eicon-user-preferences';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'chart', 'line' ];
	}

	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}

    
	protected function register_controls() {

		$this->start_controls_section(
			'sr_line_content',
			[
				'label' => esc_html__( 'Chart Content', 'sr-chart-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
				'label' => esc_html__( 'Chart List', 'sr-chart-addon' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'x_value',
						'label' => esc_html__( 'xValues', 'sr-chart-addon' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'step' => 10,
						'default' => 50,
					],
					[
						'name' => 'y_value',
						'label' => esc_html__( 'yValues', 'sr-chart-addon' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'step' => 1,
						'default' => 10,
					]

				],
				'default' => [
					[
						'x_value' => '50',
						'y_value' => '7',
					],
					[
						'x_value' => '60',
						'y_value' => '8',
					],
					[
						'x_value' => '70',
						'y_value' => '8',
					],
					[
						'x_value' => '80',
						'y_value' => '9',
					],
					[
						'x_value' => '90',
						'y_value' => '9',
					],
					[
						'x_value' => '100',
						'y_value' => '9',
					],
					[
						'x_value' => '110',
						'y_value' => '10',
					],
					[
						'x_value' => '120',
						'y_value' => '11',
					],
					[
						'x_value' => '130',
						'y_value' => '14',
					],
					[
						'x_value' => '140',
						'y_value' => '14',
					],
					[
						'x_value' => '150',
						'y_value' => '15',
					],
				],
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

		$listXvalue=[];
		$listYvalue=[];
		
		foreach ( $settings['list'] as $index => $item ) : 
			
			array_push( $listXvalue, $item['x_value'] );
			array_push( $listYvalue, $item['y_value'] );
			
		endforeach; 
		
		$chart_id = 'chartID'. rand();
		$xValues = 'xValues'. rand();
		$yValues = 'yValues'. rand();

		?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

        <canvas id="<?php echo $chart_id; ?>" style="width:100%;"></canvas>
             
        <script>
			
			const <?= $xValues ?> = JSON.parse('<?= json_encode($listXvalue); ?>');
			const <?= $yValues ?> = JSON.parse('<?= json_encode($listYvalue); ?>');

			new Chart("<?= $chart_id; ?>", {
			type: "line",
			data: {
				labels: <?= $xValues ?>,
				datasets: [{
					fill: false,
					lineTension: 0,
					backgroundColor: "rgba(0,0,255,1.0)",
					borderColor: "rgba(0,0,255,0.1)",
					data: <?= $yValues ?>
				}]
			},
			options: {
				legend: {display: false},
				scales: {
					yAxes: [{ticks: {min: <?= $settings['yaxes_min_value']; ?>, max:<?= $settings['yaxes_max_value']; ?>}}],
				}
			}
			
			});

        </script>


		
		<?php
	}
}