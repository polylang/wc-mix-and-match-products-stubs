<?php

use StubsGenerator\Finder;

return Finder::create()
	->in(
		[
			'woocommerce-mix-and-match-products/includes',
		]
	)
	->append(
		Finder::create()
			->in(
				[
					'woocommerce-mix-and-match-products',
				]
			)
			->files()
			->depth( '== 0' )
	)
	->sortByName();
