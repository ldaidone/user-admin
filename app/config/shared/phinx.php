<?php

return array(
	"paths" => array(
		"migrations" => $_ENV["PHINX_MIGRATIONS"],
		"seeds" => $_ENV["PHINX_SEEDS"],
	),
	"environments" => array(
		"default_migration_table" => $_ENV['PHINX_LOG_TABLE'],
		"default_database" => $_ENV['PHINX_ENVIRONMENT'],
		"development" => array(
			"adapter" => "mysql",
			"host" => $_ENV['DB_HOST'],
			"name" => $_ENV['DB_NAME'],
			"user" => $_ENV['DB_USER'],
			"pass" => $_ENV['DB_PASS'],
			"port" => $_ENV['DB_PORT']
		)
	)
);