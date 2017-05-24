<?php
class PageSpeedController extends Controller {
	public function adminMenuEntriesFilter($entries) {
		$url = "https://developers.google.com/speed/pagespeed/insights/?hl=" . urlencode ( getSystemLanguage () ) . "&url=" . urlencode ( get_protocol_and_domain () );
		$entries [count ( $entries ) - 1] = new MenuEntry ( "PageSpeed Insights", $url, "pagespeed" );
		$entries [] = new MenuEntry ( get_translation ( "logout" ), "?action=destroy", "destroy" );
		return $entries;
	}
}