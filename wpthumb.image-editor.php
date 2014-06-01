<?php

/**
 * Class WP_Thumb_Image_Editor_GD
 */
class WP_Thumb_Image_Editor_GD extends WP_Image_Editor_GD {

	/**
	 * Returns the image property.
	 *
	 * @return mixed
	 */
	public function get_image() {
		return $this->image;
	}

	/**
	 * Sets the image property.
	 *
	 * @param $image
	 */
	public function update_image( $image ) {
		$this->image = $image;
	}

	/**
	 * @todo: provide a meaningful description.
	 *
	 * @param null $width
	 * @param null $height
	 *
	 * @return mixed
	 */
	public function update_size( $width = null, $height = null ) {
		return parent::update_size( $width, $height);
	}
}

/**
 * Class WP_Thumb_Image_Editor_Imagick
 */
class WP_Thumb_Image_Editor_Imagick extends WP_Image_Editor_Imagick {

	/**
	 * Gets the image property.
	 *
	 * @return mixed
	 */
	public function get_image() {
		return $this->image;
	}

	/**
	 * Sets the image property.
	 *
	 * @param $image
	 */
	public function update_image( $image ) {
		$this->image = $image;
	}

	/**
	 * @param null $width
	 * @param null $height
	 *
	 * @return mixed
	 */
	public function update_size( $width = null, $height = null ) {
		return parent::update_size( $width, $height);
	}
}