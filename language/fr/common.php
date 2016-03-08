<?php
/**
 *
 * @package phpBB Extension - Incognito
 * @copyright (c) 2015 steveurkel
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
		'ANONYM'						=> 'Publier anonymement',
		'ANONYM_EXPLAIN'				=> 'Cocher la case pour publier de façon anonyme. Ceci ne peut pas être annulé par la suite.',
		
		'ACP_INCOGNITO_TITLE'			=> 'Incognito Module',
		'ACP_INCOGNITO'					=> 'Paramètres',
		'ACP_INCOGNITO_GOODBYE'			=> 'Publier anonymement activé?',
		'ACP_INCOGNITO_SETTING_SAVED'	=> 'Les paramètres ont été sauvés !',
		'ACP_INCOGNITO_NAME'			=> 'Nom affiché',
		'ACP_INCOGNITO_NAME_EXPLAIN'	=> 'sera affiché comme nom d\'utilisateur pour le post - Si laissé vide, une valeur par défaut sera utilisée.',
));
