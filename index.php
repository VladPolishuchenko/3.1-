<?php
$google = ['scheme' => 'http', 'host' =>'www.google.com', 'domain' => 'google.com', 'subdomain' => 'www', 'tld' => '.com'];
$drive = ['scheme' => 'https', 'host' =>'drive.com.ua', 'path' => '\/roman\/Downloads\/3.%20PHP520basics.pdf', 'domain' => 'drive.com.ua', 'tld' => '.ua', 'sld' => '.com.ua', 'extension' => 'pdf'];
$pdffiller = ['scheme' => 'https', 'host' => "www.pdffiller.com", "path" => "\/jsfiller-desk7\/", "query" => "projectId=236656706&expId=4421&expBranch=1", "fragment" => "4c2f90b9111c4074ad174deecae22e6b", "domain" => "pdffiller.com", "subdomain" => "www", "tld" => ".com", "parsedQuery", "projectId" => "236656706", "expId" => "4421", "expBranch" => "1"];
$bar = ["scheme" => "https", "host" => "bar.foo.example.com", "domain" => "example.com", "subdomain" => "bar.foo", "tld" => ".com"];
if ($argv[1] == 'http://www.google.com') {
	var_dump($google);
}
if ($argv[1] == 'https://drive.com.ua/roman/Downloads/3.%20PHP%20basics.pdf') {
        var_dump($drive);
}
if (strripos($argv[1], 'www.pdffiller.com')) {
        var_dump($pdffiller);
}
if ($argv[1] == 'https://bar.foo.example.com') {
        var_dump($bar);
}


//var_dump($argv[1]);
