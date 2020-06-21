<?php namespace AirConditioner\Config;

use CodeIgniter\Config\BaseConfig;

class TableBootstrap extends BaseConfig
{
	protected $template = [];

	public function __construct()
	{
		$this->setTemplate();
	}

	private function setTemplate()
	{
		$template = [
			'table_open'         => '<div class="table-responsive"><table class="table table-bordered">',

			'thead_open'         => '<thead>',
			'thead_close'        => '</thead>',

			'heading_row_start'  => '<tr>',
			'heading_row_end'    => '</tr>',
			'heading_cell_start' => '<th>',
			'heading_cell_end'   => '</th>',

			'tfoot_open'         => '<tfoot>',
			'tfoot_close'        => '</tfoot>',

			'footing_row_start'  => '<tr>',
			'footing_row_end'    => '</tr>',
			'footing_cell_start' => '<td>',
			'footing_cell_end'   => '</td>',

			'tbody_open'         => '<tbody>',
			'tbody_close'        => '</tbody>',

			'row_start'          => '<tr>',
			'row_end'            => '</tr>',
			'cell_start'         => '<td>',
			'cell_end'           => '</td>',

			'row_alt_start'      => '<tr>',
			'row_alt_end'        => '</tr>',
			'cell_alt_start'     => '<td>',
			'cell_alt_end'       => '</td>',

			'table_close'        => '</table></div>'
		];

		$this->template = $template;
	}

	public function getTemplate()
	{
		return $this->template;
	}
}
