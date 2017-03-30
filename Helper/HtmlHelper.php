<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the General Public License (GPL 3.0).
 * This license is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/gpl-3.0.en.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category    Maxserv: MaxServ_YoastSeo
 * @package     Maxserv: MaxServ_YoastSeo
 * @author      Vincent Hornikx <vincent.hornikx@maxser.com>
 * @copyright   Copyright (c) 2016 MaxServ (http://www.maxserv.com)
 * @license     http://opensource.org/licenses/gpl-3.0.en.php General Public License (GPL 3.0)
 *
 */

namespace MaxServ\YoastSeo\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class HtmlHelper extends AbstractHelper
{

    /**
     * @param $content
     * @return mixed|string
     */
    public function getFirstParagraph($content)
    {
        $startPos = strpos($content, '<p>');
        $endPos = strpos($content, '</p>', $startPos);
        $content = substr($content, $startPos + 3, $endPos - $startPos + 3);
        $content = html_entity_decode(strip_tags($content));
        $content = str_replace("\n", "", $content);

        return $content;
    }
}
