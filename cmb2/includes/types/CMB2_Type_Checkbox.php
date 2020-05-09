<?php
/**
 * CMB checkbox field type
 *
 * @since  2.2.2
 *
 * @category  WordPress_Plugin
 * @package   CMB2
 * @author    CMB2 team
 * @license   GPL-2.0+
 * @link      https://cmb2.io
 */
class CMB2_Type_Checkbox extends CMB2_Type_Text {

	/**
	 * If checkbox is checked
	 *
	 * @var mixed
	 */
	public $is_checked = null;

	/**
	 * Constructor
	 *
	 * @since 2.2.2
	 *
	 * @param CMB2_Types $types
	 * @param array      $args
	 */
	public function __construct( CMB2_Types $types, $args = array(), $is_checked = null ) {
		parent::__construct( $types, $args );
		$this->is_checked = $is_checked;
	}

	public function render( $args = array() ) {
		$defaults = array(
			'type'  => 'checkbox',
			'class' => 'cmb2-option cmb2-list',
			'value' => 'on',
			'desc'  => '',
		);
		// var_dump($this); exit;

		$meta_value = $this->field->escaped_value();
		// var_dump(!empty($meta_value)); exit;
		// var_dump($is_checked); exit;
		// $meta_value = null;

		//nullと$this->is_checkedが等しいか
		//等しいなら、$meta_valueのemptyかどうか、!だから逆だけど
		//この逆の値を入れる
		//offなので、$meta_valueもしかして,,,,
		//offなので、trueが入ってしまう
		//$meta_value に nullを入れるとoffになるが、こんどはずっとoffになる
		$is_checked = null === $this->is_checked ? ! empty( $meta_value ) : $this->is_checked;

		// $is_checked = null;
		// var_dump($is_checked); exit;
		if ( $is_checked ) {
			$defaults['checked'] = 'checked';
		}
		// var_dump($this); exit;


		$args = $this->parse_args( 'checkbox', $defaults );

		// var_dump($args); exit;
		// $args["value"] = off;
		return $this->rendered(
			sprintf(
				'%s <label for="%s">%s</label>',
				parent::render( $args ),
				$this->_id(),
				$this->_desc()
			)
		);
	}

}
