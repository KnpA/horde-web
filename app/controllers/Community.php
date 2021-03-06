<?php
/**
 * Community controller class
 *
 * Handles requests to the main community pages.
 *
 * Copyright 2011 Horde LLC (http://www.horde.org)
 *
 * @license  http://opensource.org/licenses/bsd-license.php BSD
 * @author Michael J Rubinsky <mrubinsk@horde.org>
 */
class HordeWeb_Community_Controller extends HordeWeb_Controller_Base
{
    /**
     *
     *
     * @param Horde_Controller_Response $response
     */
    protected function _processRequest(Horde_Controller_Response $response)
    {
        $view = $this->getView();
        switch ($this->_matchDict->action) {
        case 'index':
            $view->page_title = 'Community - The Horde Project';
            $template = 'index';
            break;
        case 'team':
            $view->addTemplatePath($GLOBALS['fs_base'] . '/app/views/shared/authors');
            $view->page_title = 'Team - The Horde Project';
            $view->gravatar = new Horde_Service_Gravatar();
            $template = 'team';
            break;
        case 'mail':
            $view->page_title = 'Mailing Lists - The Horde Project';
            $view->lists = HordeWeb_Utils::getLists();
            $template = 'mail';
            break;
        case 'localization':
        case 'support':
        case 'documentation':
        case 'licenses':
        case 'papers':
            $view->page_title = ucfirst($this->_matchDict->action) . ' - The Horde Project';
            $template = $this->_matchDict->action;
            break;
        default:
            $this->_notFound($response);
            return;
        }

        $layout = $this->getInjector()->getInstance('Horde_Core_Ui_Layout');
        $layout->setView($view);
        $layout->setLayoutName('main');
        $response->setBody($layout->render($template));
    }

    protected function _setup()
    {
        parent::_setup();
        $view = $this->getView();
        $view->addTemplatePath(
            array($GLOBALS['fs_base'] . '/app/views/Community'));
    }

}
