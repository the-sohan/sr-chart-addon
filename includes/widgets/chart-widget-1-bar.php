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
class SR_Elementor_Bar_Chart extends \Elementor\Widget_Base {

	public function get_name() {
		return 'chart-1-bar';
	}

	public function get_title() {
		return esc_html__( 'Basic Charts', 'sr-chart-addon' );
	}

	public function get_icon() {
		return 'eicon-align-end-v';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'bar', 'chart', 'doughnut ' ];
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
			'sr_chart_type',
			[
				'label' => esc_html__( 'Choose a style', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'bar',
				'options' => [
					'bar' => esc_html__( 'Bar Chart', 'textdomain' ),
					'pie' => esc_html__( 'Pie Chart', 'textdomain' ),
					'doughnut' => esc_html__( 'Doughnut Pie Chart', 'textdomain' ),
				]
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
				'label' => esc_html__( 'Chart List', 'sr-chart-addon' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'text',
						'label' => esc_html__( 'Label', 'sr-chart-addon' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__( 'List Item', 'sr-chart-addon' ),
						'default' => esc_html__( 'List Item', 'sr-chart-addon' ),
					],
					[
						'name' => 'number',
						'label' => esc_html__( 'Value', 'sr-chart-addon' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'step' => 1,
						'default' => 10,
					],
					[
						'name' => 'bar_color',
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Text Color', 'sr-chart-addon' ),
						'default' => '#fefefe',
					]

				],
				'default' => [
					[
						'text' => esc_html__( 'Italy', 'sr-chart-addon' ),
						'number' => '55',
						'bar_color' => '#b91d47',
					],
					[
						'text' => esc_html__( 'France', 'sr-chart-addon' ),
						'number' => '49',
						'bar_color' => '#00aba9',
					],
					[
						'text' => esc_html__( 'Spain', 'sr-chart-addon' ),
						'number' => '44',
						'bar_color' => '#2b5797',
					],
					[
						'text' => esc_html__( 'USA', 'sr-chart-addon' ),
						'number' => '24',
						'bar_color' => '#e8c3b9',
					],
					[
						'text' => esc_html__( 'Argentina', 'sr-chart-addon' ),
						'number' => '15',
						'bar_color' => '#1e7145',
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

		if ( $settings['sr_chart_type'] == 'bar' ) {
			$chart_type = 'bar';
		} else if ( $settings['sr_chart_type'] == 'pie' ) {
			$chart_type = 'pie';
		} else if ( $settings['sr_chart_type'] == 'doughnut' ) {
			$chart_type = 'doughnut';
		} else {
			return;
		}

		$listItemsText=[];
		$listItemsNumber=[];
		$listItemsColor=[];
		
		foreach ( $settings['list'] as $index => $item ) : 
			
			array_push( $listItemsText, $item['text'] );
			array_push( $listItemsNumber, $item['number'] );
			array_push( $listItemsColor, $item['bar_color'] );
			
		endforeach; 
		
		$chart_id = 'chartID'. rand();

		?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

        <canvas id="<?php echo $chart_id; ?>" style="width:100%;"></canvas>
             
        <script>
			
			const xValues = JSON.parse('<?= json_encode($listItemsText); ?>');
			const yValues = JSON.parse('<?= json_encode($listItemsNumber); ?>');
			const barColors = JSON.parse('<?= json_encode($listItemsColor); ?>');

			new Chart("<?= $chart_id; ?>", {
			type: "<?= $chart_type; ?>",
			data: {
				labels: xValues,
				datasets: [{
				backgroundColor: barColors,
				data: yValues
				}]
			},
			options: {
				legend: {display: true},
			}
			
			});

        </script>


		
		<?php
	}

}