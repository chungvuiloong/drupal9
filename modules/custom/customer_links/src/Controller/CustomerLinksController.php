<?php
namespace Drupal\customer_links\Controller;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

class CustomerLinksController extends ControllerBase {
    // use StringTranslationTrait;

    public function links () {
        $url1 = Url::fromRoute('block.admin_display');
        $link1 = Link::fromTextAndUrl(t("Go to block admin page"), $url1);
        $list[] = $link1;

        $url2 = Url::fromRoute('system.admin_content');
        $link2 = Link::fromTextAndUrl(t("Go to content admin page"), $url2);
        $list[] = $link2;

        // go to link /admin/content
        $url3 = Url::fromRoute('entity.user.collection');
        $link3 = Link::fromTextAndUrl(t("Go to users admin page"), $url3);
        $list[] = $link3;

        // Go front page of website
        $url4 = Url::fromRoute('<front>');
        $link4 = Link::fromTextAndUrl(t("Go to front page"), $url4);
        $list[] = $link4;

        // External link to "bc.fi"
        $url5 = Url::fromUri('https://bc.fi');
        $link_options = [
            "attirbutes" => [
                "target" => '_blank',
                "title" => 'Links to external website'
            ],
        ];
        $url5 -> setOptions($link_options);
        $link5 = Link::fromTextAndUrl(t("Got to external website"), $url5);
        $link[] = $link5;

        // Mount render output to
        $output['customer_links'] =[
            '#theme'=> 'item_list',
            '#items'=> $list,
            '#title'=> $this->t("Customer links as requested:")
        ];
        return $output;
    }
}

