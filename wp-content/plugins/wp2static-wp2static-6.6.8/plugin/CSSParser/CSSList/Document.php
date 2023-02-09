<?php

namespace Sabberworm\CSS\CSSList;

class Document extends CSSBlockList
{
    public function __construct($iLineNo = 0)
    {
        parent::__construct($iLineNo);
    }
    public function getAllDeclarationBlocks()
    {
        $aResult = array();
        $this->allDeclarationBlocks($aResult);
        return $aResult;
    }
    public function getAllSelectors()
    {
        return $this->getAllDeclarationBlocks();
    }
    public function getAllRuleSets()
    {
        $aResult = array();
        $this->allRuleSets($aResult);
        return $aResult;
    }
    public function getAllValues($mElement = null, $bSearchInFunctionArguments = false)
    {
        $sSearchString = null;
        if ($mElement === null) {
            $mElement = $this;
        } else if (is_string($mElement)) {
            $sSearchString = $mElement;
            $mElement = $this;
        }
        $aResult = array();
        $this->allValues($mElement, $aResult, $sSearchString, $bSearchInFunctionArguments);
        return $aResult;
    }
    public function getSelectorsBySpecificity($sSpecificitySearch = null)
    {
        if (is_numeric($sSpecificitySearch) || is_numeric($sSpecificitySearch[0])) {
            $sSpecificitySearch = "== $sSpecificitySearch";
        }
        $aResult = array();
        $this->allSelectors($aResult, $sSpecificitySearch);
        return $aResult;
    }
    public function expandShorthands()
    {
        foreach ($this->getAllDeclarationBlocks() as $oDeclaration) {
            $oDeclaration->expandShorthands();
        }
    }
    public function createShorthands()
    {
        foreach ($this->getAllDeclarationBlocks() as $oDeclaration) {
            $oDeclaration->createShorthands();
        }
    }
    public function render(\Sabberworm\CSS\OutputFormat $oOutputFormat = null)
    {
        if ($oOutputFormat === null) {
            $oOutputFormat = new \Sabberworm\CSS\OutputFormat();
        }
        return parent::render($oOutputFormat);
    }
    public function isRootList()
    {
        return true;
    }
}
