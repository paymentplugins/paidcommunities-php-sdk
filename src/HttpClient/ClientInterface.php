<?php

namespace PaidCommunities\HttpClient;

interface ClientInterface {

	public function request( $method, $path );

	function getBaseUrl();
}