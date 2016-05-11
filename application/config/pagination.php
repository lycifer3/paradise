<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Setting pagination
 */
$config['num_links'] = 2;
$config['per_page']  = 2;
/**
 * Add markup
 */
$config['full_tag_open'] = '<ul>';
$config['full_tag_close'] = '</ul>';

/**
 * Setting links pointing to the first page
 */
$config['first_link'] = 'Первая';
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';

/**
 * Setting links pointing to the last page
 */
$config['last_link'] = 'Последняя';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';

/**
 *Setting links pointing to the next page
 */
$config['next_link'] = 'Следущая';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';

/**
 * Setting links pointing to the previous page
 */
$config['prev_link'] = 'Предыдущая';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';

/**
 * Setting links pointing to the current page
 */
$config['cur_tag_open'] = '<li><span>';
$config['cur_tag_close'] = '</span></li>';

/**
 * Setting numerical references
 */
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';