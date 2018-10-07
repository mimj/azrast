<?php
/**
 * Created by PhpStorm.
 * User: Maysam
 * Date: 10/7/2018
 * Time: 4:36 PM
 */


namespace Mimj\AzRast;

use Parsedown;
use Wa72\HtmlPageDom\HtmlPageCrawler;

class RtlIt
{
    protected $md;
    public $html;


    public function text($md)
    {
        $this->md = $md;

        $parsedown = new Parsedown();
        $this->html = $parsedown->text($md);
        $c = new HtmlPageCrawler($this->html);
        $c->wrap("<div>");
        $c->filter("pre")->setAttribute('dir', 'ltr');
        return "<div dir='rtl'>" . $c->saveHTML() . "</div>";
    }
}