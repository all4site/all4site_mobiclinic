<?php
  ## отключаем создание миниатюр файлов для указанных размеров

  function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, array(
	  'large',
	) );
  }

  function disable_wp_responsive_images() {
	return 1;
  }

