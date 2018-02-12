<?php
/****************************************************************************************\
**   JoomGallery 3                                                                      **
**   By: JoomGallery::ProjectTeam                                                       **
**   Copyright (C) 2008 - 2021  JoomGallery::ProjectTeam                                **
**   Based on: JoomGallery 1.0.0 by JoomGallery::ProjectTeam                            **
**   Released under GNU GPL Public License                                              **
**   License: http://www.gnu.org/copyleft/gpl.html or have a look                       **
**   at administrator/components/com_joomgallery/LICENSE.TXT                            **
\****************************************************************************************/

defined('_JEXEC') or die('Direct Access to this location is not allowed.');

/**
 * JoomGallery Component Controller
 *
 * @package JoomGallery
 * @since   1.5.5
 */
class JoomGalleryController extends JControllerLegacy
{
  /**
   * JoomConfig object
   *
   * @access  protected
   * @var     object
   */
  protected $_config;

  /**
   * JoomAmbit object
   *
   * @access  protected
   * @var     object
   */
  protected $_ambit;

  /**
   * JDatabase object
   *
   * @access  protected
   * @var     object
   */
  protected $_db;

  /**
   * Constructor
   *
   * @access  protected
   * @return  void
   * @since   1.5.5
   */
  function __construct($config = array())
  {
    parent::__construct($config);

    $this->_ambit     = JoomAmbit::getInstance();
    $this->_config    = JoomConfig::getInstance();
    $this->_db        = JFactory::getDBO();

    // Uncomment following line to disable update check
    // $this->_config->set('jg_checkupdate', 0);
  }
}