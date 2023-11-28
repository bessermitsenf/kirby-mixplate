<?php

use Kirby\Cms\Page;

function aria_current_attr(Page $page): string|bool
{
	return $page->isActive()
			? "page"
			: ($page->isOpen() ? "true" : false);
}
