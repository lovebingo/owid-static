"6�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:681:"SELECT relevanssi.*, relevanssi.title * 5 + relevanssi.content + relevanssi.comment * 0.75 + relevanssi.tag * 0.75 + relevanssi.link * 0 + relevanssi.author + relevanssi.category * 0.75 + relevanssi.excerpt + relevanssi.taxonomy + relevanssi.customfield + relevanssi.mysqlcolumn AS tf 
					  FROM wp_relevanssi AS relevanssi  WHERE (term LIKE '%d7eaeaa7b2f1aeb8dfbdce914915f56d' OR term LIKE 'd7eaeaa7b2f1aeb8dfbdce914915f56d%')   AND relevanssi.doc NOT IN (621,6792,6918,4723,2951,4811,6966,7298,3153) AND ((relevanssi.doc IN (SELECT DISTINCT(posts.ID) FROM wp_posts AS posts
				WHERE posts.post_type IN ('post', 'page', 'attachment'))) OR (doc = -1)) ORDER BY tf DESC LIMIT 500";s:11:"last_result";a:0:{}s:8:"col_info";a:20:{i:0;O:8:"stdClass":13:{s:4:"name";s:3:"doc";s:7:"orgname";s:3:"doc";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49163;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:4:"term";s:7:"orgname";s:4:"term";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:200;s:9:"charsetnr";i:224;s:5:"flags";i:16395;s:4:"type";i:253;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:12:"term_reverse";s:7:"orgname";s:12:"term_reverse";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:200;s:9:"charsetnr";i:224;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:7:"content";s:7:"orgname";s:7:"content";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:5:"title";s:7:"orgname";s:5:"title";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:7:"comment";s:7:"orgname";s:7:"comment";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:3:"tag";s:7:"orgname";s:3:"tag";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:4:"link";s:7:"orgname";s:4:"link";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:6:"author";s:7:"orgname";s:6:"author";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:8:"category";s:7:"orgname";s:8:"category";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:7:"excerpt";s:7:"orgname";s:7:"excerpt";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:8:"taxonomy";s:7:"orgname";s:8:"taxonomy";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:11:"customfield";s:7:"orgname";s:11:"customfield";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:11:"mysqlcolumn";s:7:"orgname";s:11:"mysqlcolumn";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:9;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:9;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:15:"taxonomy_detail";s:7:"orgname";s:15:"taxonomy_detail";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:224;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:18:"customfield_detail";s:7:"orgname";s:18:"customfield_detail";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:224;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:18:"mysqlcolumn_detail";s:7:"orgname";s:18:"mysqlcolumn_detail";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:224;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:4:"type";s:7:"orgname";s:4:"type";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:840;s:9:"charsetnr";i:224;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"item";s:7:"orgname";s:4:"item";s:5:"table";s:10:"relevanssi";s:8:"orgtable";s:13:"wp_relevanssi";s:3:"def";s:0:"";s:2:"db";s:14:"owid_wordpress";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49155;s:4:"type";i:8;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:2:"tf";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:23;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:246;s:8:"decimals";i:2;}}s:8:"num_rows";i:0;s:10:"return_val";i:0;}