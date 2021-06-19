<?php

namespace dokuwiki\plugin\odt;

use dokuwiki\Menu\Item\AbstractItem;

/**
 * Class MenuItemODT
 *
 * Implements the ODT export button for DokuWiki's menu system
 *
 * @package dokuwiki\plugin\odt
 */
class MenuItemODTDOCX extends AbstractItem {

    /** @var string do action for this plugin */
    protected $type = 'export_odt_docx';

    /** @var string icon file */
    protected $svg = DOKU_INC . 'lib/plugins/odt/menu-odt-doc.svg';

    /**
     * MenuItem constructor.
     */
    public function __construct() {
        parent::__construct();
        global $REV;
        if($REV) $this->params['rev'] = $REV;
    }

    /**
     * Get label from plugin language file
     *
     * @return string
     */
    public function getLabel() {
        return 'ODT => DOC Export';
    }
}
