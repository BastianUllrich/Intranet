<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\NewsBundle\EventListener;

use Contao\CoreBundle\Framework\ContaoFrameworkInterface;
use Contao\Environment;
use Contao\LayoutModel;
use Contao\Model\Collection;
use Contao\NewsFeedModel;
use Contao\PageModel;
use Contao\StringUtil;
use Contao\Template;

/**
 * Adds the news feeds to the page header.
 *
 * @author Andreas Schempp <https://github.com/aschempp>
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class GeneratePageListener
{
    /**
     * @var ContaoFrameworkInterface
     */
    private $framework;

    /**
     * Constructor.
     *
     * @param ContaoFrameworkInterface $framework
     */
    public function __construct(ContaoFrameworkInterface $framework)
    {
        $this->framework = $framework;
    }

    /**
     * Adds the feeds to the page header.
     *
     * @param PageModel          $pageModel
     * @param LayoutModel|object $layoutModel
     */
    public function onGeneratePage(PageModel $pageModel, LayoutModel $layoutModel)
    {
        $newsfeeds = StringUtil::deserialize($layoutModel->newsfeeds);

        if (empty($newsfeeds) || !\is_array($newsfeeds)) {
            return;
        }

        $this->framework->initialize();

        /** @var NewsFeedModel $adapter */
        $adapter = $this->framework->getAdapter(NewsFeedModel::class);

        if (!($feeds = $adapter->findByIds($newsfeeds)) instanceof Collection) {
            return;
        }

        $this->addFeedMarkupToPageHeader($feeds);
    }

    /**
     * Adds the feed markup to the page header.
     *
     * @param Collection|NewsFeedModel[] $feeds
     */
    private function addFeedMarkupToPageHeader(Collection $feeds)
    {
        /** @var Template $template */
        $template = $this->framework->getAdapter(Template::class);

        /** @var Environment $environment */
        $environment = $this->framework->getAdapter(Environment::class);

        foreach ($feeds as $feed) {
            $GLOBALS['TL_HEAD'][] = $template->generateFeedTag(
                sprintf('%sshare/%s.xml', ($feed->feedBase ?: $environment->get('base')), $feed->alias),
                $feed->format,
                $feed->title
            );
        }
    }
}
